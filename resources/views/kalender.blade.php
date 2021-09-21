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
                            <img src="{{ asset('bemft_assets/images/home/20.jpg') }}" alt="Kalender" class="cover-img" />
                        </div>
                        <a class="d-flex justify-content-center align-items-center" href="{{ asset('bemft_assets/images/home/20.jpg') }}" download="Kalender Kegiatan Ormawa Teknik">
                            <p style="text-align: justify; text-justify: inter-word;">Klik disini untuk melakukan download kalender</p>
                        </a>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
@endsection
