<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        $films = [
            [
                'judul' => 'Agak Laen',
                'durasi' => 100,
                'sinopsis' => 'Kisah seorang pemuda yang mencoba keluar dari zona nyaman hidupnya dan menghadapi perubahan besar yang menguji jati dirinya.',
                'sutradara' => 'Rizal Mantovani',
                'trailer' => 'https://www.youtube.com/watch?v=y7tZL3zjE_c',
            ],
            [
                'judul' => 'Bolehkah Sekali Saja Kumenangis',
                'durasi' => 120,
                'sinopsis' => 'Drama emosional tentang seseorang yang selama ini kuat menghadapi masalah, akhirnya menemukan keberanian untuk menangis dan melepas beban hati.',
                'sutradara' => 'Hanung Bramantyo',
                'trailer' => 'https://www.youtube.com/watch?v=F_t6yo-j4QA',
            ],
            [
                'judul' => 'Jendela Seribu Sungai',
                'durasi' => 95,
                'sinopsis' => 'Sebuah cerita misteri yang membawa penonton menyusuri kisah keluarga yang hidup di desa penuh legenda dan rahasia sungai.',
                'sutradara' => 'Timo Tjahjanto',
                'trailer' => 'https://www.youtube.com/watch?v=9UBvBnxAm4c',
            ],
            [
                'judul' => 'Gundala',
                'durasi' => 110,
                'sinopsis' => 'Adaptasi pahlawan super Indonesia yang berjuang melawan kejahatan demi melindungi kota dan warganya dari ancaman kegelapan.',
                'sutradara' => 'Anggy Umbara',
                'trailer' => 'https://www.youtube.com/watch?v=SdAhF3NYvk4',
            ],
            [
                'judul' => 'Ketika Berhenti Disini',
                'durasi' => 130,
                'sinopsis' => 'Sebuah drama romantis tentang dua jiwa yang bertemu di persimpangan hidup dan harus memutuskan apakah mereka melanjutkan perjalanan bersama atau berpisah.',
                'sutradara' => 'Joko Anwar',
                'trailer' => 'https://www.youtube.com/watch?v=Nvms5XJ50rw',
            ],
            [
                'judul' => 'Siksa Neraka',
                'durasi' => 105,
                'sinopsis' => 'Film horor yang menggambarkan teror dari dunia lain, di mana seorang korban harus berjuang melawan siksa neraka yang nyata dan mengerikan.',
                'sutradara' => 'Rocky Soraya',
                'trailer' => 'https://www.youtube.com/watch?v=Q3bWmyvyA-I',
            ],
            [
                'judul' => 'Pabrik Gula Uncut',
                'durasi' => 112,
                'sinopsis' => 'Dokumenter yang mengungkap sisi gelap industri gula di Indonesia, penuh intrik, korupsi, dan perjuangan para pekerja.',
                'sutradara' => 'Garin Nugroho',
                'trailer' => 'https://www.youtube.com/watch?v=Uvp2ZBK7Vnc',
            ],
            [
                'judul' => 'Pabrik Gula',
                'durasi' => 128,
                'sinopsis' => 'Drama keluarga yang berlatar di pabrik gula tua, mengisahkan perselisihan dan rekonsiliasi di antara generasi yang berbeda.',
                'sutradara' => 'Ifa Isfansyah',
                'trailer' => 'https://www.youtube.com/watch?v=fHhMMGvZ81w',
            ],
            [
                'judul' => 'Petaka Gunung Gede',
                'durasi' => 115,
                'sinopsis' => 'Thriller petualangan tentang sekelompok pendaki yang menghadapi bencana alam dan rahasia kelam di Gunung Gede.',
                'sutradara' => 'Upi Avianto',
                'trailer' => 'https://www.youtube.com/watch?v=P-6STU_kfaU',
            ],
            [
                'judul' => 'Sekawan Limo',
                'durasi' => 123,
                'sinopsis' => 'Kisah persahabatan lima orang yang selalu bersama menghadapi suka dan duka kehidupan di kota besar.',
                'sutradara' => 'Riri Riza',
                'trailer' => 'https://www.youtube.com/watch?v=ERZncVUuKlk',
            ],
            [
                'judul' => 'It Begins',
                'durasi' => 108,
                'sinopsis' => 'Awal dari sebuah saga epik di mana dunia berada di ambang kehancuran dan pahlawan baru harus bangkit.',
                'sutradara' => 'Mouly Surya',
                'trailer' => 'https://www.youtube.com/watch?v=xKJmEC5ieOk',
            ],
            [
                'judul' => 'Pat Rung phuong Nam',
                'durasi' => 97,
                'sinopsis' => 'Drama budaya yang menyoroti kehidupan suku di pedalaman, penuh dengan tradisi, konflik, dan harapan.',
                'sutradara' => 'Ari Sihasale',
                'trailer' => 'https://www.youtube.com/watch?v=hktzirCnJmQ',
            ],
            [
                'judul' => '3 Body Problem',
                'durasi' => 118,
                'sinopsis' => 'Adaptasi fiksi ilmiah yang mengisahkan pertemuan umat manusia dengan peradaban alien dalam situasi yang penuh teka-teki.',
                'sutradara' => 'Fajar Nugros',
                'trailer' => 'https://www.youtube.com/watch?v=SdvzhCL7vIA',
            ],
            [
                'judul' => '3 Body Problem 2',
                'durasi' => 102,
                'sinopsis' => 'Kelanjutan kisah penuh ketegangan dan pengungkapan rahasia besar dari peradaban asing yang mengancam bumi.',
                'sutradara' => 'Awi Suryadi',
                'trailer' => 'https://www.youtube.com/watch?v=1Yl8u4TxEWo',
            ],
            [
                'judul' => 'Youth',
                'durasi' => 109,
                'sinopsis' => 'Film coming-of-age yang menggambarkan perjuangan dan pencarian jati diri para remaja dalam menghadapi dunia modern.',
                'sutradara' => 'Dinna Jasanti',
                'trailer' => 'https://www.youtube.com/watch?v=-T7CM4di_0c',
            ],
            [
                'judul' => 'Teka Teki Tika',
                'durasi' => 125,
                'sinopsis' => 'Film thriller misteri tentang seorang detektif wanita yang memecahkan kasus rumit dengan teka-teki membingungkan.',
                'sutradara' => 'Angga Dwimas Sasongko',
                'trailer' => 'https://www.youtube.com/watch?v=4KYRM857Fdw',
            ],
            [
                'judul' => 'Ghost Writer 2',
                'durasi' => 101,
                'sinopsis' => 'Sekuel horor tentang penulis yang dihantui oleh sosok misterius saat mencoba menyelesaikan novel terakhirnya.',
                'sutradara' => 'Lukman Sardi',
                'trailer' => 'https://www.youtube.com/watch?v=LHGixibzAEU',
            ],
            [
                'judul' => 'Kuntil Pocong',
                'durasi' => 99,
                'sinopsis' => 'Kisah horor klasik tentang pocong yang kembali mengganggu sebuah desa kecil dengan misteri dan kutukan lama.',
                'sutradara' => 'Sabrina Rochelle Kalangie',
                'trailer' => 'https://www.youtube.com/watch?v=KhDS7vGTBpY',
            ],
            [
                'judul' => 'Musaranas',
                'durasi' => 117,
                'sinopsis' => 'Drama perjuangan seorang petani melawan sistem yang menindas di era modernisasi pertanian.',
                'sutradara' => 'Ismail Basbeth',
                'trailer' => 'https://www.youtube.com/watch?v=_EzgIFPYOjk',
            ],
            [
                'judul' => 'Hangout',
                'durasi' => 122,
                'sinopsis' => 'Komedi ringan tentang sekelompok sahabat yang selalu berkumpul dan menghadapi masalah sehari-hari dengan canda dan tawa.',
                'sutradara' => 'Yosep Anggi Noen',
                'trailer' => 'https://www.youtube.com/watch?v=ezsFJQ9h_44',
            ],
        ];

        foreach ($films as $index => $film) {
            DB::table('film')->insert([
                'genre_id' => rand(1, 6),
                'judul' => $film['judul'],
                'durasi' => $film['durasi'],
                'sinopsis' => $film['sinopsis'],
                'sutradara' => $film['sutradara'],
                'trailer' => $film['trailer'],
                'poster' => 'img/gambar' . ($index + 1) . '.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
