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
    protected $fillable = ['title', 'content', 'category_id'];
    use HasFactory;

    //definimos el método para obtener la categoria
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //definimos el metodo de la relacion muchos a muchos con ingredientes
    public function ingredients():BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)->withPivot('amount');
    }
}
