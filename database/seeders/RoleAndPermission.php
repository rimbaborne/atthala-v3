<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin-tahsin'        => ['pendidikan', 'tahsin', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tahsin'   => ['pendidikan', 'tahsin', 'read'],
            'penguji-tahsin'      => ['pendidikan', 'tahsin', 'read'],
            'pengajar-tahsin'     => ['pendidikan', 'tahsin', 'read'],

            'admin-rtq'        => ['pendidikan', 'rtq', 'create', 'read', 'update', 'delete'],
            'ketua-unit-rtq'   => ['pendidikan', 'rtq', 'read'],
            'penguji-rtq'      => ['pendidikan', 'rtq', 'read'],
            'pengajar-rtq'     => ['pendidikan', 'rtq', 'read'],

            'admin-tla'        => ['pendidikan', 'tla', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tla'   => ['pendidikan', 'tla', 'read'],
            'penguji-tla'      => ['pendidikan', 'tla', 'read'],
            'pengajar-tla'     => ['pendidikan', 'tla', 'read'],

            'admin-rq'        => ['pendidikan', 'rq', 'create', 'read', 'update', 'delete'],
            'ketua-unit-rq'   => ['pendidikan', 'rq', 'read'],
            'penguji-rq'      => ['pendidikan', 'rq', 'read'],
            'pengajar-rq'     => ['pendidikan', 'rq', 'read'],

            'admin-tahla'        => ['pendidikan', 'tahla', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tahla'   => ['pendidikan', 'tahla', 'read'],
            'penguji-tahla'      => ['pendidikan', 'tahla', 'read'],
            'pengajar-tahla'     => ['pendidikan', 'tahla', 'read'],

            'kasir'    => ['keuangan'],
            'keuangan' => ['keuangan'],
            'dkm'      => ['dkm'],
            'laziz'    => ['dkm'],
            'mci'      => ['dkm'],

            'ketua-divisi-pendidikan' => ['pendidikan', 'rtq', 'tahsin', 'rq', 'tla', 'tahla', 'read'],
            'ketua-divisi-dkm'        => ['dkm', 'read'],
            'ketua-divisi-keuangan'   => ['keuangan', 'read'],
        ];

        foreach ($roles as $roleName => $permissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            foreach ($permissions as $permissionName) {
                $permission = Permission::firstOrCreate(['name' => $permissionName]);
                $role->givePermissionTo($permission);
            }
        }
    }
}
