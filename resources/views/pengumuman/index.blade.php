@extends('layouts.app')

@section('content')

	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Pengumuman</h2>
			</div>
		</div>
	</div>

	@if($pengumumans->count())
	<div class="blog-inner-page section-spacing">
		<div class="container">
			<div class="row">
				@foreach($pengumumans as $pengumuman)
				<div class="col-xl-9 col-lg-8 col-12 our-blog">
					<div class="post-wrapper">
						<div class="single-blog">
							<div class="image-box">
								<img src="{{ asset('storage/pengumuman/'.$pengumuman->judul.'.png') }}" alt="Foto Pengumuman">
								<div class="overlay"><a href="#" class="date">Feb 06, 2018</a></div>
							</div>
							<div class="post-meta">
								<h5><a href="{{ 'pengumuman/'.$pengumuman->slug }}">{{ $pengumuman->judul }}</a></h5>
								<p>{{ $pengumuman->isi }}</p>
								<a href="{{ 'pengumuman/'.$pengumuman->slug }}" class="read-more">READ MORE</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		{{-- Pagination --}}
			<div class="d-flex justify-content-center">
				<div>
					{{ $pengumumans->links() }}
				</div>
			</div>
	</div>
	@else
		<div class="our-solution section-spacing mt-5">
			<div class="container">
				<div class="theme-title-one">
					<h4>Belum ada pengumuman untuk saat ini</h4>
				</div>
			</div>
		</div>
	@endif
@endsection
	<!--@if($pengumumans->count())
		<div class="our-solution section-spacing mt-5">
			<div class="container">
				<div class="theme-title-one">
					<h2>Dokumentasi Program Kerja BEM Fakultas Teknik</h2>
				</div>
			</div>
		</div>
	-->
	
	
		<!-- <div class="our-case our-project section-spacing">
			<div class="container">
				<div class="wrapper mb-4">
					<div class="row">
						@foreach($pengumumans as $pengumuman)
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="single-case-block">
								<img src="{{ asset('storage/pengumuman/'.$pengumuman->judul.'.png') }}" alt="Foto Pengumuman">
								<div class="hover-content">
									<div class="text clearfix">
										<div class="float-left">
											<h5><a href="{{ 'pengumuman/'.$pengumuman->slug }}">{{ $pengumuman->judul }}</a></h5>
											<p>{{ $pengumuman->isi }}</p>
										</div>
										<a href="{{ 'pengumuman/'.$pengumuman->slug }}" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				{{-- Pagination --}}
				<div class="d-flex justify-content-center">
					<div>
						{{ $pengumumans->links() }}
					</div>
				</div>
			</div>
		</div> -->
	<!-- @else
		<div class="our-solution section-spacing mt-5">
			<div class="container">
				<div class="theme-title-one">
					<h4>Belum ada pengumuman untuk saat ini</h4>
				</div>
			</div>
		</div>
	@endif -->
