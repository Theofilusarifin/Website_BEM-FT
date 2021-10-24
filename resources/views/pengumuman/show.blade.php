@extends('layouts.app')

@section('content')
    @foreach($pengumumans as $pengumuman)
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>PENGUMUMAN</h2>
                </div>
            </div>
        </div>

        <div class="blog-inner-page section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-12 our-blog">
                        <div class="post-wrapper">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="{{asset('/storage/pengumuman' .'/'.$pengumuman->judul.'.png')}}" alt="Foto Pengumuman">
                                    @isset($pengumuman->created_at)
                                    <div class="overlay">
                                        <a href="#" class="date">{{ date("M d, Y",strtotime($pengumuman->created_at)) }}</a>
                                    </div>
                                    @endisset
                                </div>
                                <div class="post-meta">
                                    <h5>{{ $pengumuman->judul }}</h5>
                                    <p>{{ $pengumuman->isi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
        <!--
        <div class="about-compnay-two no-bg section-spacing">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                            <img src="{{asset('/storage/pengumuman' .'/'.$pengumuman->judul.'.png')}}" alt="Foto Pengumuman" style="height=300px; max-height:300px; width:auto" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-12 text">
                            <div class="theme-title-one">
                                <h2>{{ $pengumuman->judul }}</h2>
                            </div>
                            <p style="text-align: justify; text-justify: inter-word;">{{ $pengumuman->isi }}</p>
                            @isset($pengumuman->created_at)
                                <div class="d-flex m-0 p-0 my-3">
                                    <img src="{{ asset('bemft_assets/images/icon/calendar.png') }}" class="mr-3 image-fluid" style="max-height:25px; height 25px; width:auto" alt="Calendar">
                                    <p>{{ date("M d, Y",strtotime($pengumuman->created_at)) }}</p>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
