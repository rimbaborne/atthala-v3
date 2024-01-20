<?php

namespace App\Repositories\Interface;

interface UserRepoInterface {
    public function getDataTable();
    public function findData($id);
    public function storeData(array $data);
    public function updateData($id, array $data);
    public function updateDataPassword($id, array $data);
    public function deleteData($id);

    public function findDataPhone($number);
    public function storeDataValidasi(array $data);
    public function updateOTP($nomor, $kode);

}
