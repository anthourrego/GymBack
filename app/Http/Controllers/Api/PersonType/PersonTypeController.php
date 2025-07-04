<?php

namespace App\Http\Controllers\Api\PersonType;

use App\Http\Controllers\Controller;
use App\Services\PersonTypeService;
use Illuminate\Http\JsonResponse;

class PersonTypeController extends Controller
{
    protected PersonTypeService $personTypeService;

    public function __construct(PersonTypeService $personTypeService)
    {
        $this->personTypeService = $personTypeService;
    }

    /**
     * Display a listing of person types.
     */
    public function index(): JsonResponse
    {
        $personTypes = $this->personTypeService->getAll();

        return response()->json($personTypes);
    }
}
