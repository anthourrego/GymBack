<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Services\CityService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected CityService $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    /**
     * Display a listing of cities.
     */
    public function index(Request $request): JsonResponse
    {

        $stateId = $request->get('state') ? $request->get('state') : null;

        $cities = $this->cityService->getAll($stateId);

        return response()->json($cities);
    }
}
