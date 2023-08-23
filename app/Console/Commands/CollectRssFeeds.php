<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CollectRssFeeds extends Command
{
    protected $signature = 'rss:collect';

    protected $description = 'Collect RSS Feeds';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->line('Collecting RSS Feeds...');

        $feeds = \App\Models\RssFeed::all();

        foreach ($feeds as $feed) {
            $this->line('- Collecting RSS Feed: ' . $feed->link);

            $rssCollector = new \App\Adapters\RssCollector($feed);
            $rssCollector->collect();

            $this->line('- Collected RSS Feed: ' . $feed->link);
        }

        return 1;
    }
}
