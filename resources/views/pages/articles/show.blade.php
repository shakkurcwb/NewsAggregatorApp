@extends('layouts.app')

@section('content')
    <h1>Article #{{ $article->id }}</h1>
    <div class="row">
        @if($article->rssFeeds->count() > 0)
        <div class="col-md-2">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ $article->rssFeeds[0]->image_url }}" class="img-fluid w-75" alt="{{ $article->rssFeeds[0]->title }}">
                <p class="fw-bolder">{{ $article->rssFeeds[0]->title }}</p>
            </div>
        </div>
        @endif
        <div class="col-md-10">
            @include('shared.article-summary')
        </div>
    </div>
@endsection