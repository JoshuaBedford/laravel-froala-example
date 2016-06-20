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

Route::post('/files/post', 'Froala\FileUploadsController@store');
Route::get('/froala', 'Froala\ArticlesController@index');
// Route::get('/files', 'Froala\FileUploadsController@index');
Route::DELETE('/fileuploads', 'FileUploadsController@destroy');

Route::resource('/froala/articles', 'Froala\ArticlesController');
Route::resource('/fileuploads', 'Froala\FileUploadsController');
