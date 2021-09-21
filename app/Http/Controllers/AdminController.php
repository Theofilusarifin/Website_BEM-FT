<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function show()
    {
        return view('admin.kalender');
    }

    public function update()
    {
        return view('admin.kalender');
    }
}
