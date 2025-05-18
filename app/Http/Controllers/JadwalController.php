<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\JadwalTayang;

class JadwalController extends Controller
{

    public function index(Request $request)
    {
        $film_id = $request->query('film_id');

        if(!$film_id) {
            return redirect()->route('film.index')->with('error', 'Film tidak ditemukan');
        }


    $jadwals = JadwalTayang::with(['film', 'studio.bioskop'])
                ->when($request->film_id, function ($query) use ($request) {
                    $query->where('film_id', $request->film_id);
                })
                ->get();

    return view('jadwal', compact('jadwals'));
}
}
