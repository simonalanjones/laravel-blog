<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/professional-bio', function () {
    return view('professional-bio');
});

Route::get('/about-this-site', function () {
    return view('about-this-site');
});

Route::get('/', [PostController::class, 'index']);

// Give the route a name which can be used in views etc
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/category/{category}', [PostController::class, 'category'])->name('post.category');
