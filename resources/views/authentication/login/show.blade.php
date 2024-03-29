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
{{--                        @include('_layouts.parts.authentication.form.email-form')--}}
                        <div id="g_id_onload"
                             data-client_id="824588110807-32g2b6grasqud47olpv1nam4r5oq5rjp.apps.googleusercontent.com"
                             data-context="signin"
                             data-ux_mode="popup"
                             data-login_uri="http://localhost:45210/api/v1/sign-in/google"
                             data-nonce=""
                             data-auto_select="true"
                             data-itp_support="true">
                        </div>
                        <div class="g_id_signin"
                             data-type="standard"
                             data-shape="rectangular"
                             data-theme="outline"
                             data-text="signin_with"
                             data-size="large"
                             data-logo_alignment="left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
