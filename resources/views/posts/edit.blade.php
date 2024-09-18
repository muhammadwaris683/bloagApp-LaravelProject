@extends('layout')

@section('content')
<form method="POST" action="/posts/{{ $post->id }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" class="form-control" id="content" rows="5" required>{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
</form>
@endsection
