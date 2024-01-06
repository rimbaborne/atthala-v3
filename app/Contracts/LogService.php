<?php

namespace App\Contracts;

interface LogService {
    public function create($data_from, $data_to);
    public function update($data_from, $data_to);
    public function delete($data_from, $data_to);
}
