<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function __construct() {
        $this->middleware('role:kasir');
    }

    public function index() {
        return view('dashboard.kasir.index');
    }
}
