<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('home') }}#siapa_kita">Siapa kita</a></li>
                <li><a href="{{ route('home') }}#panduan">Panduan</a></li>
                <li><a href="{{ route('home') }}#menu">Team tutor</a></li>
                <li><a href="{{ route('home') }}#chefs">Jadwal pertemuan</a></li>
                <li><a href="{{ route('home') }}#gallery">Testimoni</a></li>
            </ul>
        </nav>

        <a class="btn-book-a-table" href="#book-a-table">Daftar Sekarang!</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
