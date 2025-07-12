<?php

namespace App\Http\Controllers\Api\HowDidYouHear;

use App\Http\Controllers\Controller;
use App\Services\HowDidYouHearService;
use Illuminate\Http\JsonResponse;

class HowDidYouHearController extends Controller
{
    protected HowDidYouHearService $howDidYouHearService;

    public function __construct(HowDidYouHearService $howDidYouHearService)
    {
        $this->howDidYouHearService = $howDidYouHearService;
    }

    /**
     * Display a listing of how did you hear.
     */
    public function index(): JsonResponse
    {
        $hearTypes = $this->howDidYouHearService->getAll();

        return response()->json($hearTypes);
    }
}
