<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Carbon;
use App\Models\Periode;


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
                'code_access_max_date' => Carbon::now()->addHour(),
                'password'             => bcrypt('5555'),
            ],
        );

        $user->assignRole('super-admin');

        $periode = Periode::create(
            [
                'unit_id'              => 1,
                'nama'                 => 'Angkatan 25',
                'slug'                 => 'angkatan-25',
                'waktu_start'          => '2024-08-01 00:00:00',
                'waktu_end'            => '2024-12-01 23:59:59',
                'tahun_ajaran'         => 'Angkatan 25',
                'angkatan'             => 25,
                'form_biodata_daftar'  => json_encode([]),
                'format_pembayaran'    => json_encode([
                                                'SPP BULAN 1' => '',
                                                'SPP BULAN 2' => '',
                                                'SPP BULAN 3' => '',
                                                'SPP BULAN 4' => '',
                                            ]),
                'aktifkan_pendaftaran' => 1,
            ],
        );
    }
}
