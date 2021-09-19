@extends('layouts.app')

@section('content')
    @foreach($ormawa as $ormawa)
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>Profil Ormawa Fakultas Teknik</h2>
                </div>
            </div>
        </div>
        <div class="about-compnay-two no-bg section-spacing">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                            <img src="{{asset('/bemft_assets/images/ormawa' .'/'.$ormawa->nama_singkatan.'.png')}}" alt="Logo Ormawa" style="height=300px; max-height:300px; width:auto" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-12 text">
                            <div class="theme-title-one">
                                <h2>{{ $ormawa->nama }}</h2>
                            </div>
                            <p>{{ $ormawa->deskripsi }}</p>
                            <p>You would see the biggest gift would be from me and the card attached would so thank you for being a friend the biggest gift.</p>
                            @isset($ormawa->nama_instagram)
                                <div class="d-flex m-0 p-0 my-3">
                                    <img src="{{ asset('bemft_assets/images/icon/instagram.png') }}" class="mr-3 image-fluid" alt="Instagram">
                                    <a href="{{ 'https://'.$ormawa->link_instagram }}" target="_blank" rel="noopener noreferrer">{{ $ormawa->nama_instagram }}</a>
                                </div>
                            @endisset
                            @isset($ormawa->oa_line)
                                <div class="d-flex m-0 p-0 my-3">
                                    <img src="{{ asset('bemft_assets/images/icon/line.png') }}" class="mr-3 image-fluid" alt="Line">
                                    <p>{{ $ormawa->oa_line }}</p>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection