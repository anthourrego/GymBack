<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();

            /* Main Config */
            $table->string('name');
            $table->string('description');
            $table->boolean('generate_payment')->default(false);
            $table->boolean('generate_movement_exp_date')->default(false);
            $table->boolean('generate_bill')->default(false);
            $table->boolean('generate_code_customer')->default(false);
            $table->boolean('controlled_plan')->default(false);
            $table->boolean('required_list_members')->default(false);
            $table->boolean('can_be_invited')->default(false);
            $table->boolean('required_footprint')->default(false);
            $table->boolean('has_assessment_physical_therapy')->default(false);
            $table->boolean('required_gift_voucher')->default(false);
            $table->boolean('admission_all_sites')->default(false);
            $table->boolean('charge_registration')->default(false);
            $table->boolean('controls_user_access')->default(false);

            /* Access config */
            $table->integer('max_entry_per_day');
            $table->integer('max_day_per_week');
            $table->integer('min_members_group_plan')->nullable();
            $table->integer('max_members_group_plan')->nullable();
            $table->boolean('guest_monday')->default(false);
            $table->boolean('guest_tuesday')->default(false);
            $table->boolean('guest_wednesday')->default(false);
            $table->boolean('guest_thursday')->default(false);
            $table->boolean('guest_friday')->default(false);
            $table->boolean('guest_saturday')->default(false);
            $table->boolean('guest_sunday')->default(false);
            $table->boolean('guest_holiday')->default(false);
            $table->time('start_time_restriction')->nullable();
            $table->time('end_time_restriction')->nullable();
            $table->boolean('restrictionday_monday')->default(false);
            $table->boolean('restrictionday_tuesday')->default(false);
            $table->boolean('restrictionday_wednesday')->default(false);
            $table->boolean('restrictionday_thursday')->default(false);
            $table->boolean('restrictionday_friday')->default(false);
            $table->boolean('restrictionday_saturday')->default(false);
            $table->boolean('restrictionday_sunday')->default(false);
            $table->boolean('restrictionday_holiday')->default(false);
            $table->string('age_restriction_type')->nullable(); //string major - minor
            $table->integer('age_restriction_value')->nullable();

            /* Other config */
            $table->boolean('birthday_discount')->default(false);
            $table->boolean('birthday_choose_gift_discount')->default(false);
            $table->boolean('discount_early_payment')->default(false);
            $table->boolean('discount_early_payment_first')->default(false);
            $table->boolean('increase_arrears')->default(false);
            $table->boolean('generate_payment_plan')->default(false);
            $table->boolean('start_first_day_month')->default(false);
            $table->boolean('contains_class_package')->default(false);
            $table->boolean('issues_card')->default(false);
            $table->boolean('capture_gift_voucher')->default(false);
            $table->boolean('generate_cxc')->default(false);
            $table->integer('type_payment');
            $table->integer('price_plan');
            $table->integer('percentage_discount');
            $table->integer('cost_center');

            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
