<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;


class RecipeController extends Controller
{
    public function index()
    {
        $recetas = Recipe::all();
        return view('recipes.index', compact('recetas'));
    }

    public function create()
    {
        $categorias = Category::all();
        $ingredientes = Ingredient::orderBy('name')->get();
        return view('recipes.create', compact('categorias', 'ingredientes'));
    }

    public function show($id)
    {
        $receta = Recipe::find($id);

        $ingredientesReceta = [];

        foreach ($receta->ingredients as $ingrediente) {
            $ingredientesReceta[] = [
                'name' => $ingrediente->name,
                'amount' => $ingrediente->pivot->amount //pivot es el nombre de la tabla intermedia
            ];
        }

        return view('recipes.show', compact('receta', 'ingredientesReceta'));
    }

    public function showByCategory($idCategory)
    {

        $recetas = Recipe::where('category_id', $idCategory)->get();

        $categoria = Category::find($idCategory);

        return view('recipes.showByCategory', compact('recetas', 'categoria'));
    }


    # se crea un Form Request para centralizar las reglas de validacion
    # php artisan make:request ModeloRequest
    public function store(RecipeRequest $request)
    {

        dd($request->file('image_recipe')->isValid());

        if ($request->hasFile('image_recipe')) {
            $imagePath = $request->file('image_recipe')->store('recetas', 'public');
        } else {
            $imagePath = null;
        }

        $receta = Recipe::create([
            ...$request->except(['ingredients', 'image_recipe']), // Excluye estos
            'image_recipe' => $imagePath // Asigna la ruta correcta
        ]);

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
        //traer la receta
        $receta = Recipe::find($id);
        $ingredientes = Ingredient::orderBy('name')->get();
        $categorias = Category::all();
        $categoria_receta = Category::find($receta->category_id);

        return view('recipes.edit', compact('categorias', 'categoria_receta', 'ingredientes', 'receta'));
    }

    public function update(RecipeRequest $request, $id)
    {


        $receta = Recipe::find($id);
        //FILTRAR AQUELLOS QUE ESTEN NULOS 
        $ingredientesValidos = array_filter(
            $request->input('ingredients', []),
            fn($data) => !empty($data['amount'])
        );

        $receta->ingredients()->sync($ingredientesValidos); //teniendo en cuenta como viene del formulario

        if ($request->hasFile('image_recipe')) {
            $imagePath = $request->file('image_recipe')->store('recetas', 'public');
        } else {
            $imagePath = null;
        }

        ['title', 'content', 'category_id', 'image_recipe'];
        $receta->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image_recipe' => $imagePath
        ]);

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
