<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'title',
        'link',
        'description',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'last_edition_at' => 'datetime',
    ];

    public function rssFeeds()
    {
        return $this->belongsToMany(RssFeed::class, RssFeedArticle::class, 'article_id', 'rss_feed_id');
    }
}