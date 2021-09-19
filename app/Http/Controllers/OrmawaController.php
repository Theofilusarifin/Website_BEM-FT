<?php

namespace App\Http\Controllers;

use App\Ormawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrmawaController extends Controller
{
    public function index()
    {
        $ormawas = Ormawa::all();
        return view('ormawa.index', compact('ormawas'));
    }

    public function show($slug)
    {
        $ormawa = Ormawa::where('slug',$slug)->get();
        return view('ormawa.show', compact('ormawa'));
    }
}
