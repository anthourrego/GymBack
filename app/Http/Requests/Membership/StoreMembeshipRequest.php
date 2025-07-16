<?php

namespace App\Http\Requests\Membership;
use Illuminate\Foundation\Http\FormRequest;

class StoreMembershipRequest extends FormRequest{
  public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'                              => 'required|string|max:255',
            'description'                       => 'required|string|max:255',
            'generate_payment'                  => 'required|boolean',
            'generate_movement_exp_date'        => 'required|boolean',
            'generate_bill'                     => 'required|boolean',
            'generate_code_customer'            => 'required|boolean',
            'controlled_plan'                   => 'required|boolean',
            'required_list_members'             => 'required|boolean',
            'can_be_invited'                    => 'required|boolean',
            'required_footprint'                => 'required|boolean',
            'has_assessment_physical_therapy'   => 'required|boolean',
            'required_gift_voucher'             => 'required|boolean',
            'admission_all_sites'               => 'required|boolean',
            'charge_registration'               => 'required|boolean',
            'controls_user_access'              => 'required|boolean',
            'max_entry_per_day'                 => 'required|integer',
            'max_day_per_week'                  => 'required|integer',
            'min_members_group_plan'            => 'nullable|integer',
            'max_members_group_plan'            => 'nullable|integer',
            'start_time_restriction'            => 'nullable|date_format:H:i:s',
            'end_time_restriction'              => 'nullable|date_format:H:i:s',
            'age_restriction_type'              => 'nullable|string|max:255',
            'age_restriction_value'             => 'nullable|integer',
            'birthday_discount'                 => 'required|boolean',
            'birthday_choose_gift_discount'     => 'required|boolean',
            'discount_early_payment'            => 'required|boolean',
            'discount_early_payment_first'      => 'required|boolean',
            'increase_arrears'                  => 'required|boolean',
            'generate_payment_plan'             => 'required|boolean',
            'start_first_day_month'             => 'required|boolean',
            'contains_class_package'            => 'required|boolean',
            'issues_card'                       => 'required|boolean',
            'capture_gift_voucher'              => 'required|boolean',
            'generate_cxc'                      => 'required|boolean',
            'type_payment'                      => 'required|integer',
            'price_plan'                        => 'required|integer',
            'percentage_discount'               => 'required|integer',
            'cost_center'                       => 'required|integer',
            'guest_days'                        => 'nullable|array',
            'guest_days.*'                      => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Holiday',
            'restriction_days'                  => 'nullable|array',
            'restriction_days.*'                => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Holiday',
        ];
    }
}