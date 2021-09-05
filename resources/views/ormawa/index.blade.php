@extends('layouts.app')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Profil Ormawa FT</h2>
            </div>
        </div>
    </div>

    <div class="our-solution section-spacing mt-5">
        <div class="container">
            <div class="theme-title-one">
                <h2>Ormawa Fakultas Teknik Universitas Surabaya</h2>
            </div>
            <div class="wrapper">
                <div class="row">
                    {{-- KSM Teknik Elektro --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/TE.png') }}" alt="Logo Teknik Elektro" class="icon">
                            <h5><a href="{{ route('ormawa') }}/TE">KSM Teknik Elektro</a></h5>
                        </div> 
                    </div> 
                    {{-- KSM Teknik Kimia --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/TK.png') }}" alt="Logo KSM TK" class="icon">
                            <h5><a href="{{ route('ormawa') }}TK">KSM Teknik Kimia</a></h5>
                        </div> 
                    </div>
                    {{-- KSM Teknik Industri --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/TI.png') }}" alt="Logo KSM TI" class="icon">
                            <h5><a href="{{ route('ormawa') }}/TI">KSM Teknik Industri</a></h5>
                        </div> 
                    </div>
                    {{-- KSM Informatika--}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/IF.png') }}" alt="Logo KSM IF" class="icon">
                            <h5><a href="{{ route('ormawa') }}/IF">KSM Informatika</a></h5>
                        </div> 
                    </div>
                    {{-- KSM Teknik Mesin dan Manufaktur --}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/TMM.png') }}" alt="Logo KSM TMM" class="icon">
                            <h5><a href="{{ route('ormawa') }}/TMM">KSM Teknik Mesin dan Manufaktur</a></h5>
                        </div> 
                    </div>
                    {{-- KSM Foto dan Media--}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/FOTMED.png') }}" alt="Logo KSM Fotmed" class="icon">
                            <h5><a href="{{ route('ormawa') }}/FOTMED">KSM Foto dan Media</a></h5>
                        </div> 
                    </div>
                    {{-- KMM Sports--}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/SPORTS.png') }}" alt="Logo KMM Sports" class="icon">
                            <h5><a href="{{ route('ormawa') }}/SPORTS">KMM Sports</a></h5>
                        </div> 
                    </div>
                    {{-- KMM Radio Kampus--}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/RK.png') }}" alt="Logo KMM RK" class="icon">
                            <h5><a href="{{ route('ormawa') }}/RK">KMM Radio Kampus</a></h5>
                        </div> 
                    </div>
                    {{-- KMM Pengabdian Pada Masyarakat--}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/PPM.png') }}" alt="Logo KMM PPM" class="icon">
                            <h5><a href="{{ route('ormawa') }}/PPM">KMM Pengabdian Pada Masyarakat</a></h5>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12"></div>
                    {{-- DPM Fakultas Teknik--}}
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="single-solution-block">
                            <img src="{{ asset('bemft_assets/images/ormawa/DPM.png') }}" alt="Logo DPMFT" class="icon">
                            <h5><a href="{{ route('ormawa') }}/DPM">DPM Fakultas Teknik</a></h5>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12"></div>
                </div>
            </div>
        </div>
    </div>
@endsection