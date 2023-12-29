<?php

namespace App\Repositories;

use App\Models\Modules\Divisi;
use App\Repositories\Interface\DivisiRepoInterface;
use ProtoneMedia\Splade\SpladeTable;

class DivisiRepository implements DivisiRepoInterface {

    function getDivisi()  {
        $getDivisi = SpladeTable::for(Divisi::class)
        ->column(
            key     : 'user.name',
            label   : 'Kepala Divisi'
        )
        ->column('nama')
        ->column('slug')
        ->column('created_at')
        ->paginate(10);
        return $getDivisi;
    }

    function createDivisi() {

    }

    function updateDivisi() {

    }

    function deleteDivisi() {

    }
}
