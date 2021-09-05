<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('beranda');
Route::view('/divisi/BPH', 'divisi.bph')->name('bph');
Route::view('/divisi/AD', 'divisi.ad')->name('ad');
Route::view('/divisi/HRD', 'divisi.hrd')->name('hrd');
Route::view('/divisi/IDD', 'divisi.idd')->name('idd');

Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/galeri/{nama}', 'GaleriController@show')->name('galeri.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');
