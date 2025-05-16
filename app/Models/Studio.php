<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $table = 'studio';
    protected $primaryKey = 'studio_id';


    protected $fillable = [
        'bioskop_id',
        'nomor_studio',
        'kapasitas_kursi',
    ];

    public function bioskop()
    {
        return $this->belongsTo(Bioskop::class, 'bioskop_id', 'bioskop_id');
    }

    public function jadwalTayang()
    {
        return $this->hasMany(JadwalTayang::class, 'studio_id', 'studio_id');
    }
}

