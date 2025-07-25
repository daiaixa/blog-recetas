<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //para proteccion de loggeo
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
        $categoriaId = $this->route('category');

        return [
            'name' => [
                'required',
                'min:3',
                'max:50',
                Rule::unique('categories', 'name')->ignore($categoriaId)
            ]
        ];
        // Solo valida la imagen si es creación (no en edición)
        if ($this->isMethod('post')) {
            $rules['image_category'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['image_category'] = 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        return $rules;
    }
}
 