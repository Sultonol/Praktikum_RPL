<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';
    protected $primaryKey = 'reservasi_id';


    protected $fillable = [
        'user_id',
        'jadwal_id',
        'kursi_id',
        'kode_tiket',
        'harga',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jadwal()
    {
        return $this->belongsTo(JadwalTayang::class, 'jadwal_id', 'jadwal_id');
    }

    public function kursi()
    {
        return $this->belongsTo(Kursi::class, 'kursi_id', 'kursi_id');
    }

    public function pembayaran(){
        return $this->hasOne(Pembayaran::class, 'reservasi_id', 'reservasi_id');
    }
}
