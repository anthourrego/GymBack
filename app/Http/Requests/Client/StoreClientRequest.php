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
            'first_name'            => 'required|string|max:255',
            'last_name'             => 'required|string|max:255',
            'is_leader'             => 'required|boolean',
            'enrollment_date'       => 'required|date',
            'document_type_id'      => 'required|exists:document_types,id',
            'identification'        => 'required|string|max:50|unique:clients,identification',
            'person_type_id'        => 'nullable|exists:person_types,id',
            'tax_responsability_id' => 'nullable|exists:tax_responsability,id',
            'date_of_birth'         => 'nullable|date',
            'place_of_birth'        => 'nullable|string|max:255',
            'country_id'            => 'nullable|exists:countries,id',
            'address'               => 'nullable|string|max:255',
            'phone'                 => 'nullable|string|max:20',
            'email'                 => 'required|email|max:100|unique:clients,email',
            'gender_id'             => 'nullable|exists:gender,id',
            'eps'                   => 'nullable|string|max:100',
            'profession'            => 'nullable|string|max:100',
            'phone_emergency'       => 'nullable|string|max:20',
            'contact_emergency'     => 'nullable|string|max:100',
            'how_did_you_hear_id'   => 'nullable|exists:how_did_you_hear,id',
            'expiration_date'       => 'nullable|date',
            'observations'          => 'nullable|string',
        ];
    }
}
