<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $receta = Recipe::all();
        return view('recipes.index', compact('receta'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function show(Recipe $receta)
    {
       // $ingrediente=Ingredient::find($id);
        return view('recipes.show', compact('receta'));
    }

    # se crea un Form Request para centralizar las reglas de validacion
    # php artisan make:request UpdateCategoryRequest
    public function store(RecipeRequest $request)
    {
        $ingrediente = Recipe::create($request->all());

        return redirect()
            ->route('recipes.index')
            ->with('success', 'Se ha creado correctamente');
    }

    public function edit($id)
    {
        $receta = Recipe::find($id);
        //dd($categoria->id);
        return view('recipes.edit', compact('receta'));
    }

    public function update(RecipeRequest $request, $id)
    {
        $receta = Recipe::find($id);

        $receta->update($request->all());

        return redirect()
            ->route('recipes.index')
            ->with('success', "Se ha modificado correctamente");
    }

    public function destroy($id)
    {
        $receta = Recipe::find($id);
        $receta->delete();
        return redirect()
            ->route('recipes.index')
            ->with('success', "Se elimino el elemento");
    }
}
