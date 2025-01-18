<?php

namespace App\Domain\Website\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranTlaController extends Controller
{
    public function index()
    {
        return view('website.pages.pendaftaran-tla.index');
    }
}
