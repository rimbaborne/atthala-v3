<?php

namespace Database\Seeders;

use App\Models\Modules\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create(['unit_id' => 1, 'nama' => 'ASAASI 1','slug' => 'asaasi-1']);
        Level::create(['unit_id' => 1, 'nama' => 'ASAASI 2','slug' => 'asaasi-2']);
        Level::create(['unit_id' => 1, 'nama' => 'TILAWAH ASAASI','slug' => 'tilawah-asaasi']);
        Level::create(['unit_id' => 1, 'nama' => 'TAMHIDI','slug' => 'tamhidi']);
        Level::create(['unit_id' => 1, 'nama' => 'TAWASUTHI','slug' => 'tawasuthi']);
        Level::create(['unit_id' => 1, 'nama' => 'TILAWAH TAWASUTHI','slug' => 'tilawah-tawasuthi']);
        Level::create(['unit_id' => 1, 'nama' => 'IDADI','slug' => 'idadi']);
        Level::create(['unit_id' => 1, 'nama' => 'TAKMILI','slug' => 'takmili']);
        Level::create(['unit_id' => 1, 'nama' => 'TAHSINI','slug' => 'tahsini']);
        Level::create(['unit_id' => 1, 'nama' => 'ITQON','slug' => 'itqon']);
    }
}
