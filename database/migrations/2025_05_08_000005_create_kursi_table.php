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
        Schema::create('kursi', function (Blueprint $table) {
            $table->id('kursi_id');
            $table->unsignedBigInteger('studio_id');
            $table->string('nomor_kursi');
            $table->string('status_kursi');
            $table->timestamps();

            $table->foreign('studio_id')->references('studio_id')->on('studio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursi');
    }
};
