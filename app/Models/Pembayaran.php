<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'pembayaran_id';

    protected $fillable = [
        'reservasi_id',
        'metode_pembayaran',
        'jumlah_pembayaran',
        'status_pembayaran',
    ];

    public function reservasi(){
        return $this->belongsTo(Reservasi::class, 'reservasi_id', 'reservasi_id');
    }
}
