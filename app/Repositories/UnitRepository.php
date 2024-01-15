<?php

namespace App\Repositories;

use App\Tables\Units;
use App\Models\Modules\Unit;
use App\Repositories\Interface\UnitRepoInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UnitRepository implements UnitRepoInterface {

    private Unit $model;
    public function __construct(Unit $model) {
        $this->model = $model;
    }

    public function getDataTable()  {
        $getData = Units::class;
        return $getData;
    }

    public function findData($id)
    {
        return $this->model->find($id);
    }

    public function storeData(array $data)
    {
        return $this->model->create([
            'name' => Arr::get($data,'name'),
            'slug' => Arr::get($data,'slug'),
        ]);
    }

    public function updateData($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update([
            'name' => Arr::get($data,'name'),
            'slug' => Arr::get($data,'slug'),
        ]);
        return $record;
    }

    public function deleteData($id)
    {
        $record = $this->model->findOrFail($id);
        return $record->delete();
    }
}
