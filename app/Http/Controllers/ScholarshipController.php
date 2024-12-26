<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

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
}
