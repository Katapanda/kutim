<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Kutim | @yield('title')</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets_frontend/images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets_frontend/images/favicon.ico') }}" type="image/x-icon">

        {{-- include style css --}}
        @include('includes.frontend.style')

    </head>
    <body>

        <!-- Pre-Loader -->
        <div id="page-preloader"><span class="spinner"></span></div>
        <!-- End Pre-Loader -->

        {{-- include topbar --}}
        @include('includes.frontend.topbar')

        {{-- include menu --}}
        @include('includes.frontend.menu')

        {{-- content --}}
        @yield('content')

        {{-- include footer --}}
        @include('includes.frontend.footer')

        {{-- include script --}}
        @include('includes.frontend.script')

    </body>
</html>      
