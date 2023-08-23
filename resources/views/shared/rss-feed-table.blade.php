<div class="table-responsive">
    <table class="table table-sm table-bordered text-center align-middle">
        <thead class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
            <th scope="col">Country</th>
            <th scope="col">Language</th>
            <th scope="col">Last Pull At</th>
            <th scope="col">@</th>
        </thead>
        <tbody>
            @if($feeds->count() == 0)
            <tr>
                <td colspan="6">No results found.</td>
            </tr>
            @else
                @foreach($feeds as $feed)
                <tr>
                    <td scope="row">{{ $feed->id }}</td>
                    <td>{{ $feed->title }}</td>
                    <td>
                        @if($feed->isDue())
                            <span class="badge bg-danger">Out-of-Sync</span>
                        @else
                            <span class="badge bg-success">Synchronized</span>
                        @endif
                    </td>
                    <td>{{ $feed->country }}</td>
                    <td>{{ $feed->language }}</td>
                    <td>{{ $feed->last_pull_at ? $feed->last_pull_at->format('Y-m-d H:i:s') : '-' }}</td>
                    <td>
                        <a href="{{ url(sprintf('/rss-feeds/%d', $feed->id)) }}" class="btn btn-sm btn-secondary">View</a>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
{{ $feeds->links() }}