<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    
    public function run(): void
    {
     DB::table('genre')->insert([
         ['nama_genre' => 'Aksi', 'created_at' => now(), 'updated_at' => now()],
            ['nama_genre' => 'Drama', 'created_at' => now(), 'updated_at' => now()],
            ['nama_genre' => 'Komedi', 'created_at' => now(), 'updated_at' => now()],
            ['nama_genre' => 'Romantis', 'created_at' => now(), 'updated_at' => now()],
            ['nama_genre' => 'Horor', 'created_at' => now(), 'updated_at' => now()],
            ['nama_genre' => 'Animasi', 'created_at' => now(), 'updated_at' => now()],
     ]);  
    }
}
