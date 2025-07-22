<?php

namespace App\Http\Controllers\Api\State;

use App\Http\Controllers\Controller;
use App\Services\StateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StateController extends Controller
{
    protected StateService $stateService;

    public function __construct(StateService $stateService)
    {
        $this->stateService = $stateService;
    }

    /**
     * Display a listing of states.
     */
    public function index(Request $request): JsonResponse
    {

        $countryId = $request->get('country') ? $request->get('country') : null;

        $states = $this->stateService->getAll($countryId);

        return response()->json($states);
    }
}
