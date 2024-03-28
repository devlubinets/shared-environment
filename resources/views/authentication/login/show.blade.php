@extends('_layouts.app-auth')

@section('title', 'Login')

@section('content')
    <main class="login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <div class="row mt-5"></div>
                    <div class="row ps-2 pt-4 mt-5">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="row pt-4 ps-3 mb-4">
                        @include('_layouts.parts.authentication.form.email-form')
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="splash">
                        <img src="{{ asset('images/auth/login_splash.webp') }}" alt="splash" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
