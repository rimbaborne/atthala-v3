<?php

namespace App\Traits;
use Illuminate\Http\Request;

trait FilterTable1Trait
{
    public function applyFilters($query, Request $request, $columns)
    {
        foreach ($columns as $field => $config) {
            $filterType = $config['type'];

            if ($filterType === 'relation' && $request->has($field)) {
                $relationPath = explode('.', $config['relation']);
                $relationField = array_pop($relationPath);
                $relationName = implode('.', $relationPath);

                $query->whereHas($relationName, function($q) use ($request, $field, $relationField) {
                    $q->where($relationField, 'like', '%' . $request->$field . '%');
                });
            } elseif ($filterType === 'json' && $request->has($field)) {
                $query->whereJsonContains($field, [$config['json_key'] => $request->input($field)]);
            } elseif ($filterType === 'range' && $request->has($field . '_min') && $request->has($field . '_max')) {
                $query->whereBetween($field, [$request->input($field . '_min'), $request->input($field . '_max')]);
            } elseif ($request->has($field)) {
                $query->where($field, 'like', '%' . $request->input($field) . '%');
            }
        }

        return $query;
    }
}
