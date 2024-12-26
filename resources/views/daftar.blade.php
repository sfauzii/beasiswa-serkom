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


                        @livewire('scholarship-form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
