<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFranchiseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|regex:/^[0-9]{10}$/',
            'area' => 'required|string|max:255',
            'address' => 'required|string',
            'message' => 'nullable|string',
            'model_type' => 'required|in:Take Away,Dining',
        ];
    }

    public function messages(): array
    {
        return [
            'number.regex' => 'Please enter exactly 10 digits for the contact number.',
        ];
    }
}
