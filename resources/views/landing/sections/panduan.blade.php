<section id="panduan" class="panduan section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Panduan <span>Prakerja</span></p>
        </div>

        <div class="row gy-4">

            @foreach ($panduans as $panduan)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="min-height: 520px">
                        {{-- <img src="{{ asset($panduan->banner) }}" class="card-img-top" alt="..."> --}}
                        {!! $panduan->banner_show !!}
                        <div class="card-body">
                            <h5 class="card-title">{{ $panduan->title }}</h5>
                            {{-- <p class="card-text">{!! strip_tags($panduan->description_highlight) !!}</p> --}}
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('panduan.detail', $panduan->slug) }}" class="btn btn-kp w-100">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        @if ($panduan_total > 6)
            <div class="row">
                <div class="col-12 mt-5">
                    <a href="{{ route('panduan') }}" class="btn btn-dark w-100">
                        Tampilkan lebih banyak
                    </a>
                </div>
            </div>
        @endif

    </div>
</section>
