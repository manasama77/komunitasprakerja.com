<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Frequently <span>Asked</span> Question</p>
        </div>

        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion" id="accordion_faq">

                    @foreach ($faqs as $faq)
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="heading_{{ $faq->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_{{ $faq->id }}" aria-expanded="false"
                                    aria-controls="collapse_{{ $faq->id }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse_{{ $faq->id }}" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</section>
