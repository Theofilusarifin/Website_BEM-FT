@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Tambah Galeri</h2>
			</div>
		</div>
	</div>

	<div class="contact-us-section">
        <div class="container">
            <div class="theme-title-one">
                <p>Pastikan anda mengisi data dengan benar dan mengupload foto program kerja dengan ukuran 360 x 310 pixel</p>
            </div>
            <div class="form-wrapper" class="d-flex justify-content-center align-items-center" style="height: 800px">
                <form method="POST" action="{{ route('admin.galeri.store') }}" class="form-validation" autocomplete="off" enctype="multipart/form-data">
                    @csrf
					<div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_proker" class="form-label">Nama Program Kerja</label>
                            <input id="nama_proker" type="text" name="nama_proker" value="{{ old('nama_proker') }}" class="form-control" required autofocus>
                        </div>
                    </div>
					<div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_proker_singkatan" class="form-label">Nama Singkatan (Apabila tidak ada tulis ulang nama program kerja)</label>
                            <input id="nama_proker_singkatan" type="text" name="nama_proker_singkatan" value="{{ old('nama_proker_sinkatan') }}" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
							<input type="date" class="form-control" id="tanggal_acara" name="tanggal_acara" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
							<textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="foto_proker" class="form-label">Masukkan foto program kerja (360 x 310 px)</label>
                            <input class="form-control" type="file" name="foto_proker" id="foto_proker" required>
                        </div>
                    </div>
                    <button type="submit" class="theme-button-one mt-5" style="margin:auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
