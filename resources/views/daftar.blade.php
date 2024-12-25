@extends('layouts.app')

@section('content')
    <section class="details">
        <!-- Section Heading with Background Image -->
        <div class="details-background"></div>

        <!-- Content Section -->
        <div class="details-content">
            <div class="heading-content">
                <h1>Daftar Beasiswa</h1>
                <!-- <h3>Home > Car Details > Start Booking</h3> -->
            </div>


            <!-- Two Column Content Section -->
            <div class="content-columns">
                <!-- Left Column -->
                <div class="column-left">
                    <div class="card-form-booking">

                        <h4 class="details-title">Registrasi Beasiswa</h4>
                        <form>
                            <div class="form-group">
                                <label for="input-field">Masukkan Nama</label>
                                <div class="input-container">
                                    <img src="frontend/images/profile.svg" alt="Icon" class="input-icon">
                                    <input type="text" id="input-field" placeholder="Placeholder Text"
                                        class="form-input">
                                </div>
                                <label for="input-field">Masukkan Email</label>
                                <div class="input-container">
                                    <img src="frontend/images/sms.svg" alt="Icon" class="input-icon">
                                    <input type="email" id="input-field" placeholder="Placeholder Text"
                                        class="form-input">
                                </div>
                                <label for="input-field">Nomor HP</label>
                                <div class="input-container">
                                    <img src="frontend/images/call.svg" alt="Icon" class="input-icon">
                                    <input type="number" id="input-field" placeholder="Placeholder Text"
                                        class="form-input">
                                </div>
                                <label for="start-date">Semester saat ini</label>
                                <div class="input-container">
                                    <img src="frontend/images/teacher.svg" alt="Icon" class="input-icon">
                                    <select id="start-date" class="form-input">
                                        <option value="">Pilih Semester</option>
                                        <option value="2023-01-01">January 1, 2023</option>
                                        <option value="2023-02-01">February 1, 2023</option>
                                        <option value="2023-03-01">March 1, 2023</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <label for="input-field">IPK Terakhir</label>
                                <div class="input-container">
                                    <img src="frontend/images/medal-star.svg" alt="Icon" class="input-icon">
                                    <input type="text" id="input-field" placeholder="Placeholder Text"
                                        class="form-input">
                                </div>
                                <label for="start-date">Pilihan Beasiswa</label>
                                <div class="input-container">
                                    <img src="frontend/images/note-2.svg" alt="Icon" class="input-icon">
                                    <select id="start-date" class="form-input">
                                        <option value="">Pilih Beasiswa</option>
                                        <option value="2023-01-01">January 1, 2023</option>
                                        <option value="2023-02-01">February 1, 2023</option>
                                        <option value="2023-03-01">March 1, 2023</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <label for="file-upload">Upload Berkas Syarat</label>
                                <div class="input-container">
                                    <img src="frontend/images/folder.svg" alt="Icon" class="input-icon">
                                    <input type="file" id="file-upload" class="form-input">
                                </div>
                                <div class="buttons-container">
                                    <button class="button__about btn-get-started daftar">Daftar</button>
                                    <button class="button__about btn-learn-more daftar">Cancel</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
