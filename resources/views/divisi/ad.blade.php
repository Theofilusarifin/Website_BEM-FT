@extends('layouts.app')

@section('content')
	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Divisi</h2>
			</div>
		</div>
	</div>

	<div class="our-solution mt-5">
		<div class="container">
			<div class="theme-title-one">
				<h2>Administration Department</h2>
			</div>
		</div>
	</div>

	<div class="about-compnay-two no-bg mb-5">
		<div class="overlay">
			<div class="container">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-lg-6 col-12">
						<img src="{{ asset('bemft_assets/images/logo/a_d.png') }}" class="mx-auto d-block" alt="Logo Divisi" style="max-height:240px; height:240px; width:auto">
					</div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
					<div class="col-lg-8 col-12 text">
						<p style="text-align: justify; text-justify: inter-word; text-align-last: center;">Administration Department (AD) adalah divisi BEM FT yang mengurus segala urusan administrasi Ormawa Fakultas Teknik berupa pengauditan proposal dan laporan pertanggung-jawaban.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Foto AD --}}
	<div class="our-team section-spacing">
        <div class="container">
            <div class="wrapper">
                {{-- Koor Wakoor --}}
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/ad/robbel.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Robbel Putra Halim</h6>
                                <span>Koordinator <br> Administration Department</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/ad/dhita.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Nunung Mardhita R. P.</h6>
                                <span>Wakil Koordinator <br> Administration Department</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Koor Wakoor --}}
                {{-- Anggota --}}
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/ad/angel.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Evangeline Alicia T.</h6>
                                <span>Anggota Administration Department</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/ad/tiffany.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Tiffany Chandra</h6>
                                <span>Anggota Administration Department</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/ad/rivaldo.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Rivaldo Tan</h6>
                                <span>Anggota Administration Department</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Anggota --}}
            </div>
        </div>
    </div>
    {{-- End Of Foto AD --}}
@endsection