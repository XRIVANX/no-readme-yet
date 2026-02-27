<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the high-tech welcome page with all thoughts.
     */
public function index()
{
    return view('welcome', [
        // Fetch posts with category info to display labels like "Gaming"
        'posts' => Post::with('category')->latest()->get(), 
        // This sends your 3 categories to the dropdown
        'categories' => Category::all() 
    ]);
}

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'text' => 'required|string',
        'category_id' => 'required|exists:categories,id', // Ensures the ID exists
    ]);

    \App\Models\Post::create($validated);

    return redirect()->route('posts.index');
}
}
