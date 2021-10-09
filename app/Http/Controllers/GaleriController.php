<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $galeris = Galeri::latest()->paginate(9);
        return view('galeri.index', compact('galeris'));
    }

    public function show($slug)
    {
        $galeris = Galeri::where('slug',$slug)->get();
        return view('galeri.show', compact('galeris'));
    }
}
