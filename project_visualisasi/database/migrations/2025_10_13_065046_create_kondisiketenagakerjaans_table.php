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
        Schema::create('kondisiketenagakerjaans', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('angkatan_kerja');
            $table->integer('bukan_angkatan_kerja');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisiketenagakerjaans');
    }
};
