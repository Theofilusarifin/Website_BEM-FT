@extends('layouts.app')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Info Mahasiswa</h2>
            </div>
        </div>
    </div>

    <div class="our-solution section-spacing">
        <div class="container">
            <div class="theme-title-one">
                <h2>Kalender Kegiatan Ormawa Fakultas Teknik</h2>
            </div>
            <div class="wrapper">
                {{-- Kalender --}}
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-center align-items-center mt-5 mb-4">
                            <img src="{{ asset('storage/kalender/'.$kalender->nama_file) }}" style="max-height:490px; width:auto;" alt="Kalender" class="cover-img" />
                        </div>
                        <a class="d-flex justify-content-center align-items-center" href="{{ asset('storage/kalender/'.$kalender->nama_file) }}" download="Kalender Kegiatan Ormawa Teknik">
                            <button class="theme-button-one mt-3">Download Kalender</button>
                        </a>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
@endsection
