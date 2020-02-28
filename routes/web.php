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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/show','PostController@show');
Route::get('posts/create','PostController@index');
Route::get('create','PostController@create');
Route::post('posts/store','PostController@store');
Route::get('comments/store','CommentController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

