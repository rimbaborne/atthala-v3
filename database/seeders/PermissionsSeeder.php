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
        Permission::create(['name' => 'tahsin-tla']);
        Permission::create(['name' => 'ekonomi']);
        Permission::create(['name' => 'kasir']);
    }
}
