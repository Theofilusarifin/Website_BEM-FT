@extends('layouts.app')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Profil Ormawa Fakultas Teknik</h2>
            </div>
        </div>
    </div>

    <div class="our-solution section-spacing mt-5">
        <div class="container">
            <div class="theme-title-one">
                <h2>Ormawa Fakultas Teknik Universitas Surabaya</h2>
            </div>
            <div class="wrapper">
                <div class="row d-flex justify-content-center align-items-center">
                    @foreach($ormawas as $ormawa)
                        <div class="col-lg-4 col-sm-6 col-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="single-solution-block">
                                <img src="{{ asset('bemft_assets/images/ormawa'.'/'.$ormawa->nama_singkatan.'.png') }}" alt="Logo Ormawa" style="max-height:150px; height:150px; width:auto" class="icon">
                                <h5><a href="{{ route('ormawa') }}/{{ $ormawa->slug }}">{{ $ormawa->nama }}</a></h5>
                            </div> 
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection