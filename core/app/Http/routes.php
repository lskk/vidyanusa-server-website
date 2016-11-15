<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CDaftar@index');

Route::get('login', function () {
    return view('login');
});
Route::post('login','CDaftar@login');
Route::post('ubah_profile','CDaftar@ubah_profile');
Route::post('ubah_photo','CDaftar@ubah_photo');

Route::get('logout','CDaftar@logout');

Route::group(['prefix' => 'daftar'],function(){
    Route::get('guru','CDaftar@guru');
    Route::post('guru','CDaftar@guru_action');
    Route::get('siswa','CDaftar@siswa');
    Route::post('siswa','CDaftar@siswa_action');
});

Route::get('beranda', 'CAuthenticated@index');

Route::get('galeri', 'CAuthenticated@gallery');

Route::get('profil', 'CAuthenticated@profile');

