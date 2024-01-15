<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetuaUnitController extends Controller
{
    public function __construct() {
        $this->middleware('role:ketua-unit');
    }

    public function index() {
        return view('dashboard.ketua-unit.index');
    }
}
