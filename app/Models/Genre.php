<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Genre extends Model
{
    use HasFactory;
    protected $table = 'genre_id';
    protected $primaryKey = 'genre_id';

    protected $fillable = [
        'nama_genre',
    ];

    public function film(){
        return $this->hasMany(Film::class, 'genre_id', 'genre_id');
    }
}
