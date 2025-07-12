<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxResponsability extends Model
{
    use HasFactory;

    protected $table = 'tax_responsability';

    protected $fillable = [
        'name',
        'code',
        'is_active',
    ];

}
