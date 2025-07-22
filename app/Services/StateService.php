<?php

namespace App\Services;

use App\Models\State;

class StateService
{
    /**
     * Get all active states.
     */
    public function getAll($countryId = null): \Illuminate\Support\Collection
    {
        $states = State::where('is_active', true);

        if (!is_null($countryId)) {
            $states->where('country_id', $countryId);
        }

        return $states->orderBy('name', 'ASC')->get();
    }
}
