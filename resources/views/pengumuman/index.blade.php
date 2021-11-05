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
		<div class="our-solution section-spacing mt-5">
			<div class="container">
				<div class="theme-title-one">
					<h2>Pengumuman BEM Fakultas Teknik</h2>
				</div>
			</div>
		</div>
		<div class="blog-inner-page section-spacing">
			<div class="container">
				@foreach($pengumumans as $pengumuman)
					<div class="row d-flex justify-content-center align-items-center">
						<div class="col-xl-9 col-lg-8 col-12 our-blog">
							<div class="post-wrapper">
								<div class="single-blog">
									<div class="image-box">
										<img src="{{ asset('/'.$pengumuman->link_foto) }}" alt="Foto Pengumuman" class="cover-img" >
										<div class="overlay"><a href="#" class="date">{{ $pengumuman->created_at }}</a></div>
									</div>
									<div class="post-meta">
										<h5><a href="{{ 'pengumuman/'.$pengumuman->slug }}">{{ $pengumuman->judul }}</a></h5>
										<p>{{ substr_replace($pengumuman->isi, "...", 300) }}</p>
										<a href="{{ 'pengumuman/'.$pengumuman->slug }}" class="read-more">READ MORE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				{{-- Pagination --}}
				<div class="d-flex justify-content-center">
					<div>
						{{ $pengumumans->links() }}
					</div>
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