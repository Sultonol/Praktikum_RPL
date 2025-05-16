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
        Schema::create('jadwal_tayang', function (Blueprint $table) {
            $table->bigIncrements('jadwal_id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('studio_id');
            $table->time('jam_tayang');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('film_id')->references('film_id')->on('film')->onDelete('cascade');
            $table->foreign('studio_id')->references('studio_id')->on('studio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_tayang');
    }
};
