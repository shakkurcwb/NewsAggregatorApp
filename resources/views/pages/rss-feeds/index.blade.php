@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Rss Feeds Page</h1>
        <a href="{{ url('/rss-feeds/create') }}" class="btn btn-primary">Create</a>
    </div>
    @include('shared.rss-feed-filters')
    @include('shared.rss-feed-table')
@endsection