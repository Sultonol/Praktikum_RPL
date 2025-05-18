<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bioskop extends Model
{
    use HasFactory;

    
    protected $table = 'bioskop';
    protected $primaryKey = 'bioskop_id';

    protected $fillable = [
        'nama_bioskop',
        'alamat',
        'kota'
    ];

    public function studio()
    {
        return $this->hasMany(Studio::class, 'bioskop_id', 'bioskop_id');
    }
}
