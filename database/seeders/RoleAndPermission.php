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
            'ketua-divisi-tahsin' => ['tahsin', 'read'],
            'admin-tahsin'        => ['tahsin', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tahsin'   => ['tahsin', 'read'],
            'penguji-tahsin'      => ['tahsin', 'read'],
            'pengajar-tahsin'     => ['tahsin', 'read'],

            'ketua-divisi-rtq' => ['rtq', 'read'],
            'admin-rtq'        => ['rtq', 'create', 'read', 'update', 'delete'],
            'ketua-unit-rtq'   => ['rtq', 'read'],
            'penguji-rtq'      => ['rtq', 'read'],
            'pengajar-rtq'     => ['rtq', 'read'],

            'ketua-divisi-tla' => ['tla', 'read'],
            'admin-tla'        => ['tla', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tla'   => ['tla', 'read'],
            'penguji-tla'      => ['tla', 'read'],
            'pengajar-tla'     => ['tla', 'read'],

            'ketua-divisi-rq' => ['rq', 'read'],
            'admin-rq'        => ['rq', 'create', 'read', 'update', 'delete'],
            'ketua-unit-rq'   => ['rq', 'read'],
            'penguji-rq'      => ['rq', 'read'],
            'pengajar-rq'     => ['rq', 'read'],

            'ketua-divisi-tahla' => ['tahla', 'read'],
            'admin-tahla'        => ['tahla', 'create', 'read', 'update', 'delete'],
            'ketua-unit-tahla'   => ['tahla', 'read'],
            'penguji-tahla'      => ['tahla', 'read'],
            'pengajar-tahla'     => ['tahla', 'read'],
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
