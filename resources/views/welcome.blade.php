@extends('layout');

@section('content')
<div class="container">
    <h2 class="my-5">Introduction</h2>
    <p class="lead">This is a simple web application that allows users to create, read, update, and delete blogs. The application provides a user-friendly interface for managing blog posts efficiently. Users can sign up or log in to personalize their blogging experience. Each blog post is stored in a database, allowing for easy access and modification at any time. The project also incorporates basic validation to ensure data integrity when submitting or updating blog entries.</p>
    
    <a href="/posts/create" class="btn btn-primary mb-3">Create New Post</a>

@endsection