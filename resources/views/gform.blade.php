@extends('layouts.app')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Info Mahasiswa</h2>
            </div>
        </div>
    </div>
    
    <div class="our-solution section-spacing mt-5">
        <div class="container">
            <div class="theme-title-one mb-5">
                <h2>Gform Prestasi</h2>
                <p class="mt-2">Klik button Fill Out Form untuk mengisi GForm</p>
            </div>
            <div class="wrapper">
                <div class="row d-flex justify-content-center align-items-center">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeHobASgguFpM4LbZVHtLudsZEsn30TiEs4EtHB3K-tdnBm6A/viewform?embedded=true" width="800" height="400" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
            </div>
        </div>
    </div>
@endsection