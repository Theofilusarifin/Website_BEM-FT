@extends('layouts.app')

@section('content')

	{{-- Banner Beranda --}}
	<div id="theme-main-banner" class="banner-one">
		<div data-src="{{ asset('bemft_assets/images/home/1.png') }}">
			<div class="camera_caption">
				<div class="container">
					<h1 class="wow fadeInUp animated" style="color:#fff" data-wow-delay="0.2s">Selamat Datang Di <br> WEBSITE BEM FT UBAYA</h1>
				</div> 
			</div>
		</div>
		<div data-src="{{ asset('bemft_assets/images/home/2.png') }}">
			<div class="camera_caption">
				<div class="container">
					<p class="wow fadeInUp animated" style="color:#f6f6f6">Jelajahi Fakultas Teknik Secara Virtual</p>
					<h1 class="wow fadeInUp animated" style="color:#fff" data-wow-delay="0.2s">Campus Tour</h1>
					<a href="{{ route('tour') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CLICK HERE</a>
				</div> 
			</div>
		</div>
		<div data-src="{{ asset('bemft_assets/images/home/slide-1.jpg') }}">
			<div class="camera_caption">
				<div class="container">
					<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
					<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">HIGH-QUALITY MARKET <br> EXPERIENCES</h1>
					<a href="{{ route('tour') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Click Here</a>
				</div>
			</div>
		</div>
	</div>
	{{-- End Of Banner Beranda --}}
	
	{{-- Call To Action --}}
	{{-- <div class="callout-banner section-spacing">
		<div class="container clearfix">
			<h3 class="title">Website Official BEM FT UBAYA</h3>
			<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to ever wondered the east side to a deluxe apartment.</p>
		</div>
	</div> --}}
	{{-- End Of Call To Action --}}

	<div class="section-spacing"></div>
	{{-- Foto Gubem Wagubem --}}

	<div class="our-team section-spacing">
		<div class="container">
			<div class="theme-title-one" style="margin-bottom:-30px">
				<h2>GUBERNUR & WAKIL GUBERNUR<br>FAKULTAS TEKNIK 2021/2022</h2>
			</div>
			<div class="wrapper">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="team-member">
							<div class="image-box">
								<img src="{{ asset('bemft_assets/images/anggota/bph/fauzi.jpeg') }}" alt="">
							</div>
							<div class="text">
								<h6 class="mb-2">Achmad Fauzi Bagus</h6>
								<span>Gubernur BEM Fakultas Teknik<br>2021-2022</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="team-member">
							<div class="image-box">
								<img src="{{ asset('bemft_assets/images/anggota/bph/eunike.jpeg') }}" alt="">
							</div>
							<div class="text">
								<h6 class="mb-2">Eunike Putri Permatasari</h6>
								<span>Wakil Gubernur BEM Fakultas Teknik<br>2021-2022</span>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
	{{-- End Of Foto Gubem Wagubem --}}

	{{-- Visi Misi --}}
	<div class="our-solution section-spacing">
		<div class="container">
			{{-- Visi --}}
			<div class="theme-title-one" style="margin-bottom:-30px">
				<h2>VISI</h2>
			</div>
			<div class="wrapper mb-5">
				<div class="row justify-content-center mb-5">
					<div class="col-lg-8 col-sm-12 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('bemft_assets/images/icon/vision.png') }}" alt="visi" class="icon">
							<h5><p></p></h5>
							<p style="text-align: justify;">Menjadikan Badan Eksekutif Mahasiswa Fakultas Teknik sebagai organisasi pelopor mahasiswa dalam menyalurkan bakat secara inklusif, apresiatif, dan harmonis dengan menanamkan nilai PERMATA (Pioneer, Bersih, Semangat Pagi, Satu, dan Tangguh)</p>
						</div>
					</div>
				</div>
			</div>

			{{-- Misi --}}
			<div class="theme-title-one" style="margin-bottom:-30px">
				<h2>MISI</h2>
			</div>
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('bemft_assets/images/icon/mission.png') }}" alt="misi" class="icon">
							<h5><p>Misi #1</p></h5>
							<p style="text-align: justify;">Menekankan sikap yang aspiratif dan partisipatif kepada seluruh ORMAWA dan Masyarakat Fakultas Teknik </p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('bemft_assets/images/icon/mission.png') }}" alt="misi" class="icon">
							<h5><p>Misi #2</p></h5>
							<p style="text-align: justify;">Menciptakan kesejahteraan kepada ORMAWA di Fakultas Teknik dengan memberikan pelayanan yang efisien guna terciptanya kegiatan kemahasiswaan yang baik</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('bemft_assets/images/icon/mission.png') }}" alt="misi" class="icon">
							<h5><p>Misi #3</p></h5>
							<p style="text-align: justify;">Mewujudkan iklim berorganisasi yang profesional dengan menciptakan suasana menyenangkan dan harmonis guna terciptanya kinerja yang maksimal</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- End Of Visi Misi --}}

	{{-- Tentang Kabinet --}}
	<div class="about-compnay-two section-spacing">
		<div class="overlay">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-7 col-12 text">
						<div class="theme-title-one">
							<h2>Tentang Kabinet #SatuSinergi</h2>
						</div>
						<p>Bersinergi menyatukan tekad menjadi satu irama yang harmonis untuk berani beraksi memberikan perubahan diera saat ini.</p>
						<img src="images/home/sign.png" alt="" class="sign">
					</div>
				</div>
			</div>
		</div> 
	</div>
	{{-- End Of Tentang Kabinet --}}

	{{-- Divisi --}}
	<div class="top-feature section-spacing">
		<div class="top-features-slide">
			<div class="item">
				<div class="main-content" style="background:#fafafa;">
					<img src="{{ asset('bemft_assets/images/logo/bph.png') }}" style="max-height:143px; height 143px; width:auto" alt="BPH">
					<h4><a href="{{ route('bph') }}">BPH</a></h4>
					<p>Badan Pengurus Harian</p>
				</div> 
			</div> 
			
			<div class="item">
				<div class="main-content" style="background:#f6f6f6;">
					<img src="{{ asset('bemft_assets/images/logo/a_d.png') }}" style="max-height:143px; height 143px; width:auto" alt="AD">
					<h4><a href="{{ route('ad') }}">AD</a></h4>
					<p>Administration Department</p>
				</div> 
			</div> 
			
			<div class="item">
				<div class="main-content" style="background:#efefef;">
					<img src="{{ asset('bemft_assets/images/logo/hrd.png') }}" style="max-height:143px; height 143px; width:auto" alt="HRD">
					<h4><a href="{{ route('hrd') }}">HRD</a></h4>
					<p>Human Resource Department</p>
				</div> 
			</div> 
			
			<div class="item">
				<div class="main-content" style="background:#e9e9e9;">
					<img src="{{ asset('bemft_assets/images/logo/idd.png') }}" style="max-height:143px; height 143px; width:auto" alt="IDD">
					<h4><a href="{{ route('idd') }}">IDD</a></h4>
					<p>Information and Design Department</p>
				</div>
			</div>
		</div>
	</div>
	{{-- End Of Divisi --}}
	
	{{-- FAQ --}}
	<div class="faq-section">
		<div class="overlay">
			<div class="container">
				<div class="theme-title-one">
					<h2>FAQ</h2>
					<p class="mb-5">Berikut adalah FAQ seputar BEM Fakultas Teknik</p>
				</div>
				<div class="wrapper row no-gutters">
					{{-- FAQ Part --}}
					<div class="col-xl-12 col-lg-7 order-last">
						<div class="faq-content">
							<div class="accordion-one">
								<div class="panel-group theme-accordion" id="accordion">
									{{-- FAQ 1 --}}
									<div class="panel">
										<div class="panel-heading active-panel">
											<h6 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											1. What industries do you specialize in?</a>
											</h6>
										</div>
										<div id="collapse1" class="panel-collapse collapse show">
											<div class="panel-body">
												<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.</p>
											</div>
										</div>
									</div>
									{{-- FAQ 2 --}}
									<div class="panel">
										<div class="panel-heading">
											<h6 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
												2. You guarantee that our plan will raise capital?</a>
											</h6>
										</div>
										<div id="collapse2" class="panel-collapse collapse">
											<div class="panel-body">
												<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.</p>
											</div>
										</div>
									</div>
									{{-- FAQ 3 --}}
									<div class="panel">
										<div class="panel-heading">
											<h6 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
												3. Do you ever invest in your clients?</a>
											</h6>
										</div>
										<div id="collapse3" class="panel-collapse collapse">
											<div class="panel-body">
												<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.</p>
											</div>
										</div>
									</div>
									{{-- FAQ 4 --}}
									<div class="panel">
										<div class="panel-heading">
											<h6 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
												4. What makes your financial projections special?</a>
											</h6>
										</div>
										<div id="collapse4" class="panel-collapse collapse">
											<div class="panel-body">
												<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.</p>
											</div>
										</div>
									</div>
									{{-- FAQ 5 --}}
									<div class="panel">
										<div class="panel-heading">
											<h6 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
												5. Will you agree with everything I say?</a>
											</h6>
										</div>
										<div id="collapse5" class="panel-collapse collapse">
											<div class="panel-body">
												<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- End Of FAQ Part --}}
				</div>
			</div>
		</div>
	</div>
	{{-- End Of FAQ --}}

	{{-- Galeri --}}
	<div class="our-blog latest-news section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Galeri</h2>
				@if(count($galleris))
					<p>Berikut ini adalah dokumentasi dari program kerja BEM Fakultas Teknik</p>
				@else
					<p>Belum ada dokumentasi kegiatan untuk saat ini</p>
				@endif
			</div>
			<div class="wrapper">
				<div class="clearfix">
					<div class="latest-news-slider">
						@if(count($galleris))
							@foreach($galleris as $galleri)
								<div class="item">
									<div class="single-blog">
										<div class="image-box">
											<img src="{{ asset('storage/galeri/'.$galleri->nama_singkatan.'.png') }}" style="max-height:260px; width:auto;" alt="Dokumentasi Program Kerja">
											<div class="overlay"><a href="#" class="date">{{ $galleri->tanggal }}</a></div>
										</div>
										<div class="post-meta">
											<h5 class="title"><a href="{{ $galleri->slug }}">{{ $galleri->nama }}</a></h5>
											<a href="{{ $galleri->slug }}" class="read-more">{{ Str::limit($galleri->deskripsi, 80, '...') }}</a>
										</div>
									</div>
								</div>
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection