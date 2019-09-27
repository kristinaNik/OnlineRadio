<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/radio', 'RadioController@index');
Route::get('/radio/get_titles', 'RadioController@getTitles');
Route::get('/radio/get_genres', 'RadioController@getGenres');
Route::post('radio/create', 'RadioController@store');


Route::get('/statistics/longest_song', 'StatisticsController@getLongestSong');
Route::get('/statistics/shortest_song', 'StatisticsController@getShortestSong');