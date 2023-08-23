<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

use Telegram\Bot\Laravel\Facades\Telegram;

use App\Models\Article;

class TelegramHandler extends Command
{
    protected $signature = 'telegram:handler';

    protected $description = 'Listen to Telegram messages and handle the response accordingly';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->line('Processing Telegram Messages...');

        $offset = Cache::get('telegram_update_id', 0);

        $updates = Telegram::getUpdates(['offset' => $offset + 1]);

        foreach ($updates as $update) {
            $this->line('- Processing Telegram Message: ' . $update->getMessage()->getText());

            $this->processUpdate($update);

            $this->line('- Processed Telegram Message: ' . $update->getMessage()->getText());

            Cache::put('telegram_update_id', $update->getUpdateId());
        }

        return 1;
    }

    protected function processUpdate($update)
    {
        $message = $update->getMessage();

        $chatId = $message->getChat()->getId();

        $text = $message->getText();

        if (empty($text)) {
            return;
        }

        $filter_rss_feeds = function ($query) use ($text) {
            $query->whereHas('rssFeeds', function ($query) use ($text) {
                    $query->where('title', 'like', '%' . $text . '%')
                    ->orWhere('tags', 'like', '%' . $text . '%');
                });
        };

        $filter_articles = function ($query) use ($text, $filter_rss_feeds) {
            $query->where('title', 'like', '%' . $text . '%')
                ->orWhere('link', 'like', '%' . $text . '%')
                ->orWhere('description', 'like', '%' . $text . '%')
                ->orWhere($filter_rss_feeds);
        };

        $articles = Article::with('rssFeeds')->where($filter_articles)->orderBy('published_at', 'desc')->paginate(4);

        $this->line('- Found ' . $articles->count() . 'x articles for query: ' . $text);

        if ($articles->count() == 0) {
            Telegram::sendMessage([
                'chat_id' => $chatId,
                'text' => 'No articles found for your search query: ' . $text,
            ]);

            return;
        }

        foreach ($articles as $article) {
            $icon = $article->published_at->diffInMinutes() < 30 ? '🔥' : '📰';

            $timestamp = $article->published_at->diffForHumans();

            $message = "{$icon} {$timestamp}\n*{$article->title}*\n{$article->link}";

            Telegram::sendMessage([
                'chat_id' => $chatId,
                'parse_mode' => 'Markdown',
                'text' => $message,
            ]);
        }

        return;
    }
}