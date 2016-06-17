<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/files/post', 'FileUploadsController@store');
// Route::get('/files', 'FileUploadsController@index');
Route::DELETE('/fileuploads', 'FileUploadsController@destroy');

Route::resource('/articles', 'ArticlesController');
Route::resource('/fileuploads', 'FileUploadsController');
