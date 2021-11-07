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
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xl-9 col-lg-8 col-12 our-blog">
                        <div class="post-wrapper">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="{{ asset('/'.$pengumuman->link_foto) }}" alt="Foto Pengumuman" class="cover-img" >
                                    @isset($pengumuman->created_at)
                                    <div class="overlay">
                                        <a href="#" class="date">{{ date("M d, Y",strtotime($pengumuman->created_at)) }}</a>
                                    </div>
                                    @endisset
                                </div>
                                <div class="post-meta">
                                    <br><br>
                                    <h5>{{ $pengumuman->judul }}</h5>
                                    <br>
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
