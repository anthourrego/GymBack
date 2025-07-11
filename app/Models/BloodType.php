<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;

    protected $table = 'blood_types';

    protected $fillable = [
        'name',
        'is_active',
    ];

}
