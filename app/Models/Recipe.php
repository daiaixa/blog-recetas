<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

//Receta
class Recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable = ['title', 'content', 'category_id', 'image_recipe'];
    use HasFactory;

    //definimos el método para obtener la categoria
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //definimos el metodo de la relacion muchos a muchos con ingredientes
    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)->withPivot('amount');
    }

    //se crea un accesor de las imagenes
    // app/Models/Recipe.php
    public function getImageUrlAttribute()
    {
        if (!$this->image_recipe) {
            return null;
        }

        // Si es una URL (http:// o https://)
        if (str_starts_with($this->image_recipe, 'http')) {
            return str_replace('http://', 'https://', $this->image_recipe);
        }

        // Si es una ruta local
        return asset('storage/' . $this->image_recipe);
    }
}
