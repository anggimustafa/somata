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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('nim_mahasiswa');
            $table->bigInteger('organisasi_id');
            $table->string('judul');
            $table->text('isi')->nullable();
            $table->string('grupWA')->nullable();
            $table->text('langkah')->nullable();
            $table->string('status');
            $table->string('tahap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};
