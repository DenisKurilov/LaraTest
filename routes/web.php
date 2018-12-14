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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['uses' => 'HomeController@show', 'as' => 'home']);

Route::get('/page', ['uses' => 'PageController@show', 'as' => 'page']);

Route::get('/article/{id?}', ['uses' => 'ArticleController@show', 'as' => 'article']);

Route::get('/about', ['uses' => 'AboutController@show', 'as' => 'about']);
