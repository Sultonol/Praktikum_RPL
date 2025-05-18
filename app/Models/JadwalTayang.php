<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalTayang extends Model
{
    use HasFactory;
    protected $table =  'jadwal_tayang';
    protected $primaryKey = 'jadwal_id';

    protected $fillable = [
        'film_id',
        'studio_id',
        'jam_tayang',
        'tanggal',
    ];

    public function film(){
        return $this->belongsTo(Film::class, 'film_id', 'film_id');
    }

    public function studio(){
        return $this->belongsTo(Studio::class, 'studio_id', 'studio_id');
    }
}
