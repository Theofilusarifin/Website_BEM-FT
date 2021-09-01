<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/beranda', 'home')->name('beranda');
Route::view('/divisi/BPH', 'divisi.bph')->name('bph');
Route::view('/divisi/AD', 'divisi.ad')->name('ad');
Route::view('/divisi/HRD', 'divisi.hrd')->name('hrd');
Route::view('/divisi/IDD', 'divisi.idd')->name('idd');
Route::view('/galeri', 'galeri')->name('galeri');