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
        $table->string('kode_tiket')->unique()->after('status_pemesanan');
        $table->integer('harga')->after('kode_tiket');
        $table->string('metode_pembayaran')->nullable()->after('harga');
        $table->timestamp('waktu_pemesanan')->useCurrent()->after('metode_pembayaran');
    });
}

public function down(): void
{
    Schema::table('reservasi', function (Blueprint $table) {
        $table->dropColumn(['kode_tiket', 'harga', 'metode_pembayaran', 'waktu_pemesanan']);
    });
}
};
