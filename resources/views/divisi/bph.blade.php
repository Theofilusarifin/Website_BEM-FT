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
                <h2>Badan Pengurus Harian</h2>
            </div>
        </div>
    </div>

    <div class="about-compnay-two no-bg mb-5">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-12">
                        <img src="{{ asset('bemft_assets/images/logo/bph.png') }}" class="mx-auto d-block" alt="Logo Divisi" style="max-height:200px; height:200px; width:auto" class="img-left">
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-8 col-12">
                        <p style="text-align: justify; text-justify: inter-word;">You would see the biggest gift would be from me and the card attached would so thank you for being a friend the biggest gift.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Foto BPH --}}
    <div class="our-team section-spacing">
        <div class="container">
            <div class="wrapper">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-6 col-12 p-4">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/team/1.jpg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Achmad Fauzi Bagus</h6>
                                <span>Gubernur</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-4">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{ asset('bemft_assets/images/team/1.jpg') }}" alt="">
                            </div>
                            <div class="text">
                                <h6 class="mb-2">Eunike Putri Permatasari</h6>
                                <span>Wakil Gubernur</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6 col-12 p-4">
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
                    <div class="col-lg-3 col-sm-6 col-12 p-4">
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