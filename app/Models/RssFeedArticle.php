<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RssFeedArticle extends Pivot
{
    protected $table = 'rss_feed_articles';

    protected $fillable = [
        'rss_feed_id',
        'article_id',
    ];

    public function rssFeed()
    {
        return $this->belongsTo(RssFeed::class, 'rss_feed_id', 'id');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }
}