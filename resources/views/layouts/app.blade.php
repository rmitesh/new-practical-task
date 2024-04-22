<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset( $title ) ? $title . ' - ' : '' }} {{ config('app.name', 'Laravel') }}</title>

        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
        <link rel="stylesheet" href="{{ asset('assets/plugins/fonts/css/css.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
        
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert2.min.css') }}">
        
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

        @section('header-css')
        @show

    </head>
    <body class="font-sans antialiased">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </nav>

            <!-- Main Sidebar Container -->
            @include('layouts.sidebar')

            <!-- Page Content -->
            <main>
                @section('content')
                @show
            </main>

            <footer class="main-footer">
                <strong>Copyright &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 0.1
                </div>
            </footer>
        </div>

        <div class="overlay hide" id="loader">
            <span class="spinner-glow center-custom spinner-glow-info mr-5"></span>
        </div>

        <script type="text/javascript">
            const __url = "{{ url('/') }}";
        </script>
        
        <!-- jQuery -->
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        
        <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

        @section('footer-js')
        @show
    </body>
</html>
