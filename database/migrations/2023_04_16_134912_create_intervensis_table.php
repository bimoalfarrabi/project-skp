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
        Schema::create('intervensi', function (Blueprint $table) {
            $table->id();
            // $table->primary(['matriks_id','sasaranAtasan_id']);
            // $table->unsignedBigInteger('id_matriks');
            // $table->unsignedBigInteger('sasaranAtasan_id');
            // $table->foreign('id_matriks')->references('id')->on('matriks')->onDelete('cascade');
            // $table->foreign('sasaranAtasan_id')->references('id')->on('matriks')->onDelete('cascade');
            // $table->bigInteger('id_matriks');
            // $table->bigInteger('id_intervensi');
            // $table->unique(['id_matriks', 'id_intervensi']);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intervensis');
    }
};
