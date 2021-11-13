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
            $image_name = $request->get('bulan_kalender') . '.png';
            $link_kalender = 'bemft_assets/images/kalender';
            $link_db = 'bemft_assets/images/kalender/'.$image_name;
            $kalender->nama_file = $image_name;
            $kalender->link_foto = $link_db;
            $kalender->save();

            $request->file('kalender')->move($link_kalender, $image_name);
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

            $image_name = $request->get('nama_proker_singkatan').'.png';
            $link_galeri = 'bemft_assets/images/galeri';
            $link_db = 'bemft_assets/images/galeri/'.$request->get('nama_proker_singkatan').'.png';

            $galeri->link_foto = $link_db;
            $galeri->save();

            $request->file('foto_proker')->move($link_galeri, $image_name);
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
    public function galeriEditUpdate(GaleriRequest $request){
        $galeri = Galeri::find($request->get('galeri_id'));
        $galeri->nama =  $request->get('nama_proker');
        $galeri->nama_singkatan =  $request->get('nama_proker_singkatan');
        $galeri->slug = Str::slug($request->get('nama_proker'));
        $galeri->created_at = $request->get('tanggal_acara');
        $galeri->deskripsi = $request->get('deskripsi');
        $request->validate([
            'foto_proker' => 'mimes:jpeg,png',
        ]);
        if (request()->hasFile('foto_proker')){

            $image_name = $request->get('nama_proker_singkatan').'.png';
            $link_galeri = 'bemft_assets/images/galeri';
            $link_db = 'bemft_assets/images/galeri/'.$request->get('nama_proker_singkatan').'.png';

            $galeri->link_foto = $link_db;
            $request->file('foto_proker')->move($link_galeri, $image_name);
        }
        $galeri->save();
        return redirect()->route('galeri.show')->with(['success' => 'Berhasil melakukan update pada galeri']);
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

            $image_name = $request->get('judul_pengumuman').'.png';
            $link_pengumuman = 'bemft_assets/images/pengumuman';
            $link_db = 'bemft_assets/images/pengumuman/'.$request->get('judul_pengumuman').'.png';
            $pengumuman->link_foto = $link_db; 

            $pengumuman->save();
            
            $request->file('foto_pengumuman')->move($link_pengumuman, $image_name);
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
    public function pengumumanEditUpdate(PengumumanRequest $request){
        $pengumuman = Pengumuman::find($request->get('pengumuman_id'));
        $pengumuman->judul =  $request->get('judul_pengumuman');
        $pengumuman->slug = Str::slug($request->get('judul_pengumuman'));
        $pengumuman->created_at = $request->get('tanggal_pengumuman');
        $pengumuman->isi = $request->get('isi');
        $request->validate([
            'foto_pengumuman' => 'mimes:jpeg,png',
        ]);
        if (request()->hasFile('foto_pengumuman')){
            $image_name = $request->get('judul_pengumuman').'.png';
            $link_pengumuman = 'bemft_assets/images/pengumuman';
            $link_db = 'bemft_assets/images/pengumuman/'.$request->get('judul_pengumuman').'.png';
            $pengumuman->link_foto = $link_db; 
            
            $request->file('foto_pengumuman')->move($link_pengumuman, $image_name);
        }
        $pengumuman->save();
        return redirect()->route('pengumuman.show')->with(['success' => 'Berhasil melakukan update pada pengumuman']);
    }
}
