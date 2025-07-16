<?php

namespace App\Http\Requests\SettingsApp;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingsAppRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            // Basic info company
            'name' => 'required|string|min:1',
            'company_name' => 'required|string|min:1',
            'address' => 'nullable|string',
            'email' => 'nullable|string|email',
            'nit' => 'required|string',
            'phone' => 'nullable|numeric|min:0',
            'main_address' => 'nullable|string',
            'website' => 'nullable|string',
            'site' => 'nullable|numeric',
            'city' => 'nullable|numeric',

            // Tax info company
            'resolution_current' => 'nullable|string',
            'resolution_start_date' => 'nullable|string',
            'resolution_exp_date' => 'nullable|string',
            'resolution_validity' => 'nullable|string',
            'resolution_start_number' => 'nullable|numeric',
            'resolution_end_number' => 'nullable|numeric',
            'resolution_prefix' => 'nullable|string',
            'act_dian' => 'nullable|string',
            'act_ica' => 'nullable|string',
            'tariff' => 'nullable|numeric',
            'reteiva' => 'nullable|numeric',
            'commercial_registration' => 'nullable|string',
            'withholding' => 'nullable|numeric',
            'regime_vat' => 'nullable|numeric',
            'vat' => 'nullable|numeric',

            // General config
            'is_electronic_biller' => 'required|boolean',
            'contingency' => 'required|boolean',
            'date_format' => 'required|string',
            'currency' => 'required|string',
            'adds_potential_customers' => 'required|boolean',
            'required_year_issuescard_customer' => 'required|boolean',
            'required_type_customer_issuescard_customer' => 'required|boolean',
            'manages_corporate_customer' => 'required|boolean',
            'required_classification_customer' => 'required|boolean',
            'required_place_birth_issuescard_customer' => 'required|boolean',
            'groups_users' => 'required|boolean',
            'required_company_issuescard_customer' => 'required|boolean',
            'manages_cost_center' => 'required|boolean',
            'how_did_you_hear_about_us' => 'required|boolean',
            'manages_last_name' => 'required|boolean',
            'ban_users' => 'required|boolean',
            'percentage_recognition_freezing' => 'nullable|numeric',
            'physiotherapy_holiday' => 'required|boolean',
            'discount_extension_days' => 'required|boolean',
            'save_dni_user' => 'required|boolean',
            'capture_directly_photo' => 'required|boolean',
            'new_customer_courtesy_days' => 'nullable|numeric',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Ingrese un Nombre',
            'name.min' => 'Nombre es requerido',
            'company_name.required' => 'Ingrese una razón social',
            'company_name.min' => 'Razón social es requerido',
            'nit.required' => 'Ingrese un Nit',
            'date_format.required' => 'Seleccione un Formato de fecha',
            'currency.required' => 'Seleccione una moneda',
        ];
    }
} 