<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galleris = Galeri::latest('id')->limit(5)->get();
        return view('home', compact('galleris'));
    }
}
