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

Route::prefix('cinema')->group(function() {
    Route::get('/', 'CinemaController@index')->name('show_all_cinemas');
    Route::get('/show/{name}', 'CinemaController@show')->name('show_cinema');
});

