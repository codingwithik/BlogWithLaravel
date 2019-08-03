<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

// Route::resource('posts', 'PostsController');

Route::post('/posts', 'PostsController@store');
Route::put('posts/{id}', 'PostsController@update');
Route::delete('posts/{id}', 'PostsController@destroy');
Route::get('posts/create', 'PostsController@create');
Route::get('posts/{id}', 'PostsController@show');
Route::get('posts/{id}/edit', 'PostsController@edit');
Route::get('/', 'PostsController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
