<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(){
        return view('campus_tour.index');
    }
}
