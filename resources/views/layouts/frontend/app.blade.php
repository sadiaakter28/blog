<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title') - {{ config('app.name', 'Blog') }}
    </title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('assets/frontend/common-css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/common-css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/common-css/ionicons.css')}}" rel="stylesheet">
    @stack('css')

</head>
<body>

@include('layouts.frontend.partials.header')

@yield('content')

@include('layouts.frontend.partials.footer')

<!-- SCIPTS -->
<script src="{{asset('assets/frontend/common-js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/common-js/tether.min.js')}}"></script>
<script src="{{asset('assets/frontend/common-js/bootstrap.js')}}"></script>
<script src="{{asset('assets/frontend/common-js/scripts.js')}}"></script>
@stack('js')
</body>
</html>
