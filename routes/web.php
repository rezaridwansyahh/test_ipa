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
	if (!session()->has('access_token')) {
		return view('content.signin');
	}
	else {
		return redirect('/profil');
	}
});

Route::post('/','StandardPageController@login')->name('/');

Route::post('/logout','StandardPageController@logout')->name('logout');

Route::get('/home','StandardPageController@index');

Route::get('/publikasi','PublikasiController@daftar');

Route::post('/publikasi/download/{filename}','PublikasiController@download');

Route::get('/publikasi/{id}','PublikasiController@detail');

Route::get('/detailpublikasi','StandardPageController@detailpublikasi');

Route::get('/detailpublikasidua','StandardPageController@detailpublikasidua');

Route::get('/detailpublikasitiga','StandardPageController@detailpublikasitiga');

Route::get('/profil','StandardPageController@profil');
