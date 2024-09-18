@extends('layout')

@section('content')
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<a href="/posts" class="btn btn-secondary">Back to Posts</a>
@endsection
