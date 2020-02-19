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

Route::get('/', 'PostsController@index')-> name('post.index');
Route::get('/post/{id}', 'PostsController@show') -> name('post.show');
Route::get('/create', 'PostsController@create');
Route::post('/createform', 'PostsController@store');
Route::get('/edit/{id}', 'PostsController@edit');
Route::get('/editForm{id}', 'PostsController@update');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
