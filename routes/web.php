<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

/* Очистка кэша -*/
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Кэш очищен.";
});

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/posts/{slug}', 'App\Http\Controllers\HomeController@post');


Route::get('about', function () {
    return view('pages/about');
});

Route::get('contact', function () {
    return view('pages/contact');
});

//Route::get('post', function () {
//    return view('pages/post');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
