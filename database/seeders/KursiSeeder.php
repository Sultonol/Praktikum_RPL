<?php

namespace Database\Seeders;

use App\Models\Kursi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KursiSeeder extends Seeder
{
    public function run(): void
    {
        // Kursi::query()->delete();
        //  DB::statement('ALTER TABLE kursi AUTO_INCREMENT = 1');
        $studioJumlah = 10;

        for ($studio_id = 1; $studio_id <= $studioJumlah; $studio_id++) {
            for ($row = 'A'; $row <= 'E'; $row++) {
                for ($num = 1; $num <= 10; $num++) {
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
