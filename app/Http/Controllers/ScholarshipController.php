<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScholarshipController extends Controller
{
    public function home()
    {
        return view('home'); // Menampilkan halaman daftar home
    }

    public function daftar()
    {
        return view('daftar'); // Menampilkan halaman daftar beasiswa
    }

    public function hasil()
    {
        $scholarships = Scholarship::all(); // Mengambil semua data pendaftar beasiswa

        return view('hasil', compact('scholarships')); // Menampilkan halaman hasil dengan data pendaftar
    }

    public function grafik()
    {
        // Ambil data jumlah jenis beasiswa
        $beasiswaData = Scholarship::select('jenis_beasiswa', DB::raw('count(*) as total'))
            ->groupBy('jenis_beasiswa')
            ->get();

        return view('grafik', compact('beasiswaData')); // Menampilkan halaman grafik dengan data beasiswa
    }
}
