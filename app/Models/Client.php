<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'is_leader',
        'enrollment_date',
        'document_type_id',
        'identification',
        'person_type_id',
        'tax_responsability_id',
        'date_of_birth',
        'place_of_birth',
        'country_id',
        'address',
        'phone',
        'email',
        'gender_id',
        'eps',
        'profession',
        'phone_emergency',
        'contact_emergency',
        'how_did_you_hear_id',
        'expiration_date',
        'observations',
        'blood_type_id',
    ];

    /**
     * Relationships
     */
    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function personType()
    {
        return $this->belongsTo(PersonType::class);
    }

    public function taxResponsability()
    {
        return $this->belongsTo(TaxResponsability::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function howDidYouHear()
    {
        return $this->belongsTo(HowDidYouHear::class);
    }
}
