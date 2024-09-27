<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
        return [
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:8',
            'price' => 'required|integer|min:1',
            'surface' => 'required|integer|min:10',
            'rooms' => 'required|integer|min:1',
            'bedrooms' => 'required|integer|min:0',
            'floor' => 'required|integer|min:0',
            'city' => 'required|string|min:3',
            'address' => 'required|string|min:5',
            'postal_code' => 'required|string|min:3',
            'sold' => 'required|boolean',
            'options' => 'required|array|exists:options,id',
        ];
    }
}
