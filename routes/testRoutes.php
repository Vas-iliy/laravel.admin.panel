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

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*Route::get('/page', function () {
    echo 'Пошел на хуй';
});*/
/*Route::post('/comments', function () {
    print_r($_POST);
});*/
/*Route::match(['get', 'post'], '/comments', function () {
    print_r($_POST);
});*/
/*Route::any('/comments', function () {
    print_r($_POST);
});*/
/*Route::get('/page/{cat}/{id}', function ($cat, $id) {
    echo $id  . ' ' . 'Пошел на хуй';
})->where([
    /*'id' => '[0-9]+',*/
    /*'cat' => '[A-Za-z]+'
]);*/

/*Route::group(['prefix' => 'admin'], function () {
   Route::get('page/create', function () {
       return redirect()->route('home');
   });
    Route::get('page/edit', function () {
        $rote = Route::current();
        var_dump($rote->getName());
    })->name('Ты пидорас');
});*/
