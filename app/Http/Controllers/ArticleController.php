<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
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

        $articles = Article::with('rssFeeds')->where($filter)->orderBy('published_at', 'desc')->paginate(8);

        if (request()->json) {
            return response()->json($articles);
        }

        return view('pages.articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $article->load('rssFeeds');

        if (request()->json) {
            return response()->json($article);
        }

        return view('pages.articles.show', compact('article'));
    }
}