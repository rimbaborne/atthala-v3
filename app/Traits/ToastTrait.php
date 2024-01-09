<?php
namespace App\Traits;

use ProtoneMedia\Splade\Facades\Toast;

trait ToastTrait {
    public function successCreate($pesan) {
        return Toast::title('Sukses !')
                    ->message('Data '.$pesan.' Berhasil Ditambahkan');
    }

    public function successUpdate($pesan) {
        return Toast::title('Sukses !')
                    ->message('Data '.$pesan.' Berhasil Diperbaruhi');
    }

    public function successDelete($pesan) {
        return Toast::title('Sukses !')
                    ->message('Data '.$pesan.' Berhasil Dihapus');
    }
}
