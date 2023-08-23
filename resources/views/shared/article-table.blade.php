<div class="table-responsive">
    <table class="table table-sm table-bordered text-center align-middle">
        <thead class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Source</th>
            <th scope="col">Title</th>
            <th scope="col">Published At</th>
            <th scope="col">@</th>
        </thead>
        <tbody>
            @if($articles->count() == 0)
            <tr>
                <td colspan="5">No results found.</td>
            </tr>
            @else
                @foreach($articles as $article)
                <tr>
                    <td scope="row">{{ $article->id }}</td>
                    <td>{{ $article->rssFeeds ? $article->rssFeeds[0]->title : '-' }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        {{ $article->published_at->format('Y-m-d H:i:s') }}
                        <small>({{ $article->published_at->diffForHumans() }})</small>
                        @if($article->published_at->diffInMinutes() < 30) 🔥 @endif
                    </td>
                    <td>
                        <a href="{{ url(sprintf('/articles/%d', $article->id)) }}" class="btn btn-sm btn-secondary">View</a>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
{{ $articles->links() }}