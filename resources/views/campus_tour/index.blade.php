@extends('layouts.app')

@section('style')
    <style>    
        .faq-section .wrapper .img-box {
            background: url(../bemft_assets/images/home/13.jpg) no-repeat center center; /* Size : 585 x 500 */
            background-size: cover;
            border-radius: 5px 0 0 5px;
            position: relative;
            height: 500px;
        }
    </style>
@endsection

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Info Mahasiswa</h2>
            </div>
        </div>
    </div>
    {{-- Button Navigation Gedung --}}
    <div class="our-solution mt-5">
        <div class="container">
            <div class="theme-title-one mb-5">
                <h2>Campus Tour</h2>
                <p class="mt-2">Lakukan Klik pada salah satu button untuk melakukan campus tour tehadap gedung tersebut</p>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <button onclick="gedung('TA')" class="theme-button-one m-2">TA</button>
                <button onclick="gedung('TB')" class="theme-button-one m-2">TB</button>
                <button onclick="gedung('TC')" class="theme-button-one m-2">TC</button>
                <button onclick="gedung('TD')" class="theme-button-one m-2">TD</button>
                <button onclick="gedung('TE')" class="theme-button-one m-2">TE</button>
                <button onclick="gedung('TF')" class="theme-button-one m-2">TF</button>
                <button onclick="gedung('TG')" class="theme-button-one m-2">TG</button>
            </div>
        </div>
    </div>
    {{-- End Of Button Navigation Gedung --}}
    {{-- Video Gedung --}}
    @foreach ($gedung as $item)
    <div class="faq-section" style="margin-top:-30px;">
        <div class="overlay" style="background:white">
            <div class="container">
                <div class="wrapper no-gutters">
                    <div class="theme-title-one mb-5">
                        <h3>Gedung {{ $item->nama }}</h3>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-6 col-lg-5">
                            <div class="img-box">
                                <a data-fancybox href="{{ $item->link_youtube }}" class="play">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Penjelasan Gedung --}}
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-12 mt-5 text">
                            <p style="text-align: justify; text-justify: inter-word;">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                    {{-- End Of Penjelasan Gedung --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- End Of Video Gedung --}}
@endsection

@section('javascript')
    <script>
        function gedung(id_gedung){
            $.ajax({
                type: 'POST',
                url:'{{ route("tour.show") }}',
                data: {
                    '_token':'<?php echo csrf_token() ?>',
                    'id_gedung':id_gedung
                },
            });
        }
    </script>
@endsection