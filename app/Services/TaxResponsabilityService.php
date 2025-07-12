<?php

namespace App\Services;

use App\Models\TaxResponsability;

class TaxResponsabilityService
{
    /**
     * Get all active TaxResponsability.
     */
    public function getAll(): \Illuminate\Support\Collection
    {
        return TaxResponsability::where('is_active', true)->get();
    }
}
