<?php

namespace App\Services;

use App\Models\DocumentType;

class DocumentTypeService
{
    /**
     * Get all active document types.
     */
    public function getAll(): \Illuminate\Support\Collection
    {
        return DocumentType::where('is_active', true)->get();
    }
}
