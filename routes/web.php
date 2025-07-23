<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeController;
use App\Http\Requests\RecipeRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('bienvenida');

Route::resource('categories', CategoryController::class);

Route::resource('ingredients', IngredientController::class)->except('show');

Route::resource('recipes', RecipeController::class);

Route::get('recipes/category/{category}', [RecipeController::class, 'showByCategory']) ->name('recipes.category'); 
