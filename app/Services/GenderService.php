<?php

namespace App\Services;

use App\Models\Gender;

class GenderService
{
    /**
     * Get all active Gender.
     */
    public function getAll(): \Illuminate\Support\Collection
    {
        return Gender::where('is_active', true)->get();
    }
}
