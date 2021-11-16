@extends('layouts.app')

@php
$faqs = array(
['question' => 'Kapan audit proposal harus dikirimkan ke AD BEM FT dan Audit DPM FT?',
'answer' => 'Bila kegiatan menggunakan dana Kemahasiswaan atau Dana Gabungan yang di dalamnya terdapat Dana
Kemahasiswaan.'],

['question' => 'Berapa batas poin keterlambatan Proposal dan LPJ setiap program kerja?',
'answer' => 'Batas poin keterlambatan, baik Proposal maupun LPJ adalah 20 poin. Bila lebih dari 20, maka Surat Tugas
tidak akan diturunkan. Perhitungan poin keterlambatan adalah 1 poin untuk satu hari Keterlambatan.'],

['question'=>'Apakah diperbolehkan untuk mengirim soft file Proposal dan LPJ menggunakan E-mail pribadi?',
'answer'=>'Pengiriman Proposal dan LPJ <strong>harus menggunakan E-mail Ormawa</strong> Masing-masing dan tidak
diperbolehkan mengirim dengan menggunakan E-mail pribadi'],

['question'=>'Bagaimana mekanisme pengajuan Bon Sementara (BS)?' ,
'answer' => 'Mengajukan pembuatan <strong>Bon Sementara (BS)</strong> kepada Koor AD BEM-FT melalui email
<strong>(adbemft@gmail.com)</strong> dengan format <strong>subject: BS_Ormawa_Nama Kegiatan</strong> dan melampirkan
file yang berisikan tanda jadi audit oleh Ketua Komisi Audit DPM-FT dan hasil <strong>Arsip Proposal</strong> yang telah
disetujui AD BEM-FT berbentuk <strong>pdf</strong>.'],

['question'=>'Bagaimana cara menyusun tabel keuangan dengan baik?' ,
'answer'=>'Format tabel keuangan dapat diakses dan diunduh di:
</br>
</br><a href="https://bit.ly/TabelKeuanganProposal" target="_blank"
	rel="noopener">https://bit.ly/TabelKeuanganProposal</a>
</br><a href="https://bit.ly/TabelKeuanganLPJ" target="_blank" rel="noopener">https://bit.ly/TabelKeuanganLPJ</a>'],

['question'=>'Di mana kami bisa mengakses dan mengunduh template Surat Pemberitahuan Acara?' ,
'answer'=>'Format Surat Pemberitahuan Acara dapat di-download di:
</br>
<br><a href="bit.ly/FORMATBEMFT21" target="_blank" rel="noopener">bit.ly/FORMATBEMFT21</a>'],

['question'=>'Bagaimana aturan nota untuk periode kali ini?' ,
'answer'=>'Nota dengan nominal di atas Rp5.000.000,00 harus disertai materai <strong>10.000</strong> dan tanda tangan
penerima pembayaran (dengan catatan, tanda tangan tidak menutupi identitas dan nominal yang tercantum pada nota dan
mengenai materai). <br><span class="text-danger">*Untuk Nota Online di-print terlebih dahulu lalu ditempelkan materai
	dan dilampirkan di softcopy.</span>'],

['question'=>'Berguna untuk apakah link G-Form Data Lomba Mahasiswa yang disediakan oleh BEM FT?' ,
'answer'=>'Link tersebut digunakan untuk mendata para mahasiswa terutama mahasiswa di Fakultas Teknik yang berprestasi
untuk di follow up lebih lanjut serta pemberian sebuah apresiasi. Untuk mendapatkan Link tersebut dapat menghubungi OA
Line : <strong>@541vnpky</strong>'],

['question'=>'ST/SK/Surat Undangan apabila belum turun pada saat mengupload, bagaimana solusinya?' ,
'answer'=>'Sebaiknya menunggu hingga ST/SK/Surat Undangan turun terlebih dahulu, baru mengisi GForm tersebut.'],

['question'=>'Bagaimana cara untuk dapat melakukan peminjaman inventaris ?' ,
'answer'=>'Peminjaman inevntaris dapat menghubungi divisi HRD melalui OA Line : <strong>@541vnpky</strong>'],

['question'=>'Apa saja inventaris yang dimiliki oleh BEM FT?' ,
'answer'=>'BEM FT memiliki inventaris berupa alat elektronik (handy talkie, mixer, speaker, dsb) dan alat non-elektronik
(layar proyektor, alat outbond, dsb).'],

['question'=>'Apakah peminjaman inventaris di BEM FT diperuntukkan juga bagi ormawa di luar Fakultas Teknik?' ,
'answer'=>'Iya, ormawa di luar Fakultas Teknik juga dapat meminjam inventaris, namun akan dikenakan biaya perawatan.'],
);
@endphp

@section('content')
{{-- Banner Beranda --}}
<div id="theme-main-banner" class="banner-one">
	<div data-src="{{ asset('bemft_assets/images/home/1.png') }}">
		<div class="camera_caption">
			<div class="container">
				<h1 class="wow fadeInUp animated" style="color:#fff" data-wow-delay="0.2s">Selamat Datang Di <br>
					WEBSITE BEM FT UBAYA</h1>
			</div>
		</div>
	</div>
	<div data-src="{{ asset('bemft_assets/images/home/2.png') }}">
		<div class="camera_caption">
			<div class="container">
				<p class="wow fadeInUp animated" style="color:#f6f6f6">Jelajahi Fakultas Teknik Secara Virtual!</p>
				<h1 class="wow fadeInUp animated" style="color:#fff" data-wow-delay="0.2s">Campus Tour</h1>
				<a href="{{ route('tour') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Klik
					Disini</a>
			</div>
		</div>
	</div>
	<div data-src="{{ asset('bemft_assets/images/home/3.png') }}">
		<div class="camera_caption">
			<div class="container">
				<p class="wow fadeInUp animated" style="color:#f6f6f6">Kenali Ormawa Fakultas Teknik!</p>
				<h1 class="wow fadeInUp animated" style="color:#f6f6f6" data-wow-delay="0.2s">Profil Ormawa <br>Fakultas
					Teknik</h1>
				<a href="{{ route('ormawa') }}" class="theme-button-one wow fadeInUp animated"
					data-wow-delay="0.39s">Klik Disini</a>
			</div>
		</div>
	</div>
</div>
{{-- End Of Banner Beranda --}}

{{-- Call To Action --}}
{{-- <div class="callout-banner section-spacing">
	<div class="container clearfix">
		<h3 class="title">Website Official BEM FT UBAYA</h3>
		<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the
			government they survive as soldiers of fortune to ever wondered the east side to a deluxe apartment.</p>
	</div>
</div> --}}
{{-- End Of Call To Action --}}

<div class="section-spacing"></div>
{{-- Foto Gubem Wagubem --}}

<div class="our-team section-spacing">
	<div class="container">
		<div class="theme-title-one" style="margin-bottom:-30px" data-aos="fade-up" data-aos-anchor-placement="top-center">
			<h2>GUBERNUR & WAKIL GUBERNUR<br>FAKULTAS TEKNIK 2021-2022</h2>
		</div>
		<div class="wrapper">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-lg-3 col-sm-6 col-12" data-aos="fade-up" data-aos-anchor-placement="top-center">
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
				<div class="col-lg-3 col-sm-6 col-12" data-aos="fade-up" data-aos-anchor-placement="top-center">
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
		<div class="theme-title-one" style="margin-bottom:-30px" data-aos="zoom-in">
			<h2>VISI</h2>
		</div>
		<div class="wrapper mb-5" data-aos="zoom-in">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-8 col-sm-12 col-12">
					<div class="single-solution-block">
						<img src="{{ asset('bemft_assets/images/icon/vision.png') }}" alt="visi" class="icon">
						<h5>
							<p></p>
						</h5>
						<p style="text-align: justify;">Menjadikan Badan Eksekutif Mahasiswa Fakultas Teknik sebagai
							organisasi pelopor mahasiswa dalam menyalurkan bakat secara inklusif, apresiatif, dan
							harmonis dengan menanamkan nilai PERMATA (Pioneer, Bersih, Semangat Pagi, Satu, dan Tangguh)
						</p>
					</div>
				</div>
			</div>
		</div>

		{{-- Misi --}}
		<div class="theme-title-one" style="margin-bottom:-30px" data-aos="zoom-in">
			<h2>MISI</h2>
		</div>
		<div class="wrapper">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-12" data-aos="zoom-in">
					<div class="single-solution-block">
						<img src="{{ asset('bemft_assets/images/icon/mission.png') }}" alt="misi" class="icon">
						<h5>
							<p>Misi #1</p>
						</h5>
						<p style="text-align: justify;">Menekankan sikap yang aspiratif dan partisipatif kepada seluruh
							ORMAWA dan Masyarakat Fakultas Teknik </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12" data-aos="zoom-in">
					<div class="single-solution-block">
						<img src="{{ asset('bemft_assets/images/icon/mission.png') }}" alt="misi" class="icon">
						<h5>
							<p>Misi #2</p>
						</h5>
						<p style="text-align: justify;">Menciptakan kesejahteraan kepada ORMAWA di Fakultas Teknik
							dengan memberikan pelayanan yang efisien guna terciptanya kegiatan kemahasiswaan yang baik
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12" data-aos="zoom-in">
					<div class="single-solution-block">
						<img src="{{ asset('bemft_assets/images/icon/mission.png') }}" alt="misi" class="icon">
						<h5>
							<p>Misi #3</p>
						</h5>
						<p style="text-align: justify;">Mewujudkan iklim berorganisasi yang profesional dengan
							menciptakan suasana menyenangkan dan harmonis guna terciptanya kinerja yang maksimal</p>
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
			<div class="row no-gutters d-flex align-items-center">
				<div class="col-lg-5 col-12 text my-3">
					<div class="theme-title-one-x" style="text-color:white;">
						<h2 style="color:white;">Tentang Kabinet</h2>
						<h2 style="color:white;">#SatuSinergi</h2>
					</div>
				</div>
				<div class="col-lg-7 col-12 text">
					<p>Bersinergi menyatukan tekad menjadi satu irama yang harmonis untuk berani beraksi memberikan
						perubahan diera saat
						ini.</p>
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
				<img src="{{ asset('bemft_assets/images/logo/bph.png') }}"
					style="max-height:143px; height 143px; width:auto" alt="BPH">
				<h4><a href="{{ route('bph') }}">BPH</a></h4>
				<p>Badan Pengurus Harian</p>
			</div>
		</div>

		<div class="item">
			<div class="main-content" style="background:#f6f6f6;">
				<img src="{{ asset('bemft_assets/images/logo/a_d.png') }}"
					style="max-height:143px; height 143px; width:auto" alt="AD">
				<h4><a href="{{ route('ad') }}">AD</a></h4>
				<p>Administration Department</p>
			</div>
		</div>

		<div class="item">
			<div class="main-content" style="background:#efefef;">
				<img src="{{ asset('bemft_assets/images/logo/hrd.png') }}"
					style="max-height:143px; height 143px; width:auto" alt="HRD">
				<h4><a href="{{ route('hrd') }}">HRD</a></h4>
				<p>Human Resource Department</p>
			</div>
		</div>

		<div class="item">
			<div class="main-content" style="background:#e9e9e9;">
				<img src="{{ asset('bemft_assets/images/logo/idd.png') }}"
					style="max-height:143px; height 143px; width:auto" alt="IDD">
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
								@foreach ($faqs as $faq)
								{{-- FAQ 1 --}}
								<div class="panel">
									<div class="panel-heading">
										<h6 class="panel-title">
											<a class="pr-5"
												style="font-size: 20px; font-family:Source Sans Pro, sans-serif"
												data-toggle="collapse" data-parent="#accordion"
												href="#collapse{{$loop->index}}">
												{!!$faq['question']!!}
											</a>
										</h6>
									</div>
									<div id="collapse{{$loop->index}}" class="panel-collapse collapse">
										<div class="panel-body">
											<p style="text-align:justify; text-justify:inter-word;">{!!$faq['answer']!!}
											</p>
										</div>
									</div>
								</div>
								@endforeach
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
<div class="our-blog latest-news section-spacing" data-aos="fade-up">
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
								<img src="{{ asset('/'.$galleri->link_foto) }}" style="max-height:260px; width:auto;"
									alt="Dokumentasi Program Kerja">
								<div class="overlay"><a href="#" class="date">{{ $galleri->tanggal }}</a></div>
							</div>
							<div class="post-meta">
								<h5 class="title"><a href="/galeri/{{ $galleri->slug }}">{{ $galleri->nama }}</a></h5>
								<a href="/galeri/{{ $galleri->slug }}" class="read-more">{{
									Str::limit($galleri->deskripsi, 80, '...') }}</a>
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