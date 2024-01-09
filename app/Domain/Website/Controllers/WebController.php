<?php

namespace App\Domain\Website\Controllers;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }
}
