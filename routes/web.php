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
})->name('home');


Route::get('/resources', function() {
    return view('resources');
})->name('resources');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('user.home');

Route::post('/thread/new', 'ThreadController@post')->name('thread.post');
Route::get('/thread/{thread}', 'ThreadController@get')->name('thread.get');

Route::post('/post/new', 'PostController@post')->name('post.post');
