<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Website\Controllers\WebController;

Route::get("/", [WebController::class, "home"])->name("website.home");
Route::get("/lttq", [WebController::class, "lttq"])->name("website.lttq");
Route::get("/lttq/tahsin", [WebController::class, "lttq_tahsin"])->name("website.lttq.tahsin");
Route::get("/lttq/rq", [WebController::class, "lttq_rq"])->name("website.lttq.rq");
Route::get("/lttq/tla", [WebController::class, "lttq_tla"])->name("website.lttq.tla");
Route::get("/lttq/rtq-putra", [WebController::class, "lttq_rtq_putra"])->name("website.lttq.rtq-putra");
Route::get("/lttq/rtq-putri", [WebController::class, "lttq_rtq_putri"])->name("website.lttq.rtq-putri");
Route::get("/kontak", [WebController::class, "kontak"])->name("website.kontak");
Route::get("/yayasan", [WebController::class, "yayasan"])->name("website.yayasan");
Route::get("/informasi", [WebController::class, "informasi"])->name("website.informasi");
Route::get("/informasi/{slug}", [WebController::class, "informasi_slug"])->name("website.informasi.slug");
Route::get("/informasi/tag/{slug}", [WebController::class, "informasi_tag_slug"])->name("website.informasi.tag.slug");

