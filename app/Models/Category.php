<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];

    //definimos la funcion que nos trae las recetas que pertenecen a una categoria
    public function recipes():HasMany 
    {
        return $this->hasMany(Recipe::class);
    }

    
}
