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
        Schema::create('ipmmenurutpembentuks', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->decimal('angka_harapan_hidup', 5, 2);
            $table->decimal('harapan_lama_sekolah', 5, 2);
            $table->decimal('rata_rata_lama_sekolah', 5, 2);
            $table->integer('pengeluaran_per_kapita');
            $table->decimal('indeks_pembangunan_manusia', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ipmmenurutpembentuks');
    }
};
