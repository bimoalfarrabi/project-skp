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
        Schema::create('indikator_keberhasilans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matriks_id')->constrained()->cascadeOnDelete();
            $table->text('teks_indikator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator_keberhasilans');
    }
};
