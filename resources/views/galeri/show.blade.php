@extends('layouts.app')

@section('content')
    @foreach($galeris as $galeri)
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>GALERI</h2>
                </div>
            </div>
        </div>
        <div class="about-compnay-two no-bg section-spacing">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center mb-4">
                            <img src="{{ asset('/'.$galeri->link_foto) }}" alt="Dokumentasi Kegiatan" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-12 text">
                            <div class="theme-title-one">
                                <h2>{{ $galeri->nama }}</h2>
                            </div>
                            <p style="text-align: justify; text-justify: inter-word;">{{ $galeri->deskripsi }}</p>
                            @isset($galeri->created_at)
                                <div class="d-flex m-0 p-0 my-3">
                                    <img src="{{ asset('bemft_assets/images/icon/calendar.png') }}" class="mr-3 image-fluid" style="max-height:25px; height 25px; width:auto" alt="Calendar">
                                    <p>{{ date("M d, Y",strtotime($galeri->created_at)) }}</p>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection