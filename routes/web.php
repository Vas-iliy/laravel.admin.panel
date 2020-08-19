<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@show')->name('home');

Route::get('/about', 'Admin\AboutController@show')->name('about');

Route::get('/articles', 'Admin\Core@getArticles')->name('articles');
Route::get('/article/{id}', 'Admin\Core@getArticle')->name('article')->middleware(['mymiddle']);

/**
 * list pages
 */
Route::get('pages/add', 'Admin\CoreResource@add');

Route::resource('/pages', 'Admin\CoreResource');
