<table class="table table-bordered">
    <tbody>
        <tr>
            <td>Title</td>
            <td class="fw-bolder">{{ $article->title }}</td>
            <td>Source</td>
            <td>{{ $article->rssFeeds ? $article->rssFeeds[0]->title : '-' }}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td colspan="3">
                {!! $article->description !!}
            </td>
        </tr>
        <tr>
            <td>Link</td>
            <td>
                <a target="_blank" href="{{ $article->link }}">{{ $article->link }}
            </td>
            <td>Published At</td>
            <td>
                {{ $article->published_at->format('Y-m-d H:i:s') }}
                <small>({{ $article->published_at->diffForHumans() }})</small>
                @if($article->published_at->diffInMinutes() < 15) 🔥 @endif
            </td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>{{ $article->created_at->format('Y-m-d H:i:s') }}</td>
            <td>Updated At</td>
            <td>{{ $article->updated_at->format('Y-m-d H:i:s') }}</td>
        </tr>
    </tbody>
</table>