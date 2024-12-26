<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="/"><img src="{{ url('frontend/images/logo.svg') }}" alt="Logo" /></a>
        </div>
        <!-- Tombol toggle navbar untuk tampilan mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Link ke halaman Home -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <!-- Link ke halaman Daftar -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('daftar') ? 'active' : '' }}"
                        href="{{ route('daftar') }}">Daftar</a>
                </li>
                <!-- Link ke halaman Hasil -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('hasil') ? 'active' : '' }}" href="{{ route('hasil') }}">Hasil</a>
                </li>
                <!-- Link ke halaman Grafik -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('grafik') ? 'active' : '' }}"
                        href="{{ route('grafik') }}">Grafik</a>
                </li>
            </ul>
            <!-- Ikon pencarian -->
            <div class="btn-container">
                <div class="search-icon-container">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>
</nav>