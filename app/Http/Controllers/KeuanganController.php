<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function __construct() {
        $this->middleware('role:keuangan');
    }

    public function index() {
        return view('dashboard.keuangan.index');
    }
}
