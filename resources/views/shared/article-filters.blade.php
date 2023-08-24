<form method="get" action="{{ url('/articles') }}">
    <div class="input-group mb-2">
        <span class="input-group-text" id="search-label">Search</span>
        <input type="text" name="search" id="search" value="{{ request()->search }}"
            placeholder="Search by Title, Content, etc" class="form-control" aria-label="Search Articles"
            aria-describedby="search-label" />
        <button type="submit" class="btn btn-secondary">Search</button>
    </div>
</form>
