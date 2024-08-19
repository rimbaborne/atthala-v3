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
                'format_nilai'         => json_encode([]),
                'format_rapot'         => json_encode([]),
                'format_absensi'       => json_encode([
                                                [
                                                    '1' => '',
                                                    '2' => '',
                                                    '3' => '',
                                                    '4' => '',
                                                    '5' => '',
                                                    '6' => '',
                                                    '7' => '',
                                                    '8' => '',
                                                    '9' => '',
                                                    '10' => '',
                                                    '11' => '',
                                                    '12' => '',
                                                    '13' => '',
                                                    '14' => '',
                                                    '15' => '',
                                                    '16' => '',
                                                ],
                                            ]),
                'format_pembayaran'    => json_encode([
                                                ['name' => 'pendaftaran', 'label' => 'PENDAFTARAN', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp1', 'label' => 'SPP BULAN I', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp2', 'label' => 'SPP BULAN II', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp3', 'label' => 'SPP BULAN III', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => false],
                                                ['name' => 'spp4', 'label' => 'SPP BULAN IV', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => false],
                                            ]),
                'notifikasi'    => json_encode([[
                                                    'pendaftaran' => 'Assalamualaikum Warrohmarullah Wabarokatuh

Terima kasih telah mendaftarkan diri sebagai *Calon Peserta Tahsin Baru di angkatan 25*.

Anda akan kami hubungi kembali secara otomatis melalui pesan WhatsApp setelah hasil bacaan Al Qur\'an dikoreksi oleh tim penguji kami beserta konfirmasi transfer pembayaran.

Silahkan akses ke dalam dashbboard sistem kami menggunakan nomor yang telah terdaftar
https://arrahmahbalikpapan.or.id/akses

Syukron, Jazaakumullah Khoiron Katsiron,
Wassalamualaikum warahmatullahi wabarakatuh.

Salam,
Panitia Pendaftaran Baru
Tahsin Ar Rahmah Balikpapan',
                                                    'penempatan-level' => '',
                                                    'pembayaran-spp' => ''
            ]]),
                'aktifkan_pendaftaran' => 1,
            ],
        );
    }
}
