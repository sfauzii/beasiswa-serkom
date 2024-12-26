@extends('layouts.app')

@section('title', 'Grafik Beasiswa')

@section('content')
    <div class="container-fluid px-lg-5 py-lg-5 grafik">
        <div class="row">
            <div class="col-12">

                <div class="bg-white p-4 rounded-full card-grafik">
                    <div style="height: 80vh;">
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
                type: 'polarArea', // Mengubah jenis grafik menjadi Polar Area
                data: {
                    labels: @json($beasiswaData->pluck('jenis_beasiswa')),
                    datasets: [{
                        label: 'Jumlah Beasiswa',
                        data: @json($beasiswaData->pluck('total')),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top'
                        },
                        title: {
                            display: true,
                            text: 'Statistik Jenis Beasiswa'
                        }
                    }
                }
            });
        });
    </script>
@endsection
