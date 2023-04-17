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
            $table->unsignedInteger('intervensi_id');
            $table->foreign('intervensi_id')
            ->references('id')
            ->on('matriks');

            $table->unsignedInteger('sasaran_id');
            $table->foreign('sasaran_id')
            ->references('id')
            ->on('matriks');
            
            $table->timestamps();
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
