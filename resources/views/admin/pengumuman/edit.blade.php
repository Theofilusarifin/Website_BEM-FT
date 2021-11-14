@extends('layouts.admin_app')

@section('content')
<div class="theme-inner-banner section-spacing">
    <div class="overlay">
        <div class="container">
            <h2>Edit Pengumuman</h2>
        </div>
    </div>
</div>

@foreach($pengumumans as $pengumuman)
    
<div class="contact-us-section">
    <div class="container">
        <div class="theme-title-one">
            <p>Pastikan anda mengisi data dengan benar dan mengupload foto pengumuman dengan ukuran 870 x 450 pixel</p>
        </div>
        <div class="form-wrapper" class="d-flex justify-content-center align-items-center" style="height: 900px">
            <form method="POST" action="{{ route('pengumuman.update') }}" class="form-validation"
                autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="form-group row d-flex justify-content-center align-items-center">
                    <div class="col-sm-8 col-12">
                        <label for="pengumuman_id" class="form-label">Pengumuman Id</label>
                        <input id="pengumuman_id" value="{{ $pengumuman->id }}" type="text" name="pengumuman_id" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center align-items-center">
                    <div class="col-sm-8 col-12">
                        <label for="judul_pengumuman" class="form-label">Judul Pengumuman</label>
                        <input id="judul_pengumuman" value="{{ $pengumuman->judul }}" type="text" name="judul_pengumuman"
                            class="form-control @error('judul_pengumuman') is-invalid @enderror" autofocus>
                        @error('judul_pengumuman')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center align-items-center">
                    <div class="col-sm-8 col-12">
                        <label for="tanggal_pengumuman" class="form-label">Tanggal Pengumuman</label>
                        <input type="date" value="{{ $pengumuman->created_at }}" class="form-control @error('tanggal_pengumuman') is-invalid @enderror"
                            id="tanggal_pengumuman" name="tanggal_pengumuman">
                        @error('tanggal_pengumuman')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center align-items-center">
                    <div class="col-sm-8 col-12">
                        <label for="isi" class="form-label">Isi Pengumuman <span class="text-danger"><small>(No Emoticon)</small></span></label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi"
                            rows="3">{{ $pengumuman->isi }}</textarea>
                        @error('isi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center align-items-center">
                    <div class="col-sm-8 col-12">
                        <label for="foto_pengumuman" class="form-label">Masukkan foto pengumuman (870 x 450 px) 
                        <br><span class="text-danger">Kosongi jika foto tidak di update</span></label>
                        <input class="form-control @error('foto_pengumuman') is-invalid @enderror" type="file"
                            name="foto_pengumuman" id="foto_pengumuman">
                        @error('foto_pengumuman')
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