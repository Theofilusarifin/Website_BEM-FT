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
				<h2>Information and Design Department</h2>
			</div>
		</div>
	</div>

	<div class="about-compnay-two no-bg mb-5">
		<div class="overlay">
			<div class="container">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-lg-6 col-12">
						<img src="{{ asset('bemft_assets/images/logo/idd.png') }}" class="mx-auto d-block mb-5" alt="Logo Divisi" style="max-height:170px; height:170px; width:auto">
					</div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
					<div class="col-lg-8 col-12 text">
						<p style="text-align: justify; text-justify: inter-word; text-align-last: center;">Information and Design Department (IDD) adalah divisi BEM FT yang menyalurkan informasi dan menjadi sarana publikasi serta melakukan rekam jejak dari kegiatan BEM FT.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Foto IDD --}}
	<div class="our-team section-spacing">
        <div class="container">
            <div class="wrapper">
                {{-- Koor Wakoor --}}
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/idd/hanny.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Hanny Wijaya</h6>
                                <span>Koordinator <br>Information and Design Department</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/idd/angelica.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Angelica</h6>
                                <span>Wakil Koordinator <br>Information and Design Department</span>
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
                                <img src="{{ asset('bemft_assets/images/anggota/idd/rafli.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Moch. Rafli R. P. W.</h6>
                                <span>Anggota Information and Design Department</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/idd/gwen.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Gwendolyn Anna B. B.</h6>
                                <span>Anggota Information and Design Department</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6 col-12 p-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/anggota/idd/jessica.jpeg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Jessica Yolanda</h6>
                                <span>Anggota Information and Design Department</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Of Anggota --}}
            </div>
        </div>
    </div>
    {{-- End Of Foto IDD --}}
@endsection