<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BioskopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bioskop')->insert([
            [
                'nama_bioskop' => 'Cinemaxx Surabaya',
                'alamat' => 'Jl. Basuki Rahmat No. 23, Surabaya, Jawa Timur',
                'kota' => 'Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bioskop' => 'Galaxy Cinema Malang',
                'alamat' => 'Jl. Ijen No. 17, Malang, Jawa Timur',
                'kota' => 'Malang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bioskop' => 'Blitz Megaplex Kediri',
                'alamat' => 'Jl. Brawijaya No. 10, Kediri, Jawa Timur',
                'kota' => 'Kediri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bioskop' => 'Transmart Cinema Jember',
                'alamat' => 'Jl. Gajah Mada No. 55, Jember, Jawa Timur',
                'kota' => 'Jember',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bioskop' => 'Lotte Cinema Banyuwangi',
                'alamat' => 'Jl. Ahmad Yani No. 78, Banyuwangi, Jawa Timur',
                'kota' => 'Banyuwangi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
