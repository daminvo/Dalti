<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'slug_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:1',
            'duration' => 'required|integer|min:1',
            'service_category_id' => 'required|exists:service_categories,id',
            'is_active' => 'boolean',
            'settings' => 'nullable|array',
        ];
    }

    public function attributes()
    {
        return [
            'service_category_id' => 'category'
        ];
    }
}
