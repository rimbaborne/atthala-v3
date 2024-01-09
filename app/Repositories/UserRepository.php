<?php

namespace App\Repositories;

use App\Tables\Users;
use App\Models\User;
use App\Repositories\Interface\UserRepoInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserRepository implements UserRepoInterface {

    private User $model;
    public function __construct(User $model) {
        $this->model = $model;
    }

    public function getDataTable()  {
        $getData = Users::class;
        return $getData;
    }

    public function findData($id)
    {
        return $this->model->find($id);
    }

    public function storeData(array $data)
    {
        return $this->model->create([
            'name'     => Arr::get($data,'name'),
            'email'    => Arr::get($data,'email'),
            'password' => Hash::make(Arr::get($data,'password')),
        ]);
    }

    public function updateData($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update([
            'name'     => Arr::get($data,'name'),
        ]);
        if (Arr::get($data, 'role') != 0) {
            $role = Role::find(Arr::get($data,'role'));
            $record->assignRole($role->name);
        }
        return $record;
    }

    public function updateDataPassword($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        return $record->update([
            'password'  => Hash::make(Arr::get($data,'password')),
        ]);
    }

    public function deleteData($id)
    {
        $record = $this->model->findOrFail($id);
        return $record->delete();
    }
}
