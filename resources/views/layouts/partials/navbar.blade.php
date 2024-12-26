<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{ url('frontend/images/logo.svg') }}" alt="Logo" /></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('daftar') }}">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="btn-container">
                <div class="search-icon-container">
                    <i class="fas fa-search"></i>
                </div>
                <!-- <button id="login-btn" class="btn btn-primary">Login</button> -->
            </div>
        </div>
    </div>
</nav>
