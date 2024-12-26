<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScholarshipController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function hasil()
    {

        $scholarships = Scholarship::all();

        return view('hasil', compact('scholarships'));
    }

    public function grafik()
    {

        // Ambil data jumlah jenis beasiswa
        $beasiswaData = Scholarship::select('jenis_beasiswa', DB::raw('count(*) as total'))
            ->groupBy('jenis_beasiswa')
            ->get();

        return view('grafik', compact('beasiswaData'));
    }
}
