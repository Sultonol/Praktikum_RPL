<?php

namespace Database\Seeders;

use App\Models\Kursi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KursiSeeder extends Seeder
{
    public function run(): void
    {
        $studioJumlah = 4;

        for ($studio_id = 1; $studio_id <= $studioJumlah; $studio_id++) {
            for ($row = 'A'; $row <= 'E'; $row++) {
                for ($num = 1; $num <= 8; $num++) {
                    Kursi::create([
                        'studio_id' => $studio_id,
                        'nomor_kursi' => $row . $num,
                        'status_kursi' => 'available'
                    ]);
                }
            }
        }
    }
}
