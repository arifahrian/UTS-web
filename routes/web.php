<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BisaController;

Route::get("/uts", [BisaController::class, "wow"]);

Route::get("/hallo", [BisaController::class, "uwu"]);

use App\Http\Controllers\UtsController;
Route::get("/tes/satu", [UtsController::class, "pertama"]);
Route::get("/tes/dua", [UtsController::class, "kedua"]);
Route::get("/tes/tiga", [UtsController::class, "ketiga"]);
Route::get("/tes/empat", [UtsController::class, "keempat"]);

use App\Http\Controllers\FormController;
Route::get("/pendaftar/baru", [FormController::class, "baru"])->name("pendaftar_baru");
Route::post("/pendaftar/kuy", [FormController::class, "kuy"])->name("pendaftar_kuy");
