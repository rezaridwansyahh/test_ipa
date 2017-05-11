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

/*Route::get('/', function () {
	if (!session()->has('access_token')) {
		return view('content.signin');
	}
	else {
		return redirect('/profil');
	}
});*/

Route::get('/',function(){
	return view('content.index');
});

Route::get('/signinmembership',function(){
	return view('content.signinmembership');
});

Route::get('/signinmember',function(){
	return view('content.signinmember');
});


Route::post('/','StandardPageController@login')->name('/');

Route::get('/logout','StandardPageController@logout')->name('/logout');
Route::post('/logout','StandardPageController@logout')->name('/logout');

Route::get('/home','StandardPageController@index');

Route::get('/convention','ConventionController@daftar');
Route::get('/convention/download/{id}','ConventionController@download');
Route::get('/convention/{id}','ConventionController@detail');
Route::get('/ajax/convention/next','ConventionController@next');
Route::get('/ajax/convention/prev','ConventionController@prev');
Route::get('/ajax/convention/hal','ConventionController@hal');

Route::get('/publikasi','StandardPageController@construction');
Route::post('/publikasi','StandardPageController@construction');
// Route::get('/publikasi','PublikasiController@daftar');
// Route::post('/publikasi/download/event','PublikasiController@downloadevent');
// Route::get('/publikasi/download/{id}','PublikasiController@download');
// Route::get('/publikasi/{id}','PublikasiController@detail');
// Route::get('/ajax/publikasi/next','PublikasiController@next');
// Route::get('/ajax/publikasi/prev','PublikasiController@prev');
// Route::get('/ajax/publikasi/hal','PublikasiController@hal');

Route::get('/detailpublikasi','StandardPageController@detailpublikasi');

Route::get('/detailpublikasidua','StandardPageController@detailpublikasidua');

Route::get('/detailpublikasitiga','StandardPageController@detailpublikasitiga');

Route::get('/profil','StandardPageController@profil');
