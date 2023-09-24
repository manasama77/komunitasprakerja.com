<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $page_title ?? 'Admin' }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('gaya')

    @vite(['resources/css/adminlte/adminlte.css', 'resources/js/adminlte/bootstrap.bundle.js', 'resources/js/adminlte/adminlte.js'])
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.admin_navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.admin_aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('page-header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('page-body')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                {{ env('APP_VERSION') }}
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2023, Created by <a href="https://www.linkedin.com/in/adampm/">APM</a>.</strong>
        </footer>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"
        integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap 4 -->
    {{-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <!-- AdminLTE App -->
    {{-- <script src="dist/js/adminlte.min.js"></script> --}}

    @yield('vitamin')
</body>

</html>
