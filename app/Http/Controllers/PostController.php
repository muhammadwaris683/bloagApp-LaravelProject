<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     // Display all posts
     public function index()
     {
         $posts = Post::all();
         return view('posts.index', compact('posts'));
     }

      // Show form to create a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a new post in the database
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('/posts');
    }

      // Show a single post
      public function show($id)
      {
          $post = Post::findOrFail($id);
          return view('posts.show', compact('post'));
      }

      // Delete a post
      public function destroy($id)
      {
          // Using Eloquent to delete the post
          $post = Post::findOrFail($id);
          $post->delete(); // Eloquent method to delete the post
      
          return redirect('/posts')->with('success', 'Post deleted successfully!');
      }
      

    // Show the form for editing the post
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

// Update the post
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        
        // Using Eloquent to update the post
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/posts')->with('success', 'Post updated successfully!');
    }

}
