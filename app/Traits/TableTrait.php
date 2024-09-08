<?php

namespace App\Traits;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Cache;

trait TableTrait
{
    public function applyFilters($query, $filters, $columns)
    {
        foreach ($columns as $column) {
            if (isset($column['filter']) && $column['filter']) {
                $key = $column['key'];
                $filterType = $column['filter_type'] ?? 'text';

                if (strpos($key, '.') !== false) {
                    $keys = explode('.', $key);
                    $relation = array_shift($keys);
                    $query->whereHas($relation, function ($q) use ($keys, $filters, $key, $filterType) {
                        $this->applyNestedFilter($q, $keys, $filters[$key] ?? null, $filterType);
                    });
                } else {
                    $this->applyBasicFilter($query, $key, $filters[$key] ?? null, $filterType);
                }
            }
        }
    }

    private function applyBasicFilter($query, $key, $value, $filterType)
    {
        if ($filterType === 'dropdown') {
            if ($value) {
                $query->where($key, $value);
            }
        } elseif ($filterType === 'date' && $value) {
            $query->whereDate($key, $value);
        } elseif ($filterType === 'date_range' && isset($value['start']) && isset($value['end'])) {
            $query->whereBetween($key, [$value['start'], $value['end']]);
        } else {
            if ($value) {
                $query->where($key, 'like', "%{$value}%");
            }
        }
    }

    private function applyNestedFilter($query, $keys, $value, $filterType)
    {
        if (count($keys) > 1) {
            $relation = array_shift($keys);
            $query->whereHas($relation, function ($q) use ($keys, $value, $filterType) {
                $this->applyNestedFilter($q, $keys, $value, $filterType);
            });
        } else {
            $key = array_shift($keys);
            $this->applyBasicFilter($query, $key, $value, $filterType);
        }
    }

    public function getFilteredData($model, $filters, $columns, $relations = [], $cacheDuration = 60)
    {
        $cacheKey = $this->generateCacheKey($model, $filters, $columns, $relations);
        return Cache::remember($cacheKey, $cacheDuration, function () use ($model, $filters, $columns, $relations) {
            $query = $model::query();
            $this->applyFilters($query, $filters, $columns);

            if (!empty($relations)) {
                $query->with($relations);
            }

            return $query->get();
        });
    }

    private function generateCacheKey($model, $filters, $columns, $relations)
    {
        $modelClass = get_class($model);
        $filterKey = md5(json_encode($filters));
        $columnKey = md5(json_encode($columns));
        $relationKey = md5(json_encode($relations));

        return "{$modelClass}_{$filterKey}_{$columnKey}_{$relationKey}";
    }

    public function prepareRows($data, $columns)
    {
        return $data->map(function ($item) use ($columns) {
            $row = [];
            foreach ($columns as $column) {
                if (strpos($column['key'], '.') !== false) {
                    $keys = explode('.', $column['key']);
                    $value = $item;
                    foreach ($keys as $key) {
                        $value = $value->{$key} ?? null;
                    }
                    $row[$column['key']] = $value;
                } elseif (strpos($column['key'], 'json.') === 0) {
                    $jsonColumnKey = substr($column['key'], 5); // Remove 'json.' prefix
                    [$jsonType, $jsonKey] = explode('.', $jsonColumnKey, 2);
                    $jsonData = $this->getJsonColumnData($item, $jsonType);
                    $value = $this->getJsonValue($jsonData, $jsonKey);
                    $row[$column['key']] = $value;
                } else {
                    $row[$column['key']] = $item->{$column['key']} ?? null;
                }
            }
            return $row;
        });
    }

    private function getJsonColumnData($item, $jsonType)
    {
        switch ($jsonType) {
            case 'data_pembayaran':
                return json_decode($item->data_pembayaran, true);
            case 'data_nilai':
                return json_decode($item->data_nilai, true);
            case 'data_absen':
                return json_decode($item->data_absen, true);
            default:
                return [];
        }
    }

    private function getJsonValue($jsonData, $jsonKey)
    {
        $keyParts = explode('.', $jsonKey);
        $value = $jsonData;
        foreach ($keyParts as $part) {
            if (is_array($value) && isset($value[$part])) {
                $value = $value[$part];
            } else {
                return null;
            }
        }
        return $value;
    }

    public function exportToExcel($filters, $exportClass, $filename)
    {
        $cacheKey = md5(json_encode($filters));
        return Cache::remember($cacheKey, 60, function () use ($filters, $exportClass, $filename) {
            return Excel::download(new $exportClass($filters), $filename);
        });
    }

    public function getDynamicLink($baseUrl, $id)
    {
        return $baseUrl . '/' . $id;
    }
}
