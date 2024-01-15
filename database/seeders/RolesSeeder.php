<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'ketua-divisi']);
        Role::create(['name' => 'ketua-unit']); // kepsek / mudir
        Role::create(['name' => 'penguji']);
        Role::create(['name' => 'pengajar']);  // atau musyrif
        Role::create(['name' => 'peserta']);
        Role::create(['name' => 'kasir']);
        Role::create(['name' => 'keuangan']);
        Role::create(['name' => 'pimpinan']);
    }
}
