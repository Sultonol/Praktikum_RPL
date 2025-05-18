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
        Schema::table('reservasi', function (Blueprint $table) {
            $table->dropColumn(['metode_pembayaran', 'status_pemesanan', 'waktu_pemesanan']);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
