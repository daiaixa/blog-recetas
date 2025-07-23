<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $recetasRandom = Recipe::inRandomOrder()->limit(5)->get();

        $recetasTodas = Recipe::all();

        return view('welcome', compact('recetasRandom', 'recetasTodas'));
    }
}
