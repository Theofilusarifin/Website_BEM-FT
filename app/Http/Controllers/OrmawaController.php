<?php

namespace App\Http\Controllers;

use App\Ormawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrmawaController extends Controller
{
    public function index(){
        return view('ormawa.index');
    }

    public function show($nama){
        $ormawa = Ormawa::where('nama',$nama)->get();
        return view('ormawa.show', compact('ormawa'));
    }
}
