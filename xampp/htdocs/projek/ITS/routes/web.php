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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/v1/auth/login', 'HomeController@index')->name('home');
// Route::post('/v1/auth/login', 'HomeController@index')->name('home');

Route::get('/v1/place', 'PlaceController@index');
Route::get('/v1/place{ID}', 'PlaceController@show');
Route::POST('/v1/place', 'PlaceController@store');
Route::delete('/v1/place{ID}', 'PlaceController@destroy');
Route::POST('/v1/place{ID}', 'PlaceController@update');
