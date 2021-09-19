@extends('layouts.app')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Event Terkini</h2>
            </div>
        </div>
    </div>

    <div class="our-solution section-spacing">
        <div class="container">
            <div class="theme-title-one">
                <h2>Kalender Kegiatan Ormawa Fakultas Teknik Universitas Surabaya</h2>
            </div>
            <div class="wrapper">
                <div class="row">
                    {{-- Kalender --}}
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="d-flex justify-content-center align-items-center mt-5 mb-4">
                            <a href="{{ asset('bemft_assets/images/home/20.jpg') }}" download="Kalender"><img src="{{ asset('bemft_assets/images/home/20.jpg') }}" alt="Kalender" class="cover-img" /></a>
                        </div>
                        <p class="text-center">Klik gambar kalender untuk melakukan download</p>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
@endsection
