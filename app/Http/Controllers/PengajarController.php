<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function __construct() {
        $this->middleware('role:pengajar');
    }

    public function index() {
        return view('dashboard.pengajar.index');
    }
}
