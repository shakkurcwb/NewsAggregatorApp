@extends('layouts.app')

@section('content')
    <h1>Home Page</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Rss Feeds</h5>
                        <p class="card-text">Effortlessly create and manage RSS feeds.</p>
                        <a href="{{ url('/rss-feeds') }}" class="btn btn-primary">Go to Rss Feeds</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Search News Articles</h5>
                        <p class="card-text">Discover and access relevant and up-to-date information.</p>
                        <a href="{{ url('/articles') }}" class="btn btn-primary">Go to News Articles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Live News Feed</h5>
                        <p class="card-text">Provides instant, topic-specific updates.</p>
                        <a href="{{ url('/live') }}" class="btn btn-primary">Go to Live News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
