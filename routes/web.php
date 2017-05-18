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
	return view('convention.index');
});

Route::get('/login',function(){
	return view('content.signinmembership');
});

Route::get('/convention/login',function(){
	return view('content.signinmember');
});
Route::post('/convention/login','StandardPageController@loginEvent')->name('/login-event');
Route::group(['middleware' => ['eventMiddle']], function () {
	Route::get('/convention','ConventionController@cari');
	Route::post('/convention','ConventionController@daftar')->name('/convention');
	Route::get('/convention/download/{id}','ConventionController@download');
	Route::get('/convention/{id}','ConventionController@detail');
	Route::post('/ajax/convention/next','ConventionController@next');
	Route::post('/ajax/convention/prev','ConventionController@prev');
	Route::post('/ajax/convention/hal','ConventionController@hal');
	Route::post('/convention/download','ConventionController@downloadAll')->name('/download-allevent');
	Route::post('/logout/event','StandardPageController@logoutEvent')->name('/logout-event');
});

Route::group(['middleware' => ['adminMiddle'],'prefix'=>'event'], function () {
	Route::get('/','StandardPageController@formCariUser');
	Route::post('/','StandardPageController@searchUser')->name('/cari-user');
	Route::post('/email','StandardPageController@addEmail')->name('/update-email');;
});


Route::post('/','StandardPageController@login')->name('/');
Route::get('/dvd','StandardPageController@construction');
Route::get('/logout','StandardPageController@logout')->name('/logout');
Route::post('/logout','StandardPageController@logout')->name('/logout');

Route::get('/home','StandardPageController@index');

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
