<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description', 'image_category'];

    //definimos la funcion que nos trae las recetas que pertenecen a una categoria
    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }

    protected function getImageUrlAttribute()
    {
        if (!$this->image_category) {
            return null;
        }

        // Si es una URL (http:// o https://)
        if (str_starts_with($this->image_category, 'http')) {
            return str_replace('http://', 'https://', $this->image_category);
        }

        // Si es una ruta local
        return asset('storage/' . $this->image_category);
    }
}
