<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <title>{{ $page_title ?? config('app.name') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.common.includes.css_links')
    @stack('header_css')
</head>

<body>
    @include('layouts.common.header')
    @yield('content')
    @include('layouts.common.footer')
    @include('layouts.common.whatsapp_icon')
    @include('layouts.common.includes.js_links')
</body>

</html>
