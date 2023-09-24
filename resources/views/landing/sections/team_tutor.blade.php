<section id="team_tutor" class="chefs ">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Team<span>Tutor</span></p>
        </div>

        <div class="row gy-4">

            @foreach ($team_tutors as $team_tutor)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="chef-member">
                        <div class="member-img">
                            {!! $team_tutor->photo_fe !!}
                            {{-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                        <div class="member-info">
                            <h4>{{ $team_tutor->name }}</h4>
                            {{-- <span>Master Chef</span> --}}
                            {{-- <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut.
                                Ipsum exercitationem iure minima enim corporis et voluptate.</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
