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
        Schema::create('tingkatpengangguranterbukas', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun')->unique();
            $table->decimal('tingkat_pengangguran_terbuka', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tingkatpengangguranterbukas');
    }
};
