@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Modal Detail Beasiswa -->
    <x-view-detail-popup />

    <!-- Section Best Beasiswa -->
    <section class="best-about">
        <!-- Badge Section -->
        <div class="badge-container">
            <img src="{{ url('frontend/images/icon-global.svg') }}" alt="">
            <p class="badge-text">Beasiswa Terbaik untuk Masa Depan Anda</p>
        </div>

        <!-- Title and Description -->
        <div class="title-container">
            <h1>#1PusatBeasiswa</h1>
            <p class="description">Raih potensi Anda dan wujudkan impian akademik bersama layanan beasiswa terbaik
                kami.</p>
        </div>

        <!-- Buttons Section -->
        <div class="buttons-container">
            <button class="button__about btn-get-started" onclick="location.href='{{ route('daftar') }}'">Daftar
                Sekarang</button>
        </div>

        <!-- Image Section -->
        <img class="about-image" src="{{ url('frontend/images/hero.svg') }}" alt="About Us">
    </section>


    <!-- Section Pilihan Beasiswa -->
    <section class="trust-me">
        <div class="project-info">
            <h2 class="project-title">Pilihan Beasiswa</h2>
            <p class="project-description">Berbagai program beasiswa untuk mendukung pendidikan dan meraih prestasi.
            </p>
        </div>

        <div class="scholarship-container-about">
            <div class="card-scholarship">
                <!-- Card Beasiswa Akademik -->
                <div class="card scholarship">
                    <img src="frontend/images/1.jpg" alt="Project 1">
                    <div class="card-content">
                        <h1 class="card-title scholarship">Beasiswa Akademik</h1>
                        <p class="desc-card">Program beasiswa yang ditujukan untuk mahasiswa dengan prestasi akademik
                            unggul. Memberikan dukungan finansial penuh untuk biaya kuliah dan tunjangan akademik selama
                            satu semester.</p>

                        <button class="view-details scholarship" data-type="akademik">View Details</button>
                    </div>
                </div>

                <!-- Card Beasiswa Non-Akademik -->
                <div class="card scholarship">
                    <img src="frontend/images/1.jpg" alt="Project 1">
                    <div class="card-content">
                        <h1 class="card-title scholarship">Beasiswa Non-Akademik</h1>
                        <p class="desc-card">Program beasiswa khusus bagi mahasiswa yang berprestasi di bidang non-akademik
                            seperti olahraga, seni, atau organisasi. Menyediakan dukungan biaya kuliah 75% dan fasilitas
                            pengembangan bakat.</p>

                        <button class="view-details scholarship" data-type="non-akademik">View Details</button>
                    </div>
                </div>

                <!-- Card Beasiswa Pelatihan -->
                <div class="card scholarship">
                    <img src="frontend/images/1.jpg" alt="Project 1">
                    <div class="card-content">
                        <h1 class="card-title scholarship">Beasiswa Pelatihan</h1>
                        <p class="desc-card">Program pelatihan intensif dengan beasiswa penuh selama 3 bulan. Dilengkapi
                            dengan sertifikasi dan kesempatan magang di perusahaan partner untuk pengembangan karir.</p>

                        <button class="view-details scholarship" data-type="pelatihan">View Details</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="professional-scolarship">
            <div class="container-about">
                <div class="left-content-about">
                    <h3>WE ARE THE BEST</h3>
                    <h1>Percayakan Impian <br>Pendidikan Anda<br>kepada Kami</h1>
                    <p>Daftarkan diri Anda ke program beasiswa unggulan yang kami tawarkan. Dengan berbagai pilihan
                        program yang sesuai
                        kebutuhan, kami siap mendukung perjalanan Anda menuju masa depan yang gemilang. Bersama
                        kami, raih kesempatan belajar
                        tanpa batas dan wujudkan impian Anda.
                    </p>
                    <div class="buttons-about">
                        <button class="button__about btn-get-started" onclick="location.href='{{ route('daftar') }}'">Daftar
                            Sekarang</button>
                    </div>
                </div>
                <div class="right-content-about">

                    <div class="card-item-unique">
                        <img src="{{ url('frontend/images/book1.svg') }}" alt="icon" class="card-item-icon-unique">
                        <div class="card-item-text-unique">
                            <h3>Pendaftaran Beasiswa Tanpa Ribet</h3>
                            <p>Pendaftaran mudah dan cepat dengan berbagai program beasiswa yang mendukung
                                pendidikan Anda.</p>
                        </div>
                    </div>
                    <div class="card-item-unique">
                        <img src="{{ url('frontend/images/book.svg') }}" alt="icon" class="card-item-icon-unique">
                        <div class="card-item-text-unique">
                            <h3>Profesional Terpercaya</h3>
                            <p>Nikmati kesempatan belajar dengan program beasiswa dari lembaga terpercaya dan
                                berpengalaman.</p>
                        </div>
                    </div>
                    <div class="card-item-unique">
                        <img src="{{ url('frontend/images/bookmark-2.svg') }}" alt="icon" class="card-item-icon-unique">
                        <div class="card-item-text-unique">
                            <h3>Beasiswa yang Mudah Diakses</h3>
                            <p>Daftarkan diri Anda ke berbagai program beasiswa dengan proses pendaftaran yang
                                praktis dan transparan.</p>
                        </div>
                    </div>
                    <div class="card-item-unique">
                        <img src="{{ url('frontend/images/brifecase-tick.svg') }}" alt="icon"
                            class="card-item-icon-unique">
                        <div class="card-item-text-unique">
                            <h3>Pilihan Beasiswa Fleksibel</h3>
                            <p>Pilih dari berbagai program beasiswa yang sesuai dengan kebutuhan pendidikan Anda.
                                Temukan yang tepat untuk masa depan
                                Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
