<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | Shared environment</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
<div id="app">
    @yield('content')
</div>
@stack('scripts')
</body>
</html>
