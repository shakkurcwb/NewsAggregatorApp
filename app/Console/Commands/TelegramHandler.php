<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

use Telegram\Bot\Laravel\Facades\Telegram;

use App\Models\Article;

class TelegramHandler extends Command
{
    protected const TELEGRAM_CACHE_KEY = 'telegram_update_id';

    protected const OLD_MESSAGE_DIFF_MINUTES = 15; // 15 minutes

    protected const HOT_ARTICLE_DIFF_MINUTES = 15; // 15 minutes

    protected $signature = 'telegram:handler';

    protected $description = 'Listen to Telegram messages and handle the response accordingly';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->line('Processing Telegram Messages...');

        $offset = Cache::get(TelegramHandler::TELEGRAM_CACHE_KEY, 0);

        $updates = Telegram::getUpdates(['offset' => $offset + 1]);

        foreach ($updates as $update) {
            $this->line('- Processing Telegram Message: ' . $update->getMessage()->getText());

            $this->processUpdate($update);

            $this->line('- Processed Telegram Message: ' . $update->getMessage()->getText());

            Cache::put(TelegramHandler::TELEGRAM_CACHE_KEY, $update->getUpdateId());
        }

        return 1;
    }

    protected function processUpdate($update)
    {
        $message = $update->getMessage();

        $text = $message->getText();

        // skip if no text
        if (empty($text)) {
            return;
        }

        // set timezone for data consistency
        $received_at = \Carbon\Carbon::parse($message->getDate())->setTimezone(config('app.timezone'));

        // skip old messages
        if ($received_at->diffInMinutes() > TelegramHandler::OLD_MESSAGE_DIFF_MINUTES) {
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

        $filter = $filter_articles;
        if (strtolower($text) == 'latest') {
            $filter = function () {};
        }

        $articles = Article::with('rssFeeds')->where($filter)->orderBy('published_at', 'desc')->paginate(4);

        $this->line('- Found ' . $articles->count() . 'x articles for query: ' . $text);

        if ($articles->count() == 0) {
            Telegram::sendMessage([
                'chat_id' => $message->getChat()->getId(),
                'text' => 'No articles found for your query: ' . $text,
            ]);

            return;
        }

        foreach ($articles as $article) {
            $icon = $article->published_at->diffInMinutes() < TelegramHandler::HOT_ARTICLE_DIFF_MINUTES ? '🔥' : '📰';

            $timestamp = $article->published_at->diffForHumans();

            $formatted_message = "{$icon} {$timestamp}\n*{$article->title}*\n{$article->link}";

            Telegram::sendMessage([
                'chat_id' => $message->getChat()->getId(),
                'parse_mode' => 'Markdown',
                'text' => $formatted_message,
            ]);
        }

        $query = sprintf("?search=%s", urlencode($text));
        if (strtolower($text) == 'latest') {
            $query = '';
        }

        Telegram::sendMessage([
            'chat_id' => $message->getChat()->getId(),
            'parse_mode' => 'Markdown',
            'text' => "🧭 Follow latest news at:\n" . url("/live{$query}"),
        ]);

        return;
    }
}
