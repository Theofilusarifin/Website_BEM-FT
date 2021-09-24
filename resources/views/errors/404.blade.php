@extends('layouts.app')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Page Not Found</h2>
            </div>
        </div>
    </div>

    {{-- Error Page --}}
    <div class="container error-page">
        <h2>404</h2>
        <h3>Looks like somthing went wrong</h3>
        <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
        <div>
            <a href="{{ route('beranda') }}" class="theme-button-one">Go Home</a>
        </div>
    </div>
@endsection
{{-- @extends('errors::layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}
