<form method="get" action="{{ url('/rss-feeds') }}">
    <div class="input-group mb-2">
        <span class="input-group-text" id="search-label">Search</span>
        <input type="text" name="search" id="search" value="{{ request()->search }}"
            placeholder="Search by Title, Country, Language, etc" class="form-control" aria-label="Search Rss Feeds"
            aria-describedby="search-label" />
        <button type="submit" class="btn btn-secondary">Search</button>
    </div>
</form>
