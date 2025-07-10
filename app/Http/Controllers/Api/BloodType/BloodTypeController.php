<?php

namespace App\Http\Controllers\Api\BloodType;

use App\Http\Controllers\Controller;
use App\Services\BloodTypeService;
use Illuminate\Http\JsonResponse;

class BloodTypeController extends Controller
{
    protected BloodTypeService $bloodTypeService;

    public function __construct(BloodTypeService $bloodTypeService)
    {
        $this->bloodTypeService = $bloodTypeService;
    }

    /**
     * Display a listing of BloodType.
     */
    public function index(): JsonResponse
    {
        $bloods = $this->bloodTypeService->getAll();

        return response()->json($bloods);
    }
}
