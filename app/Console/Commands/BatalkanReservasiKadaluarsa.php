<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reservasi;
use Illuminate\Support\Carbon;

class BatalkanReservasiKadaluarsa extends Command
{
    protected $signature = 'reservasi:batalkan-kadaluarsa';
    protected $description = 'Membatalkan reservasi yang belum dibayar dalam 10 menit';

    public function handle()
    {
        $now = Carbon::now();

        // Cari reservasi yang status-nya 'pending' dan sudah lebih dari 10 menit
        $jumlah = Reservasi::where('status_reservasi', 'pending')
            ->where('waktu_reservasi', '<', $now->subMinutes(10))
            ->update(['status_reservasi' => 'cancelled']);

        // Tampilkan hasil di terminal
        $this->info("Reservasi Yang Dibatalkan: $jumlah");
    }
}
