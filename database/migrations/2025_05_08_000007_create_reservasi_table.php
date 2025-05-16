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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id('reservasi_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->unsignedBigInteger('kursi_id');
            $table->string('status_pemesanan');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jadwal_id')->references('jadwal_id')->on('jadwal_tayang')->onDelete('cascade');
            $table->foreign('kursi_id')->references('kursi_id')->on('kursi')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
