<?php

namespace App\Http\Controllers;

use App\Gedung;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(){
        $gedung = Gedung::where('nama','TA')->get();
        return view('campus_tour.index', compact('gedung'));
    }

    public function show(Request $request){
        $id_gedung = $request->get('id_gedung');

        $gedung = Gedung::where('nama',$id_gedung)->get();
        return response()->json(array(
            'status' => 'oke',
            'gedung' => $gedung
        ), 200);
    }
}
