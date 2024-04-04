@extends('_layouts.app-auth')

@section('title', 'Login')

@section('content')
    <div class="container h-100 mt-4">
        <div class="row h-100">
            <div class="col-8">
                <div class="card vertical-center">
                    <h2 class="mx-auto mt-3">User login</h2>
                    <div class="mt-4 mb-4 mx-auto">
                        <script src="https://accounts.google.com/gsi/client" async></script>
                        <div id="g_id_onload"
                             data-client_id="68539947749-914ct5pkekskaqafdmmcjqrqc25alqma.apps.googleusercontent.com"
                             data-login_uri="{{ route("api.google.sing-in") }}"
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
                    </div>
                </div>
            </div>
            <div class="col-4" style="background-color:#252565"></div>
        </div>
    </div>
@endsection
