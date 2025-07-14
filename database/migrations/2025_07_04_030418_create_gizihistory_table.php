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
        Schema::create('gizihistory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balita_id')->constrained()->onDelete('cascade'); // Relasi ke balita
            $table->decimal('berat', 5, 2); // Berat badan dengan 2 angka desimal
            $table->decimal('tinggi', 5, 2); // Tinggi badan dengan 2 angka desimal
            $table->string('status_gizi');
            $table->foreignId('orangtua_id')->constrained()->onDelete('cascade'); // Relasi ke orangtua
            $table->date('tanggal_ukur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gizihistory');
    }
};
