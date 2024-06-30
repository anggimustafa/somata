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
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organisasi_id');
            $table->string('mahasiswa_nim');
            $table->text('motivasi')->nullable();
            $table->boolean('tahap_administrasi')->default(false);
            $table->boolean('tahap_wawancara')->default(false);
            $table->boolean('pendaftaran_selesai')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftar');
    }
};
