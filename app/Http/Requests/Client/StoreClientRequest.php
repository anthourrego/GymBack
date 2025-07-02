<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'person_type_id' => 'required|exists:person_types,id',
            'document_type_id' => 'required|exists:document_types,id',
            'identification' => 'required|string|max:50|unique:clients,identification',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'nullable|string|max:50',
        ];
    }
}
