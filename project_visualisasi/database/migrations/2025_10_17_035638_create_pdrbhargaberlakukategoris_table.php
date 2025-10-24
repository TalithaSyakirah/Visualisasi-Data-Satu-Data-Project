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
        Schema::create('pdrbhargaberlakukategoris', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->decimal('pertanian_perikanan', 15, 2);
            $table->decimal('pertambangan_penggalian', 15, 2);
            $table->decimal('industri_pengolahan', 15, 2);
            $table->decimal('listrik_gas', 15, 2);
            $table->decimal('air_sampah', 15, 2);
            $table->decimal('konstruksi', 15, 2);
            $table->decimal('perdagangan_reparasi', 15, 2);
            $table->decimal('transportasi_pergudangan', 15, 2);
            $table->decimal('akomodasi_makanan', 15, 2);
            $table->decimal('informasi_komunikasi', 15, 2);
            $table->decimal('jasa_keuangan_asuransi', 15, 2);
            $table->decimal('real_estate', 15, 2);
            $table->decimal('jasa_perusahaan', 15, 2);
            $table->decimal('administrasi_sosial', 15, 2);
            $table->decimal('jasa_pendidikan', 15, 2);
            $table->decimal('jasa_kesehatan_sosial', 15, 2);
            $table->decimal('jasa_lainnya', 15, 2);
            $table->decimal('jumlah', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdrbhargaberlakukategoris');
    }
};
