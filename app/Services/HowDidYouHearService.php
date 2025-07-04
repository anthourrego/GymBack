<?php

namespace App\Services;

use App\Models\HowDidYouHear;

class HowDidYouHearService
{
    /**
     * Get all active how did you hear.
     */
    public function getAll(): \Illuminate\Support\Collection
    {
        return HowDidYouHear::where('is_active', true)->get();
    }
}
