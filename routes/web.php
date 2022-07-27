<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get("/", [MainController::class, "index"]);

Route::get("/login", function () {
    return view("pages.admin.login", ["route" => "login"]);
});
Route::get("/berita", [MainController::class, "berita"]);
Route::get("/umkm", [MainController::class, "umkm"]);
Route::get("/profil", [MainController::class, "profil"]);
Route::get("/administrasi", [MainController::class, "administrasi"]);
