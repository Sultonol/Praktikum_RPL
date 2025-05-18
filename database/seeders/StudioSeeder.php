<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studios = [];

        for ($bioskopId = 1; $bioskopId <= 5; $bioskopId++) {
            for ($studioNum = 1; $studioNum <= 4; $studioNum++) {
                $studios[] = [
                    'bioskop_id' => $bioskopId,
                    'nomor_studio' => "Studio {$studioNum}",
                    'kapasitas_kursi' => rand(80, 150),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }
        DB::table('studio')->insert($studios);
    }
}
