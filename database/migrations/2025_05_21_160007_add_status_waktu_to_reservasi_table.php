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
            $table->enum('status_reservasi', ['pending', 'paid', 'cancelled'])->default('pending');
            $table->timestamp('waktu_reservasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservasi', function (Blueprint $table) {
             $table->dropColumn(['status_reservasi', 'waktu_reservasi']);
        });
    }
};
