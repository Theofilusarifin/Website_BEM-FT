<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galleris = Galeri::limit(3)->get();
        return view('home', compact('galleris'));
    }
}
