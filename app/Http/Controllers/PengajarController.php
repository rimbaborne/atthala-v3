<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function __construct() {
        $this->middleware('role:pengajar');
    }
}
