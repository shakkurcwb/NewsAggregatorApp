@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Rss Feed #{{ $feed->id }}</h1>
        <div class="d-flex gap-2">
            <form name="frmRssFeedPullArticles" method="post" action="{{ url(sprintf('/rss-feeds/%d/pull', $feed->id)) }}">
                @csrf
                <button type="submit" class="btn btn-primary">Pull Articles</button>
            </form>
            <a href="{{ url(sprintf('/rss-feeds/%d/edit', $feed->id)) }}" class="btn btn-secondary">Edit Feed</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ $feed->image_url }}" class="img-fluid w-75" alt="{{ $feed->title }}">
                <p class="fw-bolder">{{ $feed->title }}</p>
            </div>
        </div>
        <div class="col-md-10">
            @include('shared.rss-feed-summary')
        </div>
    </div>
@endsection