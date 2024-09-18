@extends('layout')

@section('content')
<a href="/posts/create" class="btn btn-primary mb-3">Create New Post</a>

@if($posts->count())
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                <form action="/posts/{{ $post->id }}" method="POST" class="d-inline float-end">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm float-end mx-2">Edit</a>
            </li>
        @endforeach
    </ul>
@else
    <p>No posts available.</p>
@endif
@endsection
