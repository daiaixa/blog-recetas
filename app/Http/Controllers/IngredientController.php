<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredientes = Ingredient::all();
        return view('ingredients.index', compact('ingredientes'));
    }

    public function create()
    {
        return view('ingredients.create');
    }

    public function show(Ingredient $ingrediente)
    {
       // $ingrediente=Ingredient::find($id);
        return view('ingredients.show', compact('ingrediente'));
    }

    # se crea un Form Request para centralizar las reglas de validacion
    # php artisan make:request UpdateCategoryRequest
    public function store(StoreIngredientRequest $request)
    {
        $ingrediente = Ingredient::create($request->all());

        return redirect()
            ->route('ingredients.index')
            ->with('success', 'Se ha creado correctamente');
    }

    public function edit($id)
    {
        $ingrediente = Ingredient::find($id);
        //dd($categoria->id);
        return view('ingredients.edit', compact('ingrediente'));
    }

    public function update(StoreIngredientRequest $request, $id)
    {
        $ingrediente = Ingredient::find($id);

        $ingrediente->update($request->all());

        return redirect()
            ->route('ingredients.index')
            ->with('success', "Se ha modificado correctamente");
    }

    public function destroy($id)
    {
        $ingrediente = Ingredient::find($id);
        $ingrediente->delete();
        return redirect()
            ->route('ingredients.index')
            ->with('success', "Se elimino el elemento");
    }
}
