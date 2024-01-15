<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetuaDivisiController extends Controller
{
    public function __construct() {
        $this->middleware('role:ketua-divisi');
    }
}
