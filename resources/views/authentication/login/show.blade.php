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
{{--                        @include('_layouts.parts.authentication.form.email-form')--}}
                        <script src="https://accounts.google.com/gsi/client" async></script>
                        <div id="g_id_onload"
                             data-client_id="824588110807-32g2b6grasqud47olpv1nam4r5oq5rjp.apps.googleusercontent.com"
                             data-login_uri="https://your.domain/your_login_endpoint"
                             data-auto_prompt="false">
                        </div>
                        <div class="g_id_signin"
                             data-type="standard"
                             data-size="large"
                             data-theme="outline"
                             data-text="sign_in_with"
                             data-shape="rectangular"
                             data-logo_alignment="left">
                        </div>
                        <body>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
