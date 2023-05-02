<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mauricio Coelho">
        <meta name="author" content="Mauricio Coelho">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets-admin/assets/images/favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets-admin/assets/images/favicon_io/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-admin/assets/images/favicon_io/favicon-16x16.png')}}">
        <title>{{ config('app.name') }}  &mdash; @yield('title')</title>
        <!-- Simple bar CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/simplebar.css')}}">
        <!-- Fonts CSS -->
            <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/feather.css')}}">
        <!-- Date Range Picker CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/daterangepicker.css')}}">
        <!-- App CSS -->
            <link rel="stylesheet" href="{{asset('assets-admin/css/app-light.css')}}" id="lightTheme">
    </head>
    <body class="dark ">
        <div class="wrapper vh-100">
            <div class="row align-items-center h-100">
                @yield('content')
            </div>
        </div>
        @yield('scripts')
    </body>
</html>