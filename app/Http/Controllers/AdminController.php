<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Http\Requests\GaleriRequest;
use App\Http\Requests\KalenderRequest;
use App\Http\Requests\PengumumanRequest;
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

    public function kalenderUpdate(KalenderRequest $request)
    {
        $request->validate([
            'kalender' => 'mimes:jpeg,png',
        ]);
        if (request()->hasFile('kalender')){
            $kalender = new Kalender;
            $kalender->bulan =  $request->get('bulan_kalender');
            $image_name = 'Kalender '.$request->get('bulan_kalender') . '.png';
            $link_kalender = 'storage/kalender/'.$image_name;
            $kalender->nama_file = $image_name;
            $kalender->link_foto = $link_kalender;
            $kalender->save();
            $request->kalender->storeAs('public/kalender', $image_name, ['disks' => 'public']);
        }
        return redirect()->back()->with(['success' => 'Berhasil melakukan update pada kalender']);
    }

    public function galeriAddShow()
    {
        return view('admin.galeri.add');
    }

    public function galeriStore(GaleriRequest $request)
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
            $link_galeri = 'storage/galeri/'.$request->get('nama_proker_singkatan').'.png';
            $galeri->link_foto = $link_galeri;
            $galeri->save();
            $request->foto_proker->storeAs('public/galeri', $request->get('nama_proker_singkatan').'.png', ['disks' => 'public']);
        }
        return redirect()->back()->with(['success' => 'Berhasil menambahkan foto pada galeri']);
    }
    public function galeriEditShow(){
        $galeris = Galeri::latest()->paginate(9);
        return view('admin.galeri.show', compact('galeris'));
    }
    public function galeriEdit($slug){
        $galeris = Galeri::where('slug',$slug)->get();
        return view('admin.galeri.edit', compact('galeris'));
    }
    public function galeriEditUpdate(Request $request){

    }
    public function pengumumanAddShow(){
        return view('admin.pengumuman.add');
    }
    public function pengumumanAddStore(PengumumanRequest $request)
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
        return redirect()->back()->with(['success' => 'Berhasil menambahkan pengumuman']);
    }
    public function pengumumanEditShow(){
        $pengumumans = Pengumuman::latest()->paginate(6);
        return view('admin.pengumuman.show', compact('pengumumans'));
    }
    public function pengumumanEdit($slug){
        $pengumumans = Pengumuman::where('slug',$slug)->get();
        return view('admin.pengumuman.edit', compact('pengumumans'));
    }
    public function pengumumanEditUpdate(Request $request){
        
    }
}
