<?php

namespace App\Services;

use App\Models\CategoriesConnection;
use App\Models\TypesConnection;

class TypesService {
    public function deleteTypes($id, string $foreignColumn) {
        // delete all old categories and types connection
        $typesConnections = TypesConnection::where($foreignColumn, $id)->get();
        $typeIDs = collect($typesConnections)->map(fn($el) => $el->id);
        if ($typeIDs->isNotEmpty()) TypesConnection::destroy($typeIDs);
    }
}
