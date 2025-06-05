<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class RecipeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $recipes_id= $this->route('recipe');
        
        return [
            'title' => [
                'required',
                'min:5',
                'max:50',
                Rule::unique('recipes', 'title')->ignore($recipes_id) //solo se especifica para aquellos campos que son unicos, al momento de editarlos
            ],
            'content' => 'required|min:5|max:250',
            'category_id' => 'required|integer|exists:categories,id' //exists:categories,id comprueba que el id se encuentre en la tabla categorias
        ];
    }


    //Laravel permite agregar validaciones adicionales y personalizadas después de las reglas normales usando este método.
    //valida que se haya seleccionado al menos un ingrediente y su cantidad
    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) { //“Después de correr las validaciones normales, ejecutá esta función anónima.”
            $ingredientes = $this->input('ingredients', []);  //Esto recoge el array que llega del formulario con los ingredientes y sus cantidades. Si no existe, se define como un array vacío ([]).

            // Filtramos los que tienen cantidad no vacía
            $validos = array_filter($ingredientes, function ($item) {
                return !empty($item['amount']);
            });
            if (empty($validos)) {
                $validator->errors()->add('ingredients', 'Debe ingresar al menos un ingrediente con su cantidad.');
            }
        });
    }
}
