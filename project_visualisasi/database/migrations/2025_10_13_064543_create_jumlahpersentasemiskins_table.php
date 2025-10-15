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
        Schema::create('jumlahpersentasemiskins', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('garis_kemiskinan');
            $table->decimal('jumlah_penduduk_miskin',10,2);
            $table->decimal('persentase_penduduk_miskin', 5, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlahpersentasemiskins');
    }
};
