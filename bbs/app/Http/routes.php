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
Route::get('/', 'ThreadsController@index');
Route::get('bbs', 'ThreadsController@index');
Route::get('bbs/create', 'ThreadsController@create');
Route::get('bbs/show/{id}','ThreadsController@show');
Route::post('bbs', 'ThreadsController@store');
Route::post('comments', 'CommentsController@store');
