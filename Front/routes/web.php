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
    return view('content.signin');
});

Route::get('/home','StandardPageController@index');

Route::get('/publikasi','StandardPageController@publikasi');

Route::get('/detailpublikasi','StandardPageController@detailpublikasi');

Route::get('/detailpublikasidua','StandardPageController@detailpublikasidua');

Route::get('/detailpublikasitiga','StandardPageController@detailpublikasitiga');

Route::get('/profil','StandardPageController@profil');
