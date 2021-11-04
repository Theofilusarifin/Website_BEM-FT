<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Kalender;
use App\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function galeriAddShow()
    {
        return view('admin.galeri.add');
    }

    public function galeriStore(Request $request)
    {
        $request->validate([
            'foto_proker' => 'mimes:jpeg,png',
        ]);
        if (request()->hasFile('foto_proker')){
            $galeri = new Galeri();
            $galeri->nama =  $request->get('nama_proker');
            $galeri->nama_singkatan =  $request->get('nama_proker_singkatan');
            $galeri->slug = Str::slug($request->get('nama_proker'));
            $galeri->created_at = $request->get('tanggal_acara');
            $galeri->deskripsi = $request->get('deskripsi');
            $galeri->save();
            $request->foto_proker->storeAs('public/galeri', $request->get('nama_proker_singkatan').'.png', ['disks' => 'public']);
        }
        return redirect()->back();
    }
    public function galeriEditShow(){
        return view('admin.galeri.edit');
    }
    public function galeriEditUpdate(){
        // Fungsi Update
    }
    public function pengumumanAddShow(){
        return view('admin.pengumuman.add');
    }
    public function pengumumanAddStore(Request $request)
    {
        $request->validate([
            'foto_pengumuman' => 'mimes:jpeg,png',
        ]);
        if (request()->hasFile('foto_pengumuman')){
            $pengumuman = new Pengumuman();
            $pengumuman->judul =  $request->get('judul_pengumuman');
            $pengumuman->slug = Str::slug($request->get('judul_pengumuman'));
            $pengumuman->created_at = $request->get('tanggal_pengumuman');
            $pengumuman->isi = $request->get('isi');
            $link_pengumuman = 'storage/pengumuman/'.$request->get('judul_pengumuman').'.png';
            $pengumuman->link_foto = $link_pengumuman;
            $pengumuman->save();
            $request->foto_pengumuman->storeAs('public/pengumuman/', $request->get('judul_pengumuman').'.png', ['disks' => 'public']);
        }
        return redirect()->back();
    }
    public function pengumumanEditShow(){
        return view('admin.pengumuman.edit');
    }
    public function pengumumanEditUpdate(){
        // Fungsi update
    }
}
