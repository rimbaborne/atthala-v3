<?php

namespace App\Http\Controllers\Penguji;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($unit) {
        return view('dashboard.penguji.index', compact('unit'));
    }
}
