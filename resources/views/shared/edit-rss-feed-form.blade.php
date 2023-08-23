<form name="frmEditRssFeedForm" method="post" action="{{ url(sprintf('/rss-feeds/%d', $feed->id)) }}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="title" class="form-label">Title *</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $feed->title }}">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="link" class="form-label">Link *</label>
        <input type="text" class="form-control" id="link" name="link" value="{{ old('link') ?? $feed->link }}">
        @error('link')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="country" class="form-label">Country *</label>
        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') ?? $feed->country }}">
        @error('country')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="language" class="form-label">Language *</label>
        <input type="text" class="form-control" id="language" name="language" value="{{ old('language') ?? $feed->language }}">
        @error('language')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') ?? $feed->tags }}">
        @error('tags')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image_url" class="form-label">Image Url *</label>
        <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old('image_url') ?? $feed->image_url }}">
        @error('image_url')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="pulling_frequency" class="form-label">Pulling Frequency *</label>
        <input type="number" class="form-control" id="pulling_frequency" name="pulling_frequency" value="{{ old('pulling_frequency') ?? $feed->pulling_frequency }}">
        @error('pulling_frequency')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>