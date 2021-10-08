<?php

namespace App\Http\Controllers;

use App\Kalender;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index(){
        $kalender = Kalender::latest('id')->first();
        return view('kalender', compact('kalender'));
    }
}
