<?php

namespace App\Repositories\Interface;

interface UserRepoInterface {
    public function getData();
    public function createData();
    public function updateData();
    public function deleteData();
}
