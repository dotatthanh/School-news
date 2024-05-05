<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Hanoi University of Science and Technology &#40;HUST&#41;">
    <meta name="author" content="Hanoi University of Science and Technology (HUST)">
    <meta name="copyright" content="Hanoi University of Science and Technology (HUST) [ccpr@hust.edu.vn]">
    <meta name="google-site-verification" content="lpSvS2om85_DqFe7xgBMV-TvBFbuNGWvXNWeLtncZjM">
    <meta name="generator" content="NukeViet v4.5">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:title" content="Hanoi University of Science and Technology &#40;HUST&#41;">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Hanoi University of Science and Technology &#40;HUST&#41;">
    <meta property="og:site_name" content="Hanoi University of Science and Technology &#40;HUST&#41;">
    <meta property="og:url" content="https://hust.edu.vn/en/">

    @include('layouts.head-web')
</head>

@section('body')
    <body>
@show
    @include('layouts.sidebar-web')
    @yield('content')
    @include('layouts.footer-web')

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts-web')
</body>

</html>
