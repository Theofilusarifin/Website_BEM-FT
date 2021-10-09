@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Edit Kalender</h2>
			</div>
		</div>
	</div>
    <div class="contact-us-section">
        <div class="container">
            <div class="theme-title-one">
                <p>Pastikan anda memilih bulan kalender dengan benar dan mengupload gambar kalender dengan ukuran 870 x 490 pixel</p>
            </div>
            <div class="form-wrapper">
                <form method="POST" action="{{ route('admin.kalender.update') }}" class="form-validation" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="bulan_kalender" class="form-label">Masukkan bulan kalender</label>
                            <input class="form-control" list="list_bulan_kalender" name="bulan_kalender" id="bulan_kalender" placeholder="Click to choose" required autofocus>
                            <datalist id="list_bulan_kalender">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="kalender" class="form-label">Masukkan gambar kalender (870 x 490 px)</label>
                            <input class="form-control" type="file" name="kalender" id="kalender" required>
                        </div>
                    </div>
                    <button type="submit" class="theme-button-one mt-5" style="margin:auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection