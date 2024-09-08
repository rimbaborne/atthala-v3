<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DynamicTable extends Component
{
    public $columns;
    public $rows;
    public $baseDetailUrl;

    public function __construct($columns, $rows, $baseDetailUrl)
    {
        $this->columns = $columns;
        $this->rows = $rows;
        $this->baseDetailUrl = $baseDetailUrl;
    }

    public function render()
    {
        return view('components.dynamic-table');
    }

    public function getJsonValue($jsonData, $jsonKey)
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

    public function getJsonColumnData($item, $jsonType)
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
}
