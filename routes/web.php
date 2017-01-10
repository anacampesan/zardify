<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/category', function (){
  return view('category');
})->name('/category');

Route::get('/post', function (){
  return view('post');
})->name('/post');

Route::get('/contact', function (){
  return view('contact');
})->name('/contact');

// Public API
Route::get('/api/post', function (){
  $posts = DB::table('posts')
              ->join('categories', 'posts.category_id', '=', 'categories.id')
              ->limit(4)
              ->get();
  return $posts;
})->name('/api/posts');
