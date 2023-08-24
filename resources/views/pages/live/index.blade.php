@extends('layouts.base')

@section('body')
    <div class="container">
        <h1>Live News</h1>
        <form method="get" action="{{ url('/live') }}">
            <div class="input-group mb-2">
                <input type="text" name="search" id="search" value="{{ request()->search }}"
                    placeholder="E.g. Brazil, CNN, War, etc" class="form-control" aria-label="Search Articles"
                    aria-describedby="search-label" autofocus />
                <button type="submit" class="btn btn-secondary">Search</button>
            </div>
        </form>
        <div class="d-flex flex-column">
            @if($articles->count() == 0)
                <div class="alert alert-warning" role="alert">
                    No articles found.
                </div>
            @else
                @foreach($articles as $article)
                    <div class="card border-bottom-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="d-none d-sm-block col-sm-12 col-md-2 p-4 text-center">
                                    <img src="{{ $article->rssFeeds->first()->image_url }}" class="img-fluid rounded" alt="Article Image" />
                                    <p class="fw-bolder">{{ $article->rssFeeds->first()->title }}</p>
                                </div>
                                <div class="col-sm-12 col-md-10">
                                    <p class="d-none d-sm-block fw-bolder mb-0">{{ $article->rssFeeds->first()->title }}</p>
                                    <p class="text-muted">
                                        {{ $article->published_at->format('Y-m-d H:i:s') }}
                                        <small>({{ $article->published_at->diffForHumans() }})</small>
                                        @if($article->published_at->diffInMinutes() < 15) 🔥 @endif
                                    </p>
                                    <p class="h5">
                                        <a href="{{ $article->link }}" target="_blank" class="btn-link">{{ $article->title }}</a>
                                    </p>
                                    <p class="">{!! str_replace("<img ", "<img class='img-fluid' ", $article->description) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center text-center mt-2">
                    <div>
                        {{ $articles->links() }}
                        <p class="mb-2">Current Page: <b>{{ $articles->currentPage() }}</b></p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection