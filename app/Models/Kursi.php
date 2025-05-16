<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    use HasFactory;

    protected $table = 'kursi';
    protected $primaryKey = 'kursi_id';


    protected $fillable = [
        'studio_id',
        'nomor_kursi',
        'status_kursi',
    ];

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'studio_id', 'studio_id');
    }

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'kursi_id', 'kursi_id');
    }
}
