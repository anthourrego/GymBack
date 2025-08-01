<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowDidYouHear extends Model
{
    use HasFactory;

    protected $table = 'how_did_you_hear';

    protected $fillable = [
        'name',
        'is_active',
    ];

}
