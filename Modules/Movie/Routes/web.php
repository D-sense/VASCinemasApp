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

Route::prefix('movie')->group(function() {
    Route::get('/', 'MovieController@index')->name('show_all_movies');
    Route::get('/create', 'MovieController@create')->name('show_form_movie');
    Route::post('/store', 'MovieController@store')->name('store_movie');
    Route::get('/show/{id}', 'MovieController@show')->name('show_movie');
});
