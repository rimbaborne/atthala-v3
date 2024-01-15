<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;


class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'id' => 25,
                'name' => 'Super Admin',
                'email' => 'admin@arrahmahbalikpapan.or.id',
                'password' => bcrypt('qweqwe'),
            ],
        );

        $user->assignRole('super-admin');
    }
}
