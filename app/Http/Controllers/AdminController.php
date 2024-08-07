<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('role:admin');
    }

    public function index($unit) {
        return view('dashboard.admin.index');
    }
}
