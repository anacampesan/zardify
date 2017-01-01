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
});

// Public API
Route::get('/api/post', function (){
  $posts = DB::table('posts')
              ->join('categories', 'posts.category_id', '=', 'categories.id')
              ->join('users', 'posts.user_id', '=', 'users.id')
              ->limit(4)
              ->get();
  return $posts;
});
