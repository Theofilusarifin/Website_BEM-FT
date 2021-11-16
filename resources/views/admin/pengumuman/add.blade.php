@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner">
		<div class="overlay">
			<div class="container">
				<h2>Tambah Pengumuman</h2>
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
                <p>Pastikan anda mengisi data dengan benar dan mengupload foto pengumuman dengan ukuran 870 x 450 pixel</p>
            </div>
            <div class="form-wrapper" class="d-flex justify-content-center align-items-center" style="height: 800px">
                <form method="POST" action="{{ route('admin.pengumuman.store') }}" class="form-validation" autocomplete="off" enctype="multipart/form-data">
                    @csrf
					<div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="judul_pengumuman" class="form-label">Judul Pengumuman</label>
                            <input id="judul_pengumuman" type="text" name="judul_pengumuman" value="{{ old('judul_pengumuman') }}" class="form-control @error('judul_pengumuman') is-invalid @enderror" value="{{ old('judul_pengumuman') ?? '' }}" autofocus>
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
							<input type="date" class="form-control @error('tanggal_pengumuman') is-invalid @enderror" id="tanggal_pengumuman" name="tanggal_pengumuman" value="{{ old('tanggal_pengumuman') ?? '' }}">
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
							<textarea  class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="3" value="{{ old('isi') ?? '' }}"></textarea>
                            @error('isi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="foto_pengumuman" class="form-label">Masukkan foto pengumuman <span class="text-danger"><small>(870 x 450 px)</small></span></label>
                            <input class="form-control @error('foto_pengumuman') is-invalid @enderror" type="file" name="foto_pengumuman" id="foto_pengumuman" value="{{ old('foto_pengumuman') ?? '' }}" required>
                            @error('foto_pengumuman')
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
