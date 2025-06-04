<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Category;
use App\Models\Ingredient;
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
        $categorias = Category::all();
        $ingredientes = Ingredient::orderBy('name')->get();
        return view('recipes.create', compact('categorias', 'ingredientes'));
    }

    public function show(Recipe $receta)
    {
        // $ingrediente=Ingredient::find($id);
        return view('recipes.show', compact('receta'));
    }

    # se crea un Form Request para centralizar las reglas de validacion
    # php artisan make:request ModeloRequest
    public function store(RecipeRequest $request)
    {
       // dd($request->ingredients);
        $receta = Recipe::create($request->except('ingredients')); //que guarde todo menos los ingredientes

        //previo filtrado para solo almacenar aquellos que tienen una cantidad
        $ingredientesValidos = array_filter(
            $request->input('ingredients', []),
            fn($data) => !empty($data['amount'])
        ); 
        $receta->ingredients()->sync($ingredientesValidos); //teniendo en cuenta como viene del formulario

        
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
