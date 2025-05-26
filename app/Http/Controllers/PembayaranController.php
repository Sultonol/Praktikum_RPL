<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function show(Request $request)
    {
        $ids = explode(',', $request->reservasi_id);
        $reservasis = Reservasi::with(['pembayaran', 'jadwal.film', 'kursi', 'jadwal.studio.bioskop'])
            ->whereIn('reservasi_id', $ids)
            ->get();

        if ($reservasis->isEmpty()) {
            abort(404, 'Reservasi tidak ditemukan.');
        }

        $totalHarga = $reservasis->sum('harga');
        $metodePembayaran = $reservasis->first()->pembayaran->metode_pembayaran ?? 'tidak diketahui';

        return view('pembayaran', compact('reservasis', 'totalHarga', 'metodePembayaran'));
    }
}
