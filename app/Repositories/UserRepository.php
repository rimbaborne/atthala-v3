<?php

namespace App\Repositories;

use App\Tables\Users;
use App\Tables\Admin\Users as AdminUsers;
use App\Models\User;
use App\Repositories\Interface\UserRepoInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Carbon;

class UserRepository implements UserRepoInterface {

    private User $model;
    public function __construct(User $model) {
        $this->model = $model;
    }

    public function getDataTable($unit = null)  {
        // if (auth()->user()->hasAnyRole(['admin-tahsin', 'admin-rtq', 'admin-tla', 'admin-rq', 'admin-tahla'])) {
        //     $getData = new AdminUsers($unit);
        // } else {
            $getData = Users::class;
        // }
        return $getData;
    }

    public function findData($id)
    {
        return $this->model->find($id);
    }

    public function findRoleData($id)
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
        if (is_array(Arr::get($data, 'role'))) {
            $roles = Role::whereIn('id', Arr::get($data, 'role'))->get();
            $record->syncRoles($roles);
        } else if (Arr::get($data, 'role') != 0) {
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

    //FORM BARU - PAKAI NOMOR WA

    public function findDataPhone($number)
    {
        return $this->model->where('phone_number',$number)->first();
    }
    public function storeDataValidasi(array $data)
    {
        $code_access = rand(1000,9999);

        return $this->model->create([
            'phone_code'           => Arr::get($data,'phone_code') ?? '62',
            'phone_number'         => Arr::get($data,'phone_number'),
            'code_access'          => $code_access,
            'code_access_max_date' => Carbon::now()->addMonths(6),
            'password'             => Hash::make($code_access),
        ]);
    }

    public function updateOTP($nomor, $kode)
    {
        $record = $this->model->where('phone_number',$nomor)->first();
        return $record->update([
            'code_access'          => $kode,
            'code_access_max_date' => Carbon::now()->addMonths(6),
            'password'             => Hash::make($kode)
        ]);
    }

}
