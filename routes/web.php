<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);

Route::get('/greeting', function(){
    return "Hello world";
});


// Route::get('/posts', [PostController::class, 'index']);           // Show all posts
// Route::get('/posts/create', [PostController::class, 'create']);   // Form to create a post
// Route::post('/posts', [PostController::class, 'store']);          // Store new post
// Route::get('/posts/{id}', [PostController::class, 'show']);       // Show a single post
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);  // Show form to edit a post (GET /posts/{id}/edit)
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']); // Delete a post
