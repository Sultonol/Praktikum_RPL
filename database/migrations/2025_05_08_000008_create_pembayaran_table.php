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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('pembayaran_id');
            $table->unsignedBigInteger('reservasi_id');
            $table->string('metode_pembayaran');
            $table->decimal('jumlah_pembayaran', 15, 2);
            $table->string('status_pembayaran');
            $table->timestamps();

            $table->foreign('reservasi_id')->references('reservasi_id')->on('reservasi')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
