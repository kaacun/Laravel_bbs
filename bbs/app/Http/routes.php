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
/*
 * この書き方でも問題ないけど、RESTfulに書く方法もあるよね
 * https://laravel.com/docs/5.1/controllers#restful-resource-controllers
 */
Route::get('/', 'ThreadsController@index');
/*
 * この書き方だと、同じ内容のページURLが2種類出来てしまって良くないので、
 * top(/)に来たらbbsへリダイレクトするとかが良いと思います。
 */
Route::get('bbs', 'ThreadsController@index');
Route::get('bbs/create', 'ThreadsController@create');
/*
 * showは要らないかな、URLは出来るだけシンプルな方が良い
 * bbs/{id}
 */
Route::get('bbs/show/{id}','ThreadsController@show');
Route::post('bbs', 'ThreadsController@store');
Route::post('comments', 'CommentsController@store');
