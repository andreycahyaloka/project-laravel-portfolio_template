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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => ''], function() {
	// Route::get('/', 'GuestController@index')->name('guest.index');
	// Route::get('/experimental', 'GuestController@experimental')->name('guest.experimental');

	Route::get('/1', 'GuestController@index1')->name('guest.index1');
	Route::get('/2', 'GuestController@index2')->name('guest.index2');
	Route::get('/3', 'GuestController@index3')->name('guest.index3');
	Route::get('/4', 'GuestController@index4')->name('guest.index4');
	Route::get('/4a', 'GuestController@index4a')->name('guest.index4a');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
