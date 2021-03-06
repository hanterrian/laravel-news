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

Route::middleware('cors')->group(function () {
    Route::get('/script/get', 'ScriptController@get')->name('script-get');
//    Route::get('/script/load', 'ScriptController@load');
    Route::post('/script/load', 'ScriptController@load')->name('script-load');
    Route::get('/script/banner/{place}', 'ScriptController@banner')->name('script-banner');
    Route::get('/script/css', 'ScriptController@css')->name('script-css');
});

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

Route::group(['domain' => 'creditrus.cijworld.com'], function () {
    Route::get('/', 'RusCreditController@index');
    Route::get('/manifest.json', 'RusCreditController@manifest');
    Route::get('/serviceworker.js', 'RusCreditController@serviceworker');
    Route::get('/serviceworker-update.js', 'RusCreditController@serviceworker-update');
    Route::get('/page/{slug}', 'PageController@view');
});

Route::group(['domain' => 'creditkz.cijworld.com'], function () {
    Route::get('/', 'KzCreditController@index');
    Route::get('/manifest.json', 'KzCreditController@manifest');
    Route::get('/serviceworker.js', 'KzCreditController@serviceworker');
    Route::get('/serviceworker-update.js', 'KzCreditController@serviceworker-update');
    Route::get('/page/{slug}', 'PageController@view');
});

Route::group(['domain' => 'finhelpkz.cijworld.com'], function () {
    Route::get('/', 'KzCreditController@index');
    Route::get('/manifest.json', 'KzCreditController@manifest');
    Route::get('/serviceworker.js', 'KzCreditController@serviceworker');
    Route::get('/serviceworker-update.js', 'KzCreditController@serviceworker-update');
    Route::get('/page/{slug}', 'PageController@view');
});
