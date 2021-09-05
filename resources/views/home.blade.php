@extends('layouts.app')

@section('content')

	{{-- Banner Beranda --}}
	<div id="theme-main-banner" class="banner-one">
		<div data-src="{{ asset('bemft_assets/images/home/slide-5.jpg') }}">
			<div class="camera_caption">
				<div class="container">
					<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
					<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">HIGH-QUALITY MARKET <br> EXPERIENCES</h1>
					<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">ABOUT US</a>
				</div> 
			</div>
		</div>
		<div data-src="{{ asset('bemft_assets/images/home/slide-3.jpg') }}">
			<div class="camera_caption">
				<div class="container">
					<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
					<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">HIGH-QUALITY MARKET <br> EXPERIENCES</h1>
					<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">ABOUT US</a>
				</div> 
			</div>
		</div>
		<div data-src="{{ asset('bemft_assets/images/home/slide-1.jpg') }}">
			<div class="camera_caption">
				<div class="container">
					<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
					<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">HIGH-QUALITY MARKET <br> EXPERIENCES</h1>
					<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">ABOUT US</a>
				</div>
			</div>
		</div>
	</div>
	{{-- End Of Banner Beranda --}}
	
	{{-- Call To Action --}}
	<div class="callout-banner section-spacing">
		<div class="container clearfix">
			<h3 class="title">Provide solutions for the realiable growth</h3>
			<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to ever wondered the east side to a deluxe apartment.</p>
			<a href="#" class="theme-button-one">FREE QUOTES</a>
		</div>
	</div>
	{{-- End Of Call To Action --}}

	{{-- Visi Misi --}}
	<div class="our-solution section-spacing">
		<div class="container">
			{{-- Visi --}}
			<div class="theme-title-one">
				<h2>VISI</h2>
			</div>
			<div class="wrapper mb-5">
				<div class="row justify-content-center mb-5">
					<div class="col-lg-8 col-sm-12 col-12">
						<div class="single-solution-block">
							<img src="{{ asset('bemft_assets/images/icon/vision.png') }}" alt="visi" class="icon">
							<h5><p>Visi #1</p></h5>
							<p style="text-align: justify;">Menjadikan Badan Eksekutif Mahasiswa Fakultas Teknik sebagai organisasi pelopor mahasiswa dalam menyalurkan bakat secara inklusif, apresiatif, dan harmonis dengan menanamkan nilai PERMATA (Pioneer, Bersih, Semangat Pagi, Satu, dan Tangguh)</p>
						</div>
					</div>
				</div>
			</div>

			{{-- Misi --}}
			<div class="theme-title-one">
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
				<div class="main-content" style="background:#fafafa; height: 50vh; width:100%; max-height:100%">
					<img src="{{ asset('bemft_assets/images/hrd.png') }}" alt="BPH">
					<h4><a href="{{ route('bph') }}">BPH</a></h4>
					<p style="text-align: justify;">Pengurus inti BEM Fakultas Teknik</p>
				</div> 
			</div> 
			
			<div class="item">
				<div class="main-content" style="background:#f6f6f6; height: 50vh; width:100%; max-height:100%">
					<img src="{{ asset('bemft_assets/images/ad.png') }}" alt="AD">
					<h4><a href="{{ route('ad') }}">AD</a></h4>
					<p style="text-align: justify;">Mengurus segala urusan administrasi ormawa Fakultas Teknik. Urusan administrasi berupa pengauditan proposal dan laporan pertanggung-jawaban.</p>
				</div> 
			</div> 
			
			<div class="item">
				<div class="main-content" style="background:#efefef; height: 50vh; width:100%; max-height:100%">
					<img src="{{ asset('bemft_assets/images/hrd.png') }}" alt="HRD">
					<h4><a href="{{ route('hrd') }}">HRD</a></h4>
					<p style="text-align: justify;">Menjaga hubungan antar internal dan eksternal BEM Fakultas Teknik. Mulai dari menyiapkan acara - acara bonding internal hingga membuat kegiatan dengan pihak luar BEM Fakultas Teknik.</p>
				</div> 
			</div> 
			
			<div class="item">
				<div class="main-content" style="background:#e9e9e9; height: 50vh; width:100%; max-height:100%">
					<img src="{{ asset('bemft_assets/images/idd.png') }}" alt="IDD">
					<h4><a href="{{ route('idd') }}">IDD</a></h4>
					<p style="text-align: justify;">Menyalurkan informasi dan menjada sarana publikasi serta melakukan rekam jejak kegiatan BEM Fakultas Teknik.</p>
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
					<p>Berikut adalah FAQ seputar BEM Fakultas Teknik</p>
				</div>
				<div class="wrapper row no-gutters">
					{{-- FAQ Part --}}
					<div class="col-xl-6 col-lg-7 order-last">
						<div class="faq-content">
							<div class="accordion-one">
								<div class="panel-group theme-accordion" id="accordion">
									{{-- FAQ 1 --}}
									<div class="panel">
										<div class="panel-heading">
											<h6 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											1. What industries do you specialize in?</a>
											</h6>
										</div>
										<div id="collapse1" class="panel-collapse collapse">
											<div class="panel-body">
												<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.</p>
											</div>
										</div>
									</div>
									{{-- FAQ 2 --}}
									<div class="panel">
										<div class="panel-heading active-panel">
											<h6 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
												2. You guarantee that our plan will raise capital?</a>
											</h6>
										</div>
										<div id="collapse2" class="panel-collapse collapse show">
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
					<div class="col-xl-6 col-lg-5 order-first"><div class="img-box"><a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amshowinfo=0" class="play"><i class="fa fa-play" aria-hidden="true"></i></a></div></div>
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
				<p>Berikut ini adalah dokumentasi dari proker-proker BEM Fakultas Teknik</p>
			</div>
			<div class="wrapper">
				<div class="clearfix">
					<div class="latest-news-slider">
						<div class="item">
							<div class="single-blog">
								<div class="image-box">
									<img src="{{ asset('bemft_assets/images/blog/3.jpg') }}" alt="">
									<div class="overlay"><a href="#" class="date">Feb 06, 2018</a></div>
								</div>
								<div class="post-meta">
									<h5 class="title"><a href="blog-details.html">Trouble with the law since to eastern side of yellow mint</a></h5>
									<a href="blog-details.html" class="read-more">READ MORE</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-blog">
								<div class="image-box">
									<img src="{{ asset('bemft_assets/images/blog/4.jpg') }}" alt="">
									<div class="overlay"><a href="#" class="date">Mar 30, 2018</a></div>
								</div>
								<div class="post-meta">
									<h5 class="title"><a href="blog-details.html">Kind of torture to have to watch the show the one day</a></h5>
									<a href="blog-details.html" class="read-more">READ MORE</a>
								</div>
							</div>
						</div> 
						<div class="item">
							<div class="single-blog">
								<div class="image-box">
									<img src="{{ asset('bemft_assets/images/blog/5.jpg') }}" alt="">
									<div class="overlay"><a href="#" class="date">Apr 14, 2018</a></div>
								</div>
								<div class="post-meta">
									<h5 class="title"><a href="blog-details.html">Make the best of things its an uphill climb long time</a></h5>
									<a href="blog-details.html" class="read-more">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection