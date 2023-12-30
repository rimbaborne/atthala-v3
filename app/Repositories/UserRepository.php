<?php

namespace App\Repositories;

use App\Tables\Users;
use App\Repositories\Interface\UserRepoInterface;

class UserRepository implements UserRepoInterface {

    function getData()  {
        $getData = Users::class;
        return $getData;
    }

    function createData() {

    }

    function updateData() {

    }

    function deleteData() {

    }
}
