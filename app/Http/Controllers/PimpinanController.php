<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PimpinanController extends Controller
{
    public function __construct() {
        $this->middleware('role:pimpinan');
    }

    public function index() {
        return view('dashboard.peserta.index');
    }
}
