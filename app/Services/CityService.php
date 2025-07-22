<?php

namespace App\Services;

use App\Models\City;

class CityService
{
    /**
     * Get all active cities.
     */
    public function getAll($stateId = null): \Illuminate\Support\Collection
    {
        $cities = City::where('is_active', true);

        if (!is_null($stateId)) {
            $cities->where('state_id', $stateId);
        }

        return $cities->orderBy('name', 'ASC')->get();
    }
}
