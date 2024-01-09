<?php

namespace App\Repositories;

use App\Repositories\Interface\RoleRepoInterface;
use Spatie\Permission\Models\Role;
use App\Models\RolesUsers;

class RoleRepository implements RoleRepoInterface {

    private $model;
    private $model_2;
    public function __construct(Role $model, RolesUsers $model_2) {
        $this->model   = $model;
        $this->model_2 = $model_2;
    }

    public function getData()  {

        // foreach($this->model->all() as $item){
        //     $data = collect([$item->id => $item->name]);
        // }
        return $this->model_2->all();
    }

    public function findData($id)
    {
        return $this->model->find($id);
    }

    public function storeData(array $data)
    {
        return $this->model->create($data);
    }

    public function updateData($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function deleteData($id)
    {
        $record = $this->model->findOrFail($id);
        return $record->delete();
    }
}
