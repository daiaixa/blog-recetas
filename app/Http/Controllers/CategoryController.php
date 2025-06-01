<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

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

    public function show(Category $categoria)
    {
        return view('categories.show', compact('categoria'));
    }

    # se crea un Form Request para centralizar las reglas de validacion
    # php artisan make:request UpdateCategoryRequest
    public function store(UpdateConfigRequest $request)
    {
        $categoria = Category::create($request->all());

        return redirect()
            ->route('categories.index')
            ->with('success', "Se ha creado correctamente");
        //aca debe hacer la persistencia
    }

    public function edit(Category $categ)
    {
        return view('categories.edit', compact('categ'));
    }

    public function update(Request $request, Category $categoria)
    {
        $categoria->update($request->all());

        return redirect()
            ->route('categories.index')
            ->with('success', "Se ha modificado correctamente");
    }

    public function destroy(Category $categoria)
    {
        $categoria->delete();
        return redirect()
            ->route('categories.index')
            ->with('success', "Se elimino el elemento");
    }
}
