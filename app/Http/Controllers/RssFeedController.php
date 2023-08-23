<?php

namespace App\Http\Controllers;

use App\Models\RssFeed;
use App\Adapters\RssCollector;

class RssFeedController extends Controller
{
    public function index()
    {
        $filter = function ($query) {
            if (request('search')) {
                $query->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('link', 'like', '%' . request('search') . '%')
                    ->orWhere('country', 'like', '%' . request('search') . '%')
                    ->orWhere('language', 'like', '%' . request('search') . '%')
                    ->orWhere('tags', 'like', '%' . request('search') . '%');
            }
        };

        $feeds = RssFeed::where($filter)->paginate(8);

        return view('pages.rss-feeds.index', compact('feeds'));
    }

    public function create()
    {
        return view('pages.rss-feeds.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'link' => [
                'required',
                'string',
                'max:1023',
                'unique:rss_feeds,link',
            ],
            'country' => [
                'required',
                'string',
                'max:255',
            ],
            'language' => [
                'required',
                'string',
                'max:255',
            ],
            'tags' => [
                'nullable',
                'string',
                'max:255',
            ],
            'image_url' => [
                'nullable',
                'string',
                'max:1023',
            ],
            'pulling_frequency' => [
                'required',
                'integer',
                'min:1',
            ],
        ]);

        RssFeed::create($attributes);

        return redirect('/rss-feeds');
    }

    public function show(RssFeed $feed)
    {
        return view('pages.rss-feeds.show', compact('feed'));
    }

    public function edit(RssFeed $feed)
    {
        return view('pages.rss-feeds.edit', compact('feed'));
    }

    public function update(RssFeed $feed)
    {
        $attributes = request()->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'link' => [
                'required',
                'string',
                'max:1023',
                'unique:rss_feeds,link,' . $feed->id,
            ],
            'country' => [
                'required',
                'string',
                'max:255',
            ],
            'language' => [
                'required',
                'string',
                'max:255',
            ],
            'tags' => [
                'nullable',
                'string',
                'max:255',
            ],
            'image_url' => [
                'nullable',
                'string',
                'max:1023',
            ],
            'pulling_frequency' => [
                'required',
                'integer',
                'min:1',
            ],
        ]);

        $feed->update($attributes);

        return redirect('/rss-feeds/' . $feed->id);
    }

    public function destroy(RssFeed $feed)
    {
        $feed->delete();

        return redirect('/rss-feeds');
    }

    public function pull(RssFeed $feed)
    {
        $rssCollector = new RssCollector($feed);
        $rssCollector->collect();

        return redirect('/rss-feeds/' . $feed->id);
    }
}