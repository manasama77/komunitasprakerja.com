<section id="testimoni" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Testimoni <span>Pekerja</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($testimonis as $testimoni)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            {{ $testimoni->testimoni }}
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>{{ $testimoni->name }}</h3>
                                        {{-- <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    {{-- <img src="assets/img/testimonials/testimonials-1.jpg"
                                        class="img-fluid testimonial-img" alt=""> --}}
                                    {!! $testimoni->photo_fe !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
