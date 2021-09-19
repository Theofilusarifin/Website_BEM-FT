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
Route::view('/gform', 'gform')->name('gform');

// ROUTE EVENT
Route::view('/event', 'kalender')->name('event');

// ROUTE ORMAWA FT
Route::get('/profil/ormawa', 'OrmawaController@index')->name('ormawa');
Route::get('/profil/ormawa/{ormawa:slug}', 'OrmawaController@show')->name('ormawa.show');

// ROUTE GALERI
Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');

// ROUTE ADMIN
Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin');
