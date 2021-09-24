<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function kalenderShow()
    {
        return view('admin.kalender');
    }

    public function kalenderUpdate()
    {
        return view('admin.kalender');
    }

    public function galeriShow()
    {
        return view('admin.galeri');
    }

    public function galeriUpdate()
    {
        return view('admin.galeri');
    }
}
