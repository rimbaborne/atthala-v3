<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tahsin']);
        Permission::create(['name' => 'rtq']);
        Permission::create(['name' => 'tla']);
        Permission::create(['name' => 'rq']);
        Permission::create(['name' => 'tahsintla']);
        Permission::create(['name' => 'ekonomi']);
        Permission::create(['name' => 'kasir']);
        Permission::create(['name' => 'cms']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'read']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'delete']);
    }
}
