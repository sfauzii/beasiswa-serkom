<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap pendaftar
            $table->string('nama'); // Nama pendaftar
            $table->string('email'); // Email pendaftar
            $table->string('no_hp'); // Nomor HP pendaftar
            $table->integer('semester'); // Semester pendaftar
            $table->float('ipk'); // IPK pendaftar
            $table->string('jenis_beasiswa'); // Jenis beasiswa yang didaftar
            $table->string('berkas'); // Berkas yang diunggah pendaftar
            $table->string('status_ajuan')->default('belum di verifikasi'); // Status ajuan beasiswa
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
