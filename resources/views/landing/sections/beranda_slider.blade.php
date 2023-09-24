<section id="beranda" class="hero d-flex align-items-center section-bg">
    <div class="container-fluid p-0">
        <div class="owl-carousel owl-theme">
            @foreach ($slider_banners as $slider_banner)
                {!! $slider_banner->banner_fe !!}
            @endforeach
        </div>
    </div>
</section>
