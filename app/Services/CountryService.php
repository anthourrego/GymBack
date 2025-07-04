<?php

namespace App\Services;

use App\Models\Country;

class CountryService
{
    /**
     * Get all active countries.
     */
    public function getAll(): \Illuminate\Support\Collection
    {
        return Country::where('is_active', true)->get();
    }
}
