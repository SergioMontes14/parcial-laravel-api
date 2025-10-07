<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255|unique:categories,name,' . $this->category->id,
            'description' => 'sometimes|string|max:1000',
            'priority' => 'sometimes|integer|min:0',
            'status' => 'sometimes|boolean',
            'category_id' => 'sometimes|exists:categories,id',
            'barcode' => 'nullable|string|max:255',
        ];
    }
}