@extends('layouts.landing')

@section('aku_isi_mas')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $page_header }}</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        {!! $breadcrumbs !!}
                    </ol>
                </div>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Why Us Section ======= -->
        @include('landing.sections.panduan_list')
        <!-- End Why Us Section -->

    </main>
@endsection

@section('gaya')
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
@endsection

@section('vitamin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script></script>
@endsection
