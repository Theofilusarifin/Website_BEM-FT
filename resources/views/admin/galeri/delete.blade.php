@extends('layouts.admin_app')

@section('content')
<div class="theme-inner-banner">
	<div class="overlay">
		<div class="container">
			<h2>Hapus Galeri</h2>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block mb-3">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif

<div class="mt-5" style="height:25px;"></div>
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
						<img src="{{ asset('/'.$galeri->link_foto) }}" alt="Foto Galeri" class="cover-img">
						<div class="hover-content">
							<div class="text clearfix">
								<div class="float-left">
									<h5 style="color:white">{{ $galeri->nama }}</h5>
									<p>{{ substr_replace($galeri->deskripsi, "...", 50) }}</p>
								</div>
								<button type="button" class="details float-right" data-toggle="modal" data-target="#exampleModal{{ $galeri->id }}">
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </button>
							</div>
						</div>
					</div>
				</div>
                <div class="modal fade" id="exampleModal{{ $galeri->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Are you sure?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>
                                    {{ $galeri->nama_singkatan }}
                                </strong>
                                <div class="text-secondary">
                                    <small>Published: 
                                        {{ date("d F, Y", strtotime($galeri->created_at)) }}
                                    </small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form method="POST" action="{{ route('galeri.destroy', $galeri->id) }}" class="form-valiFdation" autocomplete="off">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="path" value="{{ $galeri->link_foto }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
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