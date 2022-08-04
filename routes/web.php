<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\UmkmController;

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

// ========================= ADMIN ROUTE =====================
Route::get("/login", function () {
    return view("pages.admin.login");
})
    ->name("login")
    ->middleware("guest");
Route::get("/registrasi", function () {
    return view("pages.admin.registrasi", ["route" => "register"]);
});
Route::post("/register", [AdminController::class, "store"]);
Route::post("/login", [AdminController::class, "login"]);
Route::get("/logout", [AdminController::class, "logout"]);
Route::get("/dashboard", [AdminController::class, "index"])->middleware("auth");

Route::prefix("dashboard")->group(function () {
    Route::group(["middleware" => "auth"], function () {
        // AUTH MIDDLEWARE
        // KATEGORI ROUTE
        Route::prefix("kategori")->group(function () {
            Route::controller(KategoriController::class)->group(function () {
                Route::get("/", "index");
                Route::post("/", "store"); //ADD KATEGORI
                Route::get("/delete/{slug}", "destroy"); //DELETE KATEGORI
                Route::post("/update/{slug}", "update"); //UPDATE KATEGORI
            });
        });
        // KATEGORI ROUTE

        // BERITA ROUTE
        Route::prefix("berita")->group(function () {
            Route::controller(BeritaController::class)->group(function () {
                Route::get("/", "index");
                Route::post("/", "store"); //ADD BERITA
                Route::get("/edit/{slug}", "edit"); //EDIT BERITA
                Route::get("/delete/{slug}", "destroy"); //DELETE BERITA
                Route::post("/update/{slug}", "update"); //UPDATE BERITA
            });
        });
        // Pariwisata ROUTE
        // Pariwisata ROUTE
        Route::prefix("pariwisata")->group(function () {
            Route::controller(PariwisataController::class)->group(function () {
                Route::get("/", "index");
                Route::post("/", "store"); //ADD Pariwisata
                Route::get("/edit/{slug}", "edit"); //EDIT Pariwisata
                Route::get("/delete/{slug}", "destroy"); //DELETE Pariwisata
                Route::post("/update/{slug}", "update"); //UPDATE Pariwisata
            });
        });
        // BERITA ROUTE
        // UMKM ROUTE
        Route::prefix("umkm")->group(function () {
            Route::controller(UmkmController::class)->group(function () {
                Route::get("/", "index");
                Route::post("/", "store"); //ADD UMKM
                Route::get("/edit/{slug}", "edit"); //EDIT UMKM
                Route::get("/delete/{slug}", "destroy"); //DELETE UMKM
                Route::post("/update/{slug}", "update"); //UPDATE UMKM
            });
        });
        // UMKM ROUTE

        // PARIWISATA ROUTE
        Route::prefix("pariwisata")->group(function () {
            Route::controller(PariwisataController::class)->group(function () {
                Route::get("/", "index");
                Route::get("/tambah", "create"); // SHOW FORM ADD PARIWISATA
                Route::post("/", "store"); //ADD PARIWISATA
                Route::get("/edit/{slug}", "edit"); //EDIT PARIWISATA
                Route::get("/delete/{slug}", "destroy"); //DELETE PARIWISATA
                Route::post("/update/{slug}", "update"); //UPDATE PARIWISATA
            });
        });
        // PARIWISATA ROUTE

        // ADMINISTRASI ROUTE
        Route::prefix("administrasi")->group(function () {
            Route::controller(AdministrasiController::class)->group(
                function () {
                    Route::get("/", "index"); // SHOW ADMINISTRASI
                    Route::post("/", "store"); //ADD ADMINISTRASI
                    Route::get("/edit/{id}", "edit"); //EDIT ADMINISTRASI
                    Route::get("/delete/{id}", "destroy"); //DELETE ADMINISTRASI
                    Route::post("/update/{id}", "update"); //UPDATE ADMINISTRASI
                }
            );
        });
        // ADMINISTRASI ROUTE
    });
});
// ===========================================================

// ============================== MAIN ROUTE ==========================
Route::get("/", [MainController::class, "index"]);
Route::get("/berita", [BeritaController::class, "show"]);
Route::get("/berita/{slug}", [BeritaController::class, "show_detail"]);
Route::get("/berita/kategori/{slug}", [
    BeritaController::class,
    "show_by_kategori",
]);
Route::get("/umkm", [MainController::class, "umkm"]);
Route::get("/profil", [MainController::class, "profil"]);
Route::get("/pariwisata", [PariwisataController::class, "show"]);
Route::get("/administrasi", [MainController::class, "administrasi"]);
Route::post("/feedback", [MainController::class, "feedback"]);
// ============================== MAIN ROUTE ==========================