@extends('layout')

@section('content')
<form method="POST" action="/posts">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
