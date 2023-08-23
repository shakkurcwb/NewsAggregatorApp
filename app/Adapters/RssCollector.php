<?php

namespace App\Adapters;

use App\Models\RssFeed;
use App\Models\Article;

class RssCollector
{
    protected RssFeed $rssFeed;

    public function __construct(RssFeed $rssFeed)
    {
        $this->rssFeed = $rssFeed;
    }

    public function collect()
    {
        if (!$this->rssFeed->isDue()) {
            return;
        }

        $rss = simplexml_load_file($this->rssFeed->link);

        foreach ($rss->channel->item as $item) {
            // skip articles without publication date
            if (empty((string) $item->pubDate)) {
                continue;
            }

            $article = Article::updateOrCreate([
                'link' => (string) $item->guid,
            ], [
                'title' => (string) $item->title,
                'description' => (string) $item->description ? (string) $item->description : null,
                'published_at' => (string) $item->pubDate,
            ]);

            $this->rssFeed->articles()->syncWithoutDetaching($article);
        }

        $this->rssFeed->update([
            'last_pull_at' => now(),
        ]);

        return;
    }
}
