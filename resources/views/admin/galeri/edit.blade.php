@extends('layouts.admin_app')

@section('content')
<div class="theme-inner-banner section-spacing">
    <div class="overlay">
        <div class="container">
            <h2>Edit Galeri</h2>
        </div>
    </div>
</div>

    @foreach($galeris as $galeri)
    <div class="contact-us-section">
        <div class="container">
            <div class="theme-title-one">
                <p>Pastikan anda mengisi data dengan benar dan mengupload foto program kerja dengan ukuran 360 x 310 pixel
                </p>
            </div>
            <div class="form-wrapper" class="d-flex justify-content-center align-items-center" style="height: 900px">
                <form method="POST" action="{{ route('galeri.update') }}" class="form-validation" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="galeri_id" class="form-label">Galeri Id</label>
                            <input id="galeri_id" type="text" name="galeri_id" value="{{ $galeri->id }}"
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_proker" class="form-label">Nama Program Kerja</label>
                            <input id="nama_proker" type="text" name="nama_proker" value="{{ $galeri->nama }}"
                                class="form-control @error('nama_proker') is-invalid @enderror" autofocus>
                            @error('nama_proker')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_proker_singkatan" class="form-label">Nama Singkatan <span class="text-danger"><small>(Apabila tidak ada tulis
                            ulang nama program kerja)</small></span></label>
                            <input id="nama_proker_singkatan" type="text" name="nama_proker_singkatan"
                                value="{{ $galeri->nama_singkatan }}"
                                class="form-control @error('nama_proker_singkatan') is-invalid @enderror" autofocus>
                            @error('nama_proker_singkatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
                            <input type="date" id="tanggal_acara" name="tanggal_acara" value="{{ $galeri->created_at }}"
                                class="form-control @error('tanggal_acara') is-invalid @enderror">
                            @error('tanggal_acara')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger"><small>(No Emoticon)</small></span></label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                name="deskripsi" rows="3">{{ $galeri->deskripsi }}</textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="foto_proker" class="form-label">Masukkan foto program kerja (360 x 310 px)
                            <br><span class="text-danger">Kosongi jika foto tidak di update</span></label>
                            <input class="form-control @error('foto_proker') is-invalid @enderror" type="file"
                                name="foto_proker" id="foto_proker">
                            @error('foto_proker')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="theme-button-one mt-5" style="margin:auto">Update</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection