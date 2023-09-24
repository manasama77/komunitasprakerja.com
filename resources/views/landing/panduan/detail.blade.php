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

        <!-- ======= Panduan Detail Section ======= -->
        <section>
            <div class="container" data-aos="fade-up">
                <div class="d-flex justify-content-start mb-3">
                    {!! $panduan->banner_fe !!}
                </div>
                <h1>{{ $panduan->title }}</h1>
                {!! $panduan->description !!}

                <div class="row mt-5">
                    <div class="col-12">
                        <a href="{{ route('panduan') }}" class="btn btn btn-kp">
                            <i class="fas fa-backward"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Panduan Detail Section -->

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
