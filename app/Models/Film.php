<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;
    
    protected $table = 'film';
    protected $primaryKey = 'film_id';

    protected $fillable = [
        'genre_id',
        'judul',
        'durasi',
        'sinopsis',
        'sutradara',
        'trailer'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id', 'genre_id');
    }

    public function jadwalTayang(){
        return $this->belongsTo(JadwalTayang::class, 'film_id', 'film_id');
    }
}
