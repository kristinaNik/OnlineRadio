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

Route::get('/', function () {
    return view('import');
})->name('import');

Route::get('/search', 'RadioController@index')->name('search.action');


Route::get('/playlist', function () {
    return view('show');
})->name('playlist.show');

Route::get('/statistics', function () {
    return view('statistics');
})->name('playlist.statictics');