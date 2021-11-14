@extends('layouts.app')

@section('content')
	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Divisi</h2>
			</div>
		</div>
	</div>

	<div class="our-solution my-5">
		<div class="container">
			<div class="theme-title-one">
				<h2>Human Resource Department</h2>
			</div>
		</div>
	</div>

	<div class="about-compnay-two no-bg mb-5">
		<div class="overlay">
			<div class="container">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-lg-6 col-12">
						<img src="{{ asset('bemft_assets/images/logo/hrd.png') }}" class="mx-auto d-block mb-5" alt="Logo Divisi" style="max-height:170px; height:170px; width:auto">
					</div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
					<div class="col-lg-8 col-12 text">
						<p style="text-align: justify; text-justify: inter-word; text-align-last: center;">Human Resource Department (HRD) adalah divisi BEM FT yang menjaga hubungan antar internal dan eksternal BEM FT, mulai dari menyiapkan kegiatan bonding untuk internal hingga kegiatan eksternal BEM FT.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Foto HRD --}}
	<div class="our-team section-spacing">
        <div class="container">
            <div class="wrapper">
                {{-- Koor Wakoor --}}
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/hrd/reynard.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Reynard Nathanael</h6>
                                <span>Koordinator <br>Human Resource Department</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/hrd/arden.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Christopher Arden</h6>
                                <span>Wakil Koordinator <br>Human Resource Department</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Koor Wakoor --}}
                {{-- Anggota --}}
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/hrd/monica.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Monica Natalia</h6>
                                <span>Anggota Human Resource Department</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/hrd/yabes.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Antonius Yabes S.</h6>
                                <span>Anggota Human Resource Department</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/hrd/ariq.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Ariq Al Khasyi</h6>
                                <span>Anggota Human Resource Department</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/hrd/alvin.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Alvin Renaldo W.</h6>
                                <span>Anggota Human Resource Department</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Anggota --}}
            </div>
        </div>
    </div>
	{{-- End Of Foto HRD --}}
@endsection