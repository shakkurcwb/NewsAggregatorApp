<?php

namespace App\Http\Controllers;

use App\Models\Article;

class LiveController extends Controller
{
    public function index()
    {
        $filter = function ($query) {
            if (request('search')) {
                $query->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('link', 'like', '%' . request('search') . '%')
                    ->orWhere('description', 'like', '%' . request('search') . '%')
                    ->orWhere(function ($query) {
                        $query->whereHas('rssFeeds', function ($query) {
                                $query->where('title', 'like', '%' . request('search') . '%')
                                ->orWhere('tags', 'like', '%' . request('search') . '%');
                            });
                    });
            }
        };

        $articles = Article::with('rssFeeds')->where($filter)->orderBy('published_at', 'desc')->simplePaginate(12);

        return view('pages.live.index', compact('articles'));
    }
}