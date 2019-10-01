<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index,follow">
    <meta name="description" content="">
    <meta name="author" content="DeMi Studio, s.r.o.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ env('APP_NAME') }}
        @yield('title')
    </title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css">
    @yield('css')

</head>
<body>

@include('frontend._partials._preloader')
@include('frontend._partials._menu')

@yield('content')

@include('frontend._partials._footer')
@include('frontend._partials._slide_menu')

<!-- SCRIPTS -->
<script src="{{ asset('js/frontend.min.js') }}" type="text/javascript"></script>
@yield('js')

</body>
</html>