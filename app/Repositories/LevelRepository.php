<?php

namespace App\Repositories;

use App\Tables\Levels;
use App\Models\Modules\Level;
use App\Repositories\Interface\LevelRepoInterface;
use Illuminate\Support\Arr;

class LevelRepository implements LevelRepoInterface {

    private Level $model;
    public function __construct(Level $model) {
        $this->model = $model;
    }

    public function getDataTable()  {
        $getData = Levels::class;
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
