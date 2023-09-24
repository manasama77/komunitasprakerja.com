<section id="jadwal" class="jadwal section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Jadwal <span>Pertemuan</span></p>
        </div>

        <div class="row gy-4">

            @foreach ($jadwals as $jadwal)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="min-height: 150px">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $jadwal->title }}</h4>
                            <p class="card-text">
                                Tanggal: <b>{{ $jadwal->dt_jadwal_ind }}</b><br />
                                Alamat: <b>{{ $jadwal->address }}</b><br />
                                Detil:<br />{{ $jadwal->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
