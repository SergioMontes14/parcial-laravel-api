<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'required|string|max:1000',
            'priority' => 'required|integer|min:0',
            'status' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de la categoría es obligatorio',
            'name.unique' => 'Ya existe una categoría con este nombre',
            'description.required' => 'La descripción es obligatoria',
            'priority.required' => 'La prioridad es obligatoria',
            'status.required' => 'El estado es obligatorio',
        ];
    }
}