<?php

namespace App\Repositories;

use App\Tables\Divisis;
use App\Models\Modules\Divisi;
use Illuminate\Support\Arr;
use App\Repositories\Interface\DivisiRepoInterface;
use ProtoneMedia\Splade\SpladeTable;

class DivisiRepository implements DivisiRepoInterface {

    private Divisi $model;
    public function __construct(Divisi $model) {
        $this->model = $model;
    }


    function getDivisi()  {
        $getDivisi = SpladeTable::for(Divisi::class)
        ->column(
            key     : 'user.name',
            label   : 'Kepala Divisi'
        )
        ->column('nama')
        ->column('slug')
        ->column('created_at')
        ->paginate(10);
        return $getDivisi;
    }

    public function getDataTable()  {
        $getData = Divisis::class;
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

    function deleteDivisi() {

    }
}
