<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RssFeed extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'rss_feeds';

    protected $fillable = [
        'title',
        'link',
        'country',
        'language',
        'tags',
        'image_url',
        'pulling_frequency',
        'last_pull_at',
    ];

    protected $casts = [
        'pulling_frequency' => 'integer',
        'last_pull_at' => 'datetime',
    ];

    public function isDue()
    {
        if (!$this->last_pull_at) {
            return true;
        }

        return $this->last_pull_at->diffInMinutes(now()) >= $this->pulling_frequency;
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, RssFeedArticle::class, 'rss_feed_id', 'article_id');
    }
}