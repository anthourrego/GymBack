<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $clientId = $this->route('client')->id;

        return [
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'person_type_id' => 'sometimes|required|exists:person_types,id',
            'document_type_id' => 'sometimes|required|exists:document_types,id',
            'identification' => 'sometimes|required|string|max:50|unique:clients,identification,' . $clientId,
            'email' => 'sometimes|required|email|unique:clients,email,' . $clientId,
            'phone' => 'nullable|string|max:50',
        ];
    }
}
