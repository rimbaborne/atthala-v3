<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function __construct() {
        $this->middleware('role:peserta');
    }

    public function index() {
        return view('dashboard.peserta.index');
    }
}
