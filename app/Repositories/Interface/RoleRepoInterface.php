<?php

namespace App\Repositories\Interface;

interface RoleRepoInterface {
    public function getData();
    public function findData($id);
    public function storeData(array $data);
    public function updateData($id, array $data);
    public function deleteData($id);
}
