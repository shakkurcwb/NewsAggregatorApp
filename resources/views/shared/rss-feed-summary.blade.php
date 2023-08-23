<table class="table table-bordered">
    <tbody>
        <tr>
            <td>Title</td>
            <td class="fw-bolder">{{ $feed->title }}</td>
            <td>Status</td>
            <td>
                @if($feed->isDue())
                    <span class="badge bg-danger">Out-of-Sync</span>
                @else
                    <span class="badge bg-success">Synchronized</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>Link</td>
            <td>
                <a target="_blank" href="{{ $feed->link }}">{{ $feed->link }}
            </td>
            <td>Tags</td>
            <td>{{ $feed->tags ?? '-' }}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{ $feed->country }}</td>
            <td>Language</td>
            <td>{{ $feed->language }}</td>
        </tr>
        @if(false)
        <tr>
            <td>Image Url</td>
            <td><a target="_blank" href="{{ $feed->image_url }}">{{ $feed->image_url }}</td>
            <td>Articles Found</td>
            <td>{{ $feed->articles->count() }}x</td>
        </tr>
        @endif
        <tr>
            <td>Pulling Frequency</td>
            <td>Every {{ $feed->pulling_frequency }} minute(s)</td>
            <td>Last Pull At</td>
            <td>{{ $feed->last_pull_at ? $feed->last_pull_at->format('Y-m-d H:i:s') : '-' }}</td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>{{ $feed->created_at->format('Y-m-d H:i:s') }}</td>
            <td>Updated At</td>
            <td>{{ $feed->updated_at->format('Y-m-d H:i:s') }}</td>
        </tr>
    </tbody>
</table>