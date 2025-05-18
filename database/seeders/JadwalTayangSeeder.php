<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalTayangSeeder extends Seeder
{
    public function run(): void
    {
        $jadwalTayangs = [];

        for ($bioskopId = 1; $bioskopId <= 5; $bioskopId++) {
            for ($studioNum = 1; $studioNum <= 4; $studioNum++) {
                for ($filmId = 1; $filmId <= 20; $filmId++) {
                    $tanggal = now()->addDays(rand(0, 10))->format('Y-m-d');
                    $jam = rand(11, 21) . ':00:00'; 
                    $harga = rand(30000, 55000); 

                    $jadwalTayangs[] = [
                        'bioskop_id' => $bioskopId,
                        'studio_id' => ($bioskopId - 1) * 4 + $studioNum, 
                        'film_id' => $filmId,
                        'tanggal' => $tanggal,
                        'jam_tayang' => $jam,
                        'harga' => $harga,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }
        }

        DB::table('jadwal_tayang')->insert($jadwalTayangs);
    }
}
