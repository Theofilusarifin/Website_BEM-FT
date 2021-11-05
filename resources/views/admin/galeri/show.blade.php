@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner">
		<div class="overlay">
			<div class="container">
				<h2>Edit Galeri</h2>
			</div>
		</div>
	</div>
	
	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block section-spacing">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	</div>
	@endif

	@if($galeris->count())
		<div class="our-solution section-spacing mt-5">
			<div class="container">
				<div class="theme-title-one">
					<h2>Dokumentasi Program Kerja BEM Fakultas Teknik</h2>
				</div>
			</div>
		</div>
		<div class="our-case our-project section-spacing">
			<div class="container">
				<div class="wrapper mb-4">
					<div class="row">
						@foreach($galeris as $galeri)
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="single-case-block">
								<img src="{{ asset('/'.$galeri->link_foto) }}" alt="Foto Galeri" class="cover-img" >
								<div class="hover-content">
									<div class="text clearfix">
										<div class="float-left">
											<h5><a href="{{ 'update/'.$galeri->slug }}">{{ $galeri->nama }}</a></h5>
											<p>{{ substr_replace($galeri->deskripsi, "...", 50) }}</p>
										</div>
										<a href="{{ 'update/'.$galeri->slug }}" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
						{{ $galeris->links() }}
					</div>
				</div>
			</div>
		</div>
	@else
		<div class="our-solution section-spacing mt-5">
			<div class="container">
				<div class="theme-title-one">
					<h4>Belum ada dokumentasi kegiatan untuk saat ini</h4>
				</div>
			</div>
		</div>
	@endif
@endsection
