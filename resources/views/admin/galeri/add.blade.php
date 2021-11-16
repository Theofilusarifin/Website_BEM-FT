@extends('layouts.admin_app')

@section('content')
<div class="theme-inner-banner">
    <div class="overlay">
        <div class="container">
            <h2>Tambah Galeri</h2>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block section-spacing">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<div class="contact-us-section">
    <div class="container">
        <div class="theme-title-one">
            <p>Pastikan anda mengisi data dengan benar dan mengupload foto program kerja dengan ukuran 360 x 310 pixel
            </p>
        </div>
        <div class="form-wrapper" class="d-flex justify-content-center align-items-center" style="height: 800px">
            <form method="POST" action="{{ route('admin.galeri.store') }}" class="form-validation" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row d-flex justify-content-center align-items-center">
                    <div class="col-sm-8 col-12">
                        <label for="nama_proker" class="form-label">Nama Program Kerja</label>
                        <input id="nama_proker" type="text" name="nama_proker" value="{{ old('nama_proker') }}"
                            class="form-control @error('nama_proker') is-invalid @enderror" value="{{ old('nama_proker') ?? '' }}" autofocus>
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
                            value="{{ old('nama_proker_sinkatan') }}"
                            class="form-control @error('nama_proker_singkatan') is-invalid @enderror" value="{{ old('nama_proker_sinkatan') ?? '' }}" autofocus>
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
                        <input type="date" id="tanggal_acara" name="tanggal_acara"
                            class="form-control @error('tanggal_acara') is-invalid @enderror" value="{{ old('tanggal_acara') ?? '' }}">
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
                            name="deskripsi" rows="3" value="{{ old('deskripsi') ?? '' }}"></textarea>
                        @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center align-items-center">
                    <div class="col-sm-8 col-12">
                        <label for="foto_proker" class="form-label">Masukkan foto program kerja <span class="text-danger"><small>(360 x 310 px)</small></span></label>
                        <input class="form-control @error('foto_proker') is-invalid @enderror" type="file"
                            name="foto_proker" id="foto_proker" value="{{ old('foto_proker') ?? '' }}" required>
                        @error('foto_proker')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="theme-button-one mt-5" style="margin:auto">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection