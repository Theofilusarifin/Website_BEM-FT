@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Tambah Pengumuman</h2>
			</div>
		</div>
	</div>

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
                            <input id="judul_pengumuman" type="text" name="judul_pengumuman" value="{{ old('judul_pengumuman') }}" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="tanggal_pengumuman" class="form-label">Tanggal Pengumuman</label>
							<input type="date" class="form-control" id="tanggal_pengumuman" name="tanggal_pengumuman" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="isi" class="form-label">Isi Pengumuman</label>
							<textarea class="form-control" id="isi" name="isi" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="foto_pengumuman" class="form-label">Masukkan foto pengumuman (870 x 450 px)</label>
                            <input class="form-control" type="file" name="foto_pengumuman" id="foto_pengumuman" required>
                        </div>
                    </div>
                    <button type="submit" class="theme-button-one mt-5" style="margin:auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
