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
    Route::get('/', 'ZaimController@index');
    Route::get('/manifest.json', 'ZaimController@manifest');
    Route::get('/serviceworker.js', 'ZaimController@serviceworker');
    Route::get('/serviceworker-update.js', 'ZaimController@serviceworkerUpdate');
    Route::get('/page/{slug}', 'PageController@view');
});

Route::group(['domain' => 'zaim.cijworld.com'], function () {
    Route::get('/', 'ZaimController@index');
    Route::get('/manifest.json', 'ZaimController@manifest');
    Route::get('/serviceworker.js', 'ZaimController@serviceworker');
    Route::get('/serviceworker-update.js', 'ZaimController@serviceworker-update');
    Route::get('/page/{slug}', 'PageController@view');
});


Route::group(['domain' => 'credit.cijworld.com'], function () {
    Route::get('/', 'CreditController@index');
    Route::get('/manifest.json', 'CreditController@manifest');
    Route::get('/serviceworker.js', 'CreditController@serviceworker');
    Route::get('/serviceworker-update.js', 'CreditController@serviceworker-update');
    Route::get('/page/{slug}', 'PageController@view');
});
