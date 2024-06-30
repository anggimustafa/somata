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
        Schema::create('postingan_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->foreignId('kategori_id');
            $table->foreignId('organisasi_id');
            $table->date('tanggal_pembukaan_pendaftaran');
            $table->date('tanggal_penutupan_pendaftaran');
            $table->text('isi');
            $table->string('url_gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_postingan_pendaftaran');
    }
};
