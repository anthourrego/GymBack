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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('is_leader');
            $table->boolean('is_active')->default(true);
            $table->date('enrollment_date');
            $table->foreignId('document_type_id')->constrained('document_types');
            $table->string('identification', 50);
            $table->foreignId('person_type_id')->constrained('person_types')->nullable();
            $table->foreignId('tax_responsability_id')->constrained('tax_responsability')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('place_of_birth')->nullable();
            $table->foreignId('country_id')->constrained('countries')->nullable();
            $table->string('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100);
            $table->foreignId('gender_id')->constrained('gender')->nullable();
            $table->foreignId('blood_type_id')->constrained('blood_types')->nullable();
            $table->string('eps', 100)->nullable();
            $table->string('profession', 100)->nullable();
            $table->string('phone_emergency', 20)->nullable();
            $table->string('contact_emergency', 100)->nullable();
            $table->foreignId('how_did_you_hear_id')->constrained('how_did_you_hear')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('observations');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
