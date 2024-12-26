@extends('layouts.app')

@section('title', 'Grafik Beasiswa')

@section('content')
    <div class="container-fluid px-lg-5 py-lg-5 grafik">
        <div class="row">
            <div class="col-12">

                <div class="bg-white p-4 rounded-full card-grafik">
                    <div style="height: 80vh;">
                        <!-- Elemen canvas untuk menampilkan grafik -->
                        <canvas id="beasiswaChart"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('beasiswaChart').getContext('2d');
            const beasiswaChart = new Chart(ctx, {
                type: 'polarArea', // Jenis grafik Polar Area
                data: {
                    labels: @json($beasiswaData->pluck('jenis_beasiswa')), // Label untuk jenis beasiswa
                    datasets: [{
                        label: 'Jumlah Beasiswa', // Label dataset
                        data: @json($beasiswaData->pluck('total')), // Data jumlah beasiswa
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ], // Warna latar belakang untuk setiap data
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ], // Warna border untuk setiap data
                        borderWidth: 1 // Ketebalan border
                    }]
                },
                options: {
                    responsive: true, // Grafik responsif
                    maintainAspectRatio: false, // Tidak mempertahankan rasio aspek
                    plugins: {
                        legend: {
                            position: 'top' // Posisi legenda di atas
                        },
                        title: {
                            display: true, // Menampilkan judul
                            text: 'Statistik Jenis Beasiswa' // Teks judul
                        }
                    }
                }
            });
        });
    </script>
@endsection
