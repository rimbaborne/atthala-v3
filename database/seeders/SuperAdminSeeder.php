<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Carbon;


class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'id'                   => 25,
                'name'                 => 'Super Admin',
                'email'                => 'admin@arrahmahbalikpapan.or.id',
                'phone_code'           => '62',
                'phone_number'         => '08125144744',
                'code_access'          => '5555',
                'code_access_max_date' => Carbon::now()->addMonths(6),
                'password'             => bcrypt('5555'),
            ],
        );

        $user->assignRole('super-admin');
    }
}
