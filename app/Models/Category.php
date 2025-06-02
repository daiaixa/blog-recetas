<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    //metodo de validacion

    //para que en la url no sea el id, sino el nombre de la categoria
    public function getRouteKeyName()
    {
        return 'name';
    }
}
