<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ROUTE BERANDA
Route::get('/', 'HomeController@index')->name('beranda');

// ROUTE DIVISI
Route::view('/BPH', 'divisi.bph')->name('bph');
Route::view('/AD', 'divisi.ad')->name('ad');
Route::view('/HRD', 'divisi.hrd')->name('hrd');
Route::view('/IDD', 'divisi.idd')->name('idd');

// ROUTE INFO MAHASISWA
Route::get('/tour', 'TourController@index')->name('tour');
Route::post('/tour', 'TourController@show')->name('tour.show');
Route::view('/gform', 'gform')->name('gform');

// ROUTE Kalender
Route::get('/event', 'KalenderController@index')->name('event');

// ROUTE ORMAWA FT
Route::get('/profil/ormawa', 'OrmawaController@index')->name('ormawa');
Route::get('/profil/ormawa/{ormawa:slug}', 'OrmawaController@show')->name('ormawa.show');

// ROUTE GALERI
Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');

// ROUTE PENGUMUMAN
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman');
Route::get('/pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');

// ROUTE ADMIN
Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/kalender', 'AdminController@kalenderShow')->name('admin.kalender.show');
    Route::post('/kalender', 'AdminController@kalenderUpdate')->name('admin.kalender.update');
    Route::get('/galeri', 'AdminController@galeriAddShow')->name('admin.galeri.show');
    Route::post('/galeri', 'AdminController@galeriStore')->name('admin.galeri.store');
    Route::get('/galeri/update', 'AdminController@galeriEditShow')->name('galeri.show');
    Route::get('/galeri/update/{id}', 'AdminController@galeriEdit')->name('galeri.edit');
    Route::post('/galeri/update', 'AdminController@galeriEditUpdate')->name('galeri.update');
    Route::get('/pengumuman', 'AdminController@pengumumanAddShow')->name('admin.pengumuman.show');
    Route::post('/pengumuman', 'AdminController@pengumumanAddStore')->name('admin.pengumuman.store');
    Route::get('/pengumuman/update', 'AdminController@pengumumanEditShow')->name('pengumuman.show');
    Route::get('/pengumuman/update/{id}', 'AdminController@pengumumanEdit')->name('pengumuman.edit');
    Route::post('/pengumuman/update', 'AdminController@pengumumanEditUpdate')->name('pengumuman.update');
});