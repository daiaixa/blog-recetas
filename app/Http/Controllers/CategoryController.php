<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categorias = Category::all();
        return view('categories.index', compact('categorias'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function show($id)
    {
        $categoria=Category::find($id);
        return view('categories.show', compact('categoria'));
    }

    # se crea un Form Request para centralizar las reglas de validacion
    # php artisan make:request UpdateCategoryRequest
    public function store(UpdateCategoryRequest $request)
    {
        
        if ($request->hasFile('image_category')) {
            $imagePath = $request->file('image_category')->store('categorias', 'public');
        } else {
            $imagePath = null;
        }

        // 'name', 'description', 'image_category'
        $categoria = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_category' => $imagePath,
        ]);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Se ha creado correctamente');
    }

    public function edit($id)
    {
        $categoria = Category::find($id);
        //dd($categoria->id);
        return view('categories.edit', compact('categoria'));
    }

    public function update(UpdateCategoryRequest $request, $categoria)
    {

        $categoria = Category::find($categoria);

        $imagePath = null;
        if ($request->hasFile('image_category')) {
            $imagePath = $request->file('image_category')->store('categorias', 'public');
        }
        $categoria->image_category = $imagePath; //asignamos la ruta de la imagen a la categoria
        $categoria->update($request->all());


        return redirect()
            ->route('categories.index')
            ->with('success', "Se ha modificado correctamente");
    }

    public function destroy($id)
    {
        $categoria = Category::find($id);
        $categoria->delete();
        return redirect()
            ->route('categories.index')
            ->with('success', "Se elimino el elemento");
    }
}
