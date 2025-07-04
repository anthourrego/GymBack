<?php

namespace App\Http\Controllers\Api\DocumentType;

use App\Http\Controllers\Controller;
use App\Services\DocumentTypeService;
use Illuminate\Http\JsonResponse;

class DocumentTypeController extends Controller
{
    protected DocumentTypeService $documentTypeService;

    public function __construct(DocumentTypeService $documentTypeService)
    {
        $this->documentTypeService = $documentTypeService;
    }

    /**
     * Display a listing of document types.
     */
    public function index(): JsonResponse
    {
        $documentTypes = $this->documentTypeService->getAll();

        return response()->json($documentTypes);
    }
}
