<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('beranda');
Route::view('/BPH', 'divisi.bph')->name('bph');
Route::view('/AD', 'divisi.ad')->name('ad');
Route::view('/HRD', 'divisi.hrd')->name('hrd');
Route::view('/IDD', 'divisi.idd')->name('idd');

Route::get('/profil/ormawa', 'OrmawaController@index')->name('ormawa');
Route::get('/profil/ormawa/{ormawa:slug}', 'OrmawaController@show')->name('ormawa.show');

Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');

Route::view('/event', 'kalender')->name('event');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');
