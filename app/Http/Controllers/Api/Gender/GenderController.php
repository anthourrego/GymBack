<?php

namespace App\Http\Controllers\Api\Gender;

use App\Http\Controllers\Controller;
use App\Services\GenderService;
use Illuminate\Http\JsonResponse;

class GenderController extends Controller
{
    protected GenderService $genderService;

    public function __construct(GenderService $genderService)
    {
        $this->genderService = $genderService;
    }

    /**
     * Display a listing of Gender.
     */
    public function index(): JsonResponse
    {
        $genders = $this->genderService->getAll();

        return response()->json($genders);
    }
}
