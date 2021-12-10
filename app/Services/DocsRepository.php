<?php

namespace App\Services;

use App\Models\Document;
use App\Models\DocumentCategory;

class DocsRepository
{
    public function getDocs($category_id = null)
    {
        if ($category_id === null) {
            return Document::published()->with('translation')->lang()->orderBy('created_at', 'asc')->get();
        } else {
            return Document::published()->with('translation')->lang()->where(
                'document_category_id',
                $category_id
            )->orderBy('created_at', 'desc')->get();
        }
    }

    public function getCats($categories = [])
    {
        if (count($categories) === 0) {
            return DocumentCategory::with('translations')->orderBy('created_at', 'asc')->get();
        } else {
            return DocumentCategory::with('translations')->whereIn('code', $categories)->orderBy(
                'created_at',
                'asc'
            )->get();
        }
    }
}
