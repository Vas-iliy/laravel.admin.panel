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

Route::get('/different', 'Admin\DifferentController@show')->name('different');

Route::get('/articles', 'Admin\Core@getArticles')->name('articles');
Route::get('/article/{id}', 'Admin\Core@getArticle')->name('article');

Route::get( '/contact/{id?}', 'Admin\ContactController@show')->name('contact');
Route::post( '/contact/{id?}', 'Admin\ContactController@store');

/**
 * list pages
 */
/*Route::get('pages/add', 'Admin\CoreResource@add');
Route::resource('/pages', 'Admin\CoreResource');*/
