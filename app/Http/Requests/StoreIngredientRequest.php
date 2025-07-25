<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreIngredientRequest extends FormRequest
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
        $ingredienteId = $this->route('ingredients');
        return [
            'name' => [
                'required',
                'min:3',
                'max:50',
                Rule::unique('ingredients', 'name')->ignore($ingredienteId) //solo se especifica para aquellos campos que son unicos, al momento de editarlos
            ]
        ];
    }
}