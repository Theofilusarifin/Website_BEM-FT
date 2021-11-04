@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Edit Pengumuman</h2>
			</div>
		</div>
	</div>
	@foreach($pengumumans as $pengumuman)
	<div class="blog-inner-page section-spacing">
		<div class="container">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-xl-9 col-lg-8 col-12 our-blog">
					<div class="post-wrapper">
						<div class="single-blog">
							<div class="image-box">
								<img src="{{ asset('/'.$pengumuman->link_foto) }}" alt="Foto Pengumuman"
									style="height:auto; width:870px; max-width:870px;" class="cover-img">
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
		</div>
	</div>
	@endforeach
@endsection
