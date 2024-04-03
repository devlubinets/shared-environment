@extends('_layouts.app-auth')

@section('title', 'Login')

@section('content')
    <main class="login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <div class="row mt-5"></div>
                    <div class="row ps-2 pt-4 mt-5">
                        <h2>Login :></h2>
                    </div>
                    <div class="row pt-4 ps-3 mb-4">
                        {{ route("api.google.sing-in") }}
                        <script src="https://accounts.google.com/gsi/client" async></script>
                        <div id="g_id_onload"
                             data-client_id="68539947749-914ct5pkekskaqafdmmcjqrqc25alqma.apps.googleusercontent.com"
{{--                             data-login_uri="{{ route("api.google.sing-in") }}"--}}
                             data-login_uri="http://localhost/api/google/sing-in"
                             data-auto_prompt="false">
                        </div>
                        <div class="g_id_signin"
                             data-type="standard"
                             data-size="large"
                             data-theme="outline"
                             data-text="sign_in_with"
                             data-shape="rectangular"
                             data-callback="OnSuccess"
                             data-logo_alignment="left">
                        </div>
                        <body>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
