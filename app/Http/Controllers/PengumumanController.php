<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(){
        $pengumumans = Pengumuman::latest()->paginate(6);
        return view('pengumuman.index', compact('pengumumans'));
    }

    public function show($slug)
    {
        $pengumumans = Pengumuman::where('slug',$slug)->get();
        return view('pengumuman.show', compact('pengumumans'));
    }
}
