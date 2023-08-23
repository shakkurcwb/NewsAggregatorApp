@extends('layouts.app')

@section('content')
    <h1>Create Rss Feed</h1>
    <div class="card">
        <div class="card-body">
            @include('shared.create-rss-feed-form')
        </div>
    </div>
@endsection