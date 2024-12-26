@extends('layouts.app')

@section('title', 'Hasil Pendaftar Beasiswa')


@section('content')
        <div class="container-fluid px-lg-5 py-lg-5 top-content-hasil">
            <!-- Header Kustom untuk Kartu -->
            <div class="row my-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center bg-white p-4 rounded-top border-bottom card-grafik">
                        <h4 class="mb-0 fw-bold text-dark">Daftar Pendaftar Beasiswa</h4>
                        <span class="badge bg-primary fs-6">Total: {{ $scholarships->count() }}</span>
                    </div>
                </div>
            </div>
    
            <!-- Pesan Sukses -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    
            <!-- Pesan Error -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
    
            <!-- Bagian Tabel -->
            <div class="row">
                <div class="col-12">
                    <div class="bg-white p-4 card-grafik">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="fw-semibold">#</th>
                                        <th scope="col" class="fw-semibold">Nama</th>
                                        <th scope="col" class="fw-semibold">Email</th>
                                        <th scope="col" class="fw-semibold">No HP</th>
                                        <th scope="col" class="fw-semibold">Semester</th>
                                        <th scope="col" class="fw-semibold">IPK</th>
                                        <th scope="col" class="fw-semibold">Jenis Beasiswa</th>
                                        <th scope="col" class="fw-semibold">Berkas</th>
                                        <th scope="col" class="fw-semibold">Status</th>
                                        <th scope="col" class="fw-semibold">Tanggal Daftar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($scholarships as $index => $scholarship)
                                        <tr>
                                            <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                                            <td>{{ $scholarship->nama }}</td> <!-- Nama pendaftar -->
                                            <td>{{ $scholarship->email }}</td> <!-- Email pendaftar -->
                                            <td>{{ $scholarship->no_hp }}</td> <!-- Nomor HP pendaftar -->
                                            <td>{{ $scholarship->semester }}</td> <!-- Semester pendaftar -->
                                            <td>{{ $scholarship->ipk }}</td> <!-- IPK pendaftar -->
                                            <td>
                                                <span class="badge rounded-pill
                                                @if ($scholarship->jenis_beasiswa === 'akademik') bg-primary
                                                @elseif($scholarship->jenis_beasiswa === 'non-akademik')
                                                    bg-success
                                                @else
                                                    bg-info @endif">
                                                    {{ ucfirst($scholarship->jenis_beasiswa) }}
                                                </span> <!-- Jenis beasiswa dengan warna sesuai jenis -->
                                            </td>
                                            <td>
                                                <a href="{{ Storage::url($scholarship->berkas) }}" target="_blank"
                                                    class="btn btn-sm btn-outline-primary lihat-btn">
                                                    <i class="bi bi-file-earmark-text me-1"></i>Lihat
                                                </a> <!-- Tombol untuk melihat berkas -->
                                            </td>
                                            <td>
                                                <span class="badge rounded-pill
                                                @if ($scholarship->status_ajuan === 'belum di verifikasi') bg-warning text-dark
                                                @elseif($scholarship->status_ajuan === 'diterima')
                                                    bg-success
                                                @else
                                                    bg-danger @endif">
                                                    {{ ucfirst($scholarship->status_ajuan) }}
                                                </span> <!-- Status ajuan dengan warna sesuai status -->
                                            </td>
                                            <td>{{ $scholarship->created_at->format('d M Y, H:i') }}</td> <!-- Tanggal daftar -->
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10">
                                                <div class="alert alert-info text-center my-3">
                                                    <i class="bi bi-info-circle me-2"></i>Belum ada data pendaftar beasiswa
                                                </div> <!-- Pesan jika belum ada data pendaftar -->
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
