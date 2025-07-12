<?php

namespace App\Services;

use App\Models\BloodType;

class BloodTypeService
{
    /**
     * Get all active BloodType.
     */
    public function getAll(): \Illuminate\Support\Collection
    {
        return BloodType::where('is_active', true)->get();
    }
}
