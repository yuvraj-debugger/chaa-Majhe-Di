<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'number' => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'message' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'number.regex' => 'The phone number must be exactly 10 digits.',
        ];
    }
}
