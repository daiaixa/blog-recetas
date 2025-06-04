<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = ['name'];
    
    use HasFactory;


    //definimos el metodo de la relacion uchos a muchos con recetas
    public function recipes():BelongsToMany
    {
        return $this->belongsToMany(Recipe::class)->withPivot('amount'); //Con ->withPivot('cantidad') especificamos que hay un campo mas 
    }
}
