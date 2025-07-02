<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'person_type_id',
        'document_type_id',
        'identification',
        'email',
        'phone',
    ];

    /**
     * Relationships
     */
    public function personType()
    {
        return $this->belongsTo(PersonType::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
