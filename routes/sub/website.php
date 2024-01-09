<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Website\Controllers\WebController;

Route::get("/", [WebController::class, "home"])->name("website.home");
