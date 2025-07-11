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
            'first_name'            => 'sometimes|required|string|max:255',
            'last_name'             => 'sometimes|required|string|max:255',
            'is_leader'             => 'sometimes|required|boolean',
            'enrollment_date'       => 'sometimes|required|date',
            'document_type_id'      => 'sometimes|required|exists:document_types,id',
            'identification'        => 'sometimes|required|string|max:50|unique:clients,identification,' . $clientId,
            'person_type_id'        => 'sometimes|nullable|exists:person_types,id',
            'tax_responsability_id' => 'sometimes|nullable|exists:tax_responsability,id',
            'date_of_birth'         => 'sometimes|nullable|date',
            'place_of_birth'        => 'sometimes|nullable|string|max:255',
            'country_id'            => 'sometimes|nullable|exists:countries,id',
            'address'               => 'sometimes|nullable|string|max:255',
            'phone'                 => 'sometimes|nullable|string|max:20',
            'email'                 => 'sometimes|nullable|email|max:100',
            'gender_id'             => 'sometimes|nullable|exists:gender,id',
            'eps'                   => 'sometimes|nullable|string|max:100',
            'profession'            => 'sometimes|nullable|string|max:100',
            'phone_emergency'       => 'sometimes|nullable|string|max:20',
            'contact_emergency'     => 'sometimes|nullable|string|max:100',
            'how_did_you_hear_id'   => 'sometimes|nullable|exists:how_did_you_hear,id',
            'expiration_date'       => 'sometimes|nullable|date',
            'observations'          => 'sometimes|nullable|string',
        ];
    }
}
