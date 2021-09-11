@extends('layouts.app')

@section('content')
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Badan Pengurus Harian</h2>
					</div>
                </div>
            </div>

            {{-- Foto BPH --}}
            <div class="our-team section-spacing">
                <div class="container">
                    <div class="wrapper">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="team-member">
                                    <div class="image-box">
                                        <img src="{{ asset('bemft_assets/images/team/1.jpg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-2">Achmad Fauzi Bagus</h6>
                                        <span>Gubernur BEM Fakultas Teknik</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="team-member">
                                    <div class="image-box">
                                        <img src="{{ asset('bemft_assets/images/team/1.jpg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-2">Eunike Putri Permatasari</h6>
                                        <span>Wakil Gubernur BEM Fakultas Teknik</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="team-member">
                                    <div class="image-box">
                                        <img src="{{ asset('bemft_assets/images/team/1.jpg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-2">Theofilus Arifin</h6>
                                        <span>Sekretaris</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="team-member">
                                    <div class="image-box">
                                        <img src="{{ asset('bemft_assets/images/team/1.jpg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-2">Ricardo Angelio</h6>
                                        <span>Bendahara</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Of Foto BPH --}}
@endsection