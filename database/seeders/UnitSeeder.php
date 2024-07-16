<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modules\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create(
            [
                'id'        => 1,
                'nama'      => 'Tahsin',
                'slug'      => 'tahsin',
                'divisi_id' => 1,
            ]);
        Unit::create([
                'id'        => 2,
                'nama'      => 'Rumah Tahfizhil Qur\'an',
                'slug'      => 'rtq',
                'divisi_id' => 1,
            ]);
        Unit::create([
                'id'        => 3,
                'nama'      => 'Tahfizh Lil Athfal',
                'slug'      => 'tla',
                'divisi_id' => 1,
            ]);
        Unit::create([
                'id'        => 4,
                'nama'      => 'Raudhotul Qur\'an',
                'slug'      => 'rq',
                'divisi_id' => 1,
            ]);
        Unit::create([
                'id'        => 5,
                'nama'      => 'Tahsin Lil Athfal',
                'slug'      => 'tahsintla',
                'divisi_id' => 1,
            ]);
        Unit::create([
                'id'        => 6,
                'nama'      => 'Ekonomi',
                'slug'      => 'ekonomi',
                'divisi_id' => 2,
            ]);
        Unit::create([
                'id'        => 7,
                'nama'      => 'Kasir',
                'slug'      => 'kasir',
                'divisi_id' => 2,
            ]);
    }
}
