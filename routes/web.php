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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['domain' => 'lnews.locale'], function () {
    Route::get('/', 'HomeController@index');
});

Route::group(['domain' => 'zaim.cijworld.com'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/politics', 'HomeController@politics');
});
