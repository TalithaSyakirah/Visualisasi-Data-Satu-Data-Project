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
        Schema::create('bekerjamenurutlapanganusahas', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->decimal('pertanian_kehutanan_perikanan', 5, 2);
            $table->decimal('pertambangan_penggalian', 5, 2);
            $table->decimal('industri', 5, 2);
            $table->decimal('listrik_gas_air', 5, 2);
            $table->decimal('konstruksi', 5, 2);
            $table->decimal('perdagangan_akomodasi', 5, 2);
            $table->decimal('transportasi_komunikasi', 5, 2);
            $table->decimal('keuangan_real_estate', 5, 2);
            $table->decimal('jasa_kemasyarakatan_lainnya', 5, 2);
            $table->decimal('jumlah', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bekerjamenurutlapanganusahas');
    }
};
