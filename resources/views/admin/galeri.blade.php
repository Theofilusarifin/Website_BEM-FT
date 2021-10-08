@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Edit Galeri</h2>
			</div>
		</div>
	</div>

	<div class="contact-us-section">
        <div class="container">
            <div class="theme-title-one">
                <p>Pastikan anda mengisi data dengan benar dan mengupload foto program kerja dengan ukuran 360 x 310 pixel</p>
            </div>
            <div class="form-wrapper" class="d-flex justify-content-center align-items-center" style="height: 800px">
                <form method="POST" action="{{ route('admin.kalender.update') }}" class="form-validation" autocomplete="off" enctype="multipart/form-data">
                    @csrf
					<div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_proker" class="form-label">Nama Program Kerja</label>
                            <input id="nama_proker" type="text" name="nama_proker" value="{{ old('nama_proker') }}" class="form-control" required autofocus>
                            @error('nama_proker')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
					<div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_proker" class="form-label">Nama Singkatan (Apabila tidak ada tulis ulang nama program kerja)</label>
                            <input id="nama_proker" type="text" name="nama_proker" value="{{ old('nama_proker') }}" class="form-control" required autofocus>
                            @error('nama_proker')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
					<div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
							<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">  <input class="span2" size="16" type="text" value="12-02-2012">  <span class="add-on"><i class="icon-th"></i></span></div>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
							<textarea class="form-control" id="deskripsi" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="kalender" class="form-label">Masukkan foto proke</label>
                            <input class="form-control" type="file" name="kalender" id="kalender">
                        </div>
                    </div>
                    <button type="submit" class="theme-button-one mt-5" style="margin:auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection