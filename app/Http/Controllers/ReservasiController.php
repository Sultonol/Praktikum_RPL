<?php

namespace App\Http\Controllers;

use App\Models\JadwalTayang;
use App\Models\Kursi;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ReservasiController extends Controller
{
    public function pilihKursi($jadwal_id)
    {
        $jadwal = JadwalTayang::with(['film', 'studio.bioskop'])->findOrFail($jadwal_id);
        $kursis = Kursi::where('studio_id', $jadwal->studio_id)->get();
        $reservedKursiIds = Reservasi::where('jadwal_id', $jadwal_id)
            ->whereIn('status_reservasi', ['pending', 'paid'])
            ->pluck('kursi_id')
            ->toArray();

        return view('reservasi', compact('jadwal', 'kursis', 'reservedKursiIds'));
    }

    public function simpanReservasi(Request $request)
    {
        $validated = $request->validate([
            'jadwal_id' => 'required|exists:jadwal_tayang,jadwal_id',
            'kursi_id' => 'required|array',
            'kursi_id.*' => 'exists:kursi,kursi_id',
            'metode_pembayaran' => 'required|string',
        ]);

        $jadwal = JadwalTayang::findOrFail($validated['jadwal_id']);
        $hargaFix = $jadwal->harga < 40000 ? 35000 : 45000;
        $kursiSudahDipesan = Reservasi::where('jadwal_id', $validated['jadwal_id'])
            ->whereIn('kursi_id', $validated['kursi_id'])
            ->whereIn('status_reservasi', ['pending', 'paid'])
            ->exists();

        if ($kursiSudahDipesan) {
            return redirect()->back()->withErrors(['kursi_id' => 'Salah satu atau lebih kursi sudah dipesan oleh pengguna lain. Silakan pilih kursi lain.']);
        }

        $reservasiIds = [];

        foreach ($validated['kursi_id'] as $kursiId) {
            $kodeTiket = 'TKT-' . strtoupper(Str::random(8));

            $reservasi = Reservasi::create([
                'user_id' => Auth::id(),
                'jadwal_id' => $jadwal->jadwal_id,
                'kursi_id' => $kursiId,
                'harga' => $hargaFix,
                'kode_tiket' => $kodeTiket,
                'status_reservasi' => 'pending', 
                'waktu_reservasi' => Carbon::now(), 
            ]);

            $reservasi->pembayaran()->create([
                'metode_pembayaran' => $validated['metode_pembayaran'],
                'jumlah_pembayaran' => $hargaFix,
                'status_pembayaran' => 'pending',
            ]);

            $reservasiIds[] = $reservasi->reservasi_id;
        }
        return redirect()->route('pembayaran', ['reservasi_id' => implode(',', $reservasiIds)]);

    }
}
