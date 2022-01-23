<?php

namespace App\Services;

use App\Models\CategoriesConnection;
use App\Models\TypesConnection;

class CategoriesService {
    public function deleteCategories($id, string $foreignColumn) {
        // delete all old categories and types connection
        $categoryConnections = CategoriesConnection::where($foreignColumn, $id)->get();
        $catIds = collect($categoryConnections)->map(fn($el) => $el->id);
        if ($catIds->isNotEmpty()) CategoriesConnection::destroy($catIds);
    }
}
