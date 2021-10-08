<?php

namespace App\Http\Controllers;

use App\Kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function kalenderShow()
    {
        return view('admin.kalender');
    }

    public function kalenderUpdate(Request $request)
    {
        $request->validate([
            'kalender' => 'mimes:jpeg,png',
        ]);
        if (request()->hasFile('kalender')){
            $kalender = new Kalender;
            $kalender->bulan =  $request->get('bulan_kalender');
            $image_name = 'Kalender '.$request->get('bulan_kalender') . '.png';
            $kalender->nama_file = $image_name;
            $kalender->save();
            $request->kalender->storeAs('public/kalender', $image_name, ['disks' => 'public']);
        }
        return redirect()->back();
    }

    public function galeriShow()
    {
        return view('admin.galeri');
    }

    public function galeriUpdate()
    {
        return view('admin.galeri');
    }
}
