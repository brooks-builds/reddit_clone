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

Route::get('/', 'indexController@index');
Route::get('/comments/{id}', 'indexController@linkWithComments');
Route::post('/comments', 'commentsController@store');

Route::post('/links/{id}/upvote', 'linkController@upvote');
Route::post('/links/{id}/downvote', 'linkController@downvote');
Route::post('/links', 'linkController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
