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
            'ketua-divisi-tahsin' => ['pendidikan', 'tahsin', 'read'],
            'admin-tahsin'        => ['pendidikan', 'tahsin', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tahsin'   => ['pendidikan', 'tahsin', 'read'],
            'penguji-tahsin'      => ['pendidikan', 'tahsin', 'read'],
            'pengajar-tahsin'     => ['pendidikan', 'tahsin', 'read'],

            'ketua-divisi-rtq' => ['pendidikan', 'rtq', 'read'],
            'admin-rtq'        => ['pendidikan', 'rtq', 'create', 'read', 'update', 'delete'],
            'ketua-unit-rtq'   => ['pendidikan', 'rtq', 'read'],
            'penguji-rtq'      => ['pendidikan', 'rtq', 'read'],
            'pengajar-rtq'     => ['pendidikan', 'rtq', 'read'],

            'ketua-divisi-tla' => ['pendidikan', 'tla', 'read'],
            'admin-tla'        => ['pendidikan', 'tla', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tla'   => ['pendidikan', 'tla', 'read'],
            'penguji-tla'      => ['pendidikan', 'tla', 'read'],
            'pengajar-tla'     => ['pendidikan', 'tla', 'read'],

            'ketua-divisi-rq' => ['pendidikan', 'rq', 'read'],
            'admin-rq'        => ['pendidikan', 'rq', 'create', 'read', 'update', 'delete'],
            'ketua-unit-rq'   => ['pendidikan', 'rq', 'read'],
            'penguji-rq'      => ['pendidikan', 'rq', 'read'],
            'pengajar-rq'     => ['pendidikan', 'rq', 'read'],

            'ketua-divisi-tahla' => ['pendidikan', 'tahla', 'read'],
            'admin-tahla'        => ['pendidikan', 'tahla', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tahla'   => ['pendidikan', 'tahla', 'read'],
            'penguji-tahla'      => ['pendidikan', 'tahla', 'read'],
            'pengajar-tahla'     => ['pendidikan', 'tahla', 'read'],

            'kasir'    => ['keuangan'],
            'keuangan' => ['keuangan'],
            'dkm'      => ['dkm'],
            'laziz'    => ['dkm'],
            'mci'      => ['dkm'],
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
