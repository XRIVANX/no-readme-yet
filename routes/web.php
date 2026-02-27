<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

// This route loads the welcome page through the controller's index method
Route::get('/', [PostController::class, 'index'])->name('posts.index');

// This is the missing route that fixes your error
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Your existing categories route
Route::resource('categories', CategoryController::class);
