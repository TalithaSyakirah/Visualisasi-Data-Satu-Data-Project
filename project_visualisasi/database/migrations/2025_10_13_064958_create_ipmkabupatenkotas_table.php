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
        Schema::create('ipmkabupatenkotas', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->decimal('kabupaten_sambas', 5, 2);
            $table->decimal('kabupaten_bengkayang', 5, 2);
            $table->decimal('kabupaten_landak', 5, 2);
            $table->decimal('kabupaten_mempawah', 5, 2);
            $table->decimal('kabupaten_sanggau', 5, 2);
            $table->decimal('kabupaten_ketapang', 5, 2);
            $table->decimal('kabupaten_sintang', 5, 2);
            $table->decimal('kabupaten_kapuas_hulu', 5, 2);
            $table->decimal('kabupaten_sekadau', 5, 2);
            $table->decimal('kabupaten_melawi', 5, 2);
            $table->decimal('kabupaten_kayong_utara', 5, 2);
            $table->decimal('kabupaten_kubu_raya', 5, 2);
            $table->decimal('kota_pontianak', 5, 2);
            $table->decimal('kota_singkawang', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ipmkabupatenkotas');
    }
};
