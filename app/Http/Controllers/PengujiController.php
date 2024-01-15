<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengujiController extends Controller
{
    public function __construct() {
        $this->middleware('role:penguji');
    }

    public function index() {
        return view('dashboard.penguji.index');
    }
}
