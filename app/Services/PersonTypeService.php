<?php

namespace App\Services;

use App\Models\PersonType;

class PersonTypeService
{
    /**
     * Get all active person types.
     */
    public function getAll(): \Illuminate\Support\Collection
    {
        return PersonType::where('is_active', true)->get();
    }
}
