<?php

namespace App\Http\Controllers;

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
}
