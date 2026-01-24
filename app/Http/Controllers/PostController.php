<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function category(Category $category): View
    {
        $categories = Category::all();

        $posts = $category->posts()
            ->where('published', 1)
            ->latest()
            ->get();

        return view('post-category', [
            'activeCategory' => $category,
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()
            ->where('published', 1)
            ->with('category')
            ->latest()
            ->simplePaginate(6);

        $categories = Category::all();

        return view('posts', [
            'mainPosts' => $posts,
            'categories' => $categories,
        ]);
    }

    /**
     * Display the specified resource.
     * Here we are using DI to ask Laravel to inject the Post model
     * Using the slug as the identifier
     */
    public function show(Post $post): View
    {
        $post->load(['category', 'comments']);

        return view('post', ['post' => $post]);
    }
}
