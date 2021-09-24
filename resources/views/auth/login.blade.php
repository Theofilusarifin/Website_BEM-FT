@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner mb-5">
        <div class="overlay">
            <div class="container">
                <h2>Login</h2>
            </div>
        </div>
    </div>
    <div class="contact-us-section">
        <div class="container">
            <div class="theme-title-one">
                <p>Harap Login menggunakan username dan password yang sesuai</p>
            </div>
            <div class="form-wrapper">
                <form method="POST" action="{{ route('login') }}" class="form-validation" autocomplete="off">
                    @csrf
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-6 col-12">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-6 col-12">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                            @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="theme-button-one mt-5" style="margin:auto">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
