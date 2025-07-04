<?php

namespace App\Http\Controllers\Api\TaxResponsability;

use App\Http\Controllers\Controller;
use App\Services\TaxResponsabilityService;
use Illuminate\Http\JsonResponse;

class TaxResponsabilityController extends Controller
{
    protected TaxResponsabilityService $taxResponsabilityService;

    public function __construct(TaxResponsabilityService $taxResponsabilityService)
    {
        $this->taxResponsabilityService = $taxResponsabilityService;
    }

    /**
     * Display a listing of TaxResponsability.
     */
    public function index(): JsonResponse
    {
        $responsabilities = $this->taxResponsabilityService->getAll();

        return response()->json($responsabilities);
    }
}
