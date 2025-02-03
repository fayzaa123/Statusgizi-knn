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
        Schema::create('dataset', function (Blueprint $table) {
            $table->id('id_balita'); // Primary key
            $table->string('nama', 50); // Nama balita
            $table->integer('usia'); // Usia balita
            $table->string('jenis_kelamin', 10); // Jenis kelamin (Laki-laki/Perempuan)
            $table->decimal('berat', 5, 2); // Berat badan dengan 2 angka desimal
            $table->decimal('tinggi', 5, 2); // Tinggi badan dengan 2 angka desimal
            $table->string('status_gizi', 20); // Status gizi (misal: Baik, Buruk)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataset');
    }
};
