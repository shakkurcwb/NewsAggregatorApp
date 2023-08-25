<?php

namespace App\Adapters;

use Illuminate\Support\Facades\Log;

use App\Models\RssFeed;
use App\Models\Article;

class RssCollector
{
    protected RssFeed $rssFeed;

    protected const MAX_DIFF_MINUTES = 120; // 2 hours

    public function __construct(RssFeed $rssFeed)
    {
        $this->rssFeed = $rssFeed;
    }

    public function collect()
    {
        /*
        if (!$this->rssFeed->isDue()) {
            return;
        }
        */

        try {
            $rss = simplexml_load_file($this->rssFeed->link);
        } catch (\Exception $e) {
            Log::error("RssCollector error for {$this->rssFeed->link}: {$e->getMessage()}");
            return;
        }

        foreach ($rss->channel->item as $item) {
            $published_at_str = (string) $item->pubDate;

            // skip articles without publication date
            if (empty($published_at_str)) {
                continue;
            }

            // set timezone for data consistency
            $published_at = \Carbon\Carbon::parse($published_at_str, 'GMT')->setTimezone(config('app.timezone'));

            // skip old articles
            if ($published_at->diffInMinutes() > RssCollector::MAX_DIFF_MINUTES) {
                continue;
            }

            $article = Article::updateOrCreate([
                'link' => (string) $item->guid,
            ], [
                'title' => (string) $item->title,
                'description' => (string) $item->description ? (string) $item->description : null,
                'published_at' => $published_at,
            ]);

            $this->rssFeed->articles()->syncWithoutDetaching($article);
        }

        $this->rssFeed->update([
            'last_pull_at' => now(),
        ]);

        return;
    }
}
