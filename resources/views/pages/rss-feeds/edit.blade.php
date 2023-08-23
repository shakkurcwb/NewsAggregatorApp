@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Edit Rss Feed #{{ $feed->id }}</h1>
        <div class="d-flex gap-2">
            <a href="{{ url(sprintf('/rss-feeds/%d', $feed->id)) }}" class="btn btn-secondary">Show Feed</a>
            <form name="frmRssFeedPullArticles" method="post" action="{{ url(sprintf('/rss-feeds/%d', $feed->id)) }}" onsubmit="return deleteRssFeedConfirmation();">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete Feed</button>
            </form>
            <script>
                function deleteRssFeedConfirmation() {
                    if (confirm('Are you sure you want to delete this feed?')) {
                        return true;
                    }
                    return false;
                }
            </script>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @include('shared.edit-rss-feed-form')
        </div>
    </div>
@endsection