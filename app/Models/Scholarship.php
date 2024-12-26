<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

        protected $fillable = [
        'nama', // Nama pendaftar
        'email', // Email pendaftar
        'no_hp', // Nomor HP pendaftar
        'semester', // Semester pendaftar
        'ipk', // IPK pendaftar
        'jenis_beasiswa', // Jenis beasiswa yang didaftar
        'berkas', // Berkas yang diunggah pendaftar
        'status_ajuan' // Status ajuan beasiswa
    ];
}
