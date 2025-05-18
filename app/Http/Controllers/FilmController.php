<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::with('genre')->paginate(20);
        return view('film', compact('films'));
    }
    public function dashboardFilms()
    {
        $films = Film::with('genre')->take(20)->get();
        return view('dashboard', compact('films'));
    }
}
