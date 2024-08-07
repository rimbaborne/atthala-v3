<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct() {
    //     $this->middleware('permission:admin');
    // }

    public function index($unit)
    {
        return view('dashboard.admin.index');

    }
}
