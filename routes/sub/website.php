<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Website\Controllers\WebController;

Route::get("/", [WebController::class, "home"])->name("website.home");
Route::get("/lttq", [WebController::class, "lttq"])->name("website.lttq");
Route::get("/lttq/tahsin", [WebController::class, "lttq_tahsin"])->name("website.lttq.tahsin");
Route::get("/lttq/tahsin/pendaftaran", [WebController::class, "lttq_tahsin_pendaftaran"])->name("website.lttq.tahsin.pendaftaran");
Route::post("/lttq/tahsin/pendaftaran/store", [WebController::class, "lttq_tahsin_pendaftaran_store"])->name("website.lttq.tahsin.pendaftaran.store");
Route::post("/lttq/tahsin/pendaftaran/store/rekaman", [WebController::class, "lttq_tahsin_pendaftaran_store_rekaman"])->name("website.lttq.tahsin.pendaftaran.store.rekaman");
Route::post("/lttq/tahsin/pendaftaran/store/rekaman/file", [WebController::class, "lttq_tahsin_pendaftaran_store_rekaman_file"])->name("website.lttq.tahsin.pendaftaran.store.rekaman.file");
Route::get("/lttq/rq", [WebController::class, "lttq_rq"])->name("website.lttq.rq");
Route::get("/lttq/tla", [WebController::class, "lttq_tla"])->name("website.lttq.tla");
Route::get("/lttq/rtq-putra", [WebController::class, "lttq_rtq_putra"])->name("website.lttq.rtq-putra");
Route::get("/lttq/rtq-putri", [WebController::class, "lttq_rtq_putri"])->name("website.lttq.rtq-putri");
Route::get("/kontak", [WebController::class, "kontak"])->name("website.kontak");
Route::get("/yayasan", [WebController::class, "yayasan"])->name("website.yayasan");
Route::get("/informasi", [WebController::class, "informasi"])->name("website.informasi");
Route::get("/informasi/{slug}", [WebController::class, "informasi_slug"])->name("website.informasi.slug");
Route::get("/informasi/tag/{slug}", [WebController::class, "informasi_tag_slug"])->name("website.informasi.tag.slug");

