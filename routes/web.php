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
});

Route::get('/about', 'App\Http\Controllers\AboutController@show')->name('about');

Route::get('/add', 'App\Http\Controllers\AddController@show')->name('add');

Route::get('/detail', 'App\Http\Controllers\DetailController@show')->name('detail');


Route::get('news', 'App\Http\Controllers\NewsItemController@Index')->name('news');

Route::get('news/{id}', 'App\Http\Controllers\NewsItemController@show')->name('news.show');
Route::get('news/create', 'App\Http\Controllers\NewsItemController@create')->name('news.create');
Route::post('news/store', 'App\Http\Controllers\NewsItemController@store')->name('news.store');

