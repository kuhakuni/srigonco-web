<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdministrasiController;
use App\Models\Administrasi;

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
    return view("pages.admin.login", ["route" => "login"]);
})->name('login')->middleware('guest');
Route::post("/login", [AdminController::class, "login"]);
Route::get("/logout", [AdminController::class, "logout"]);
Route::get("/dashboard", [AdministrasiController::class, "index"])->middleware('auth');


Route::prefix('dashboard')->group(function(){
    Route::group(['middleware' => 'auth'], function(){ // AUTH MIDDLEWARE
        // KATEGORI ROUTE
        Route::prefix('kategori')->group(function(){
            Route::controller(KategoriController::class)->group(function(){
                Route::get('/', 'index');   
                Route::post('/', 'store'); //ADD KATEGORI
                Route::get('/delete/{slug}', 'destroy'); //DELETE KATEGORI
                Route::post('/update/{slug}', 'update'); //UPDATE KATEGORI
            });
        });
        // KATEGORI ROUTE

        // BERITA ROUTE
        Route::prefix('berita')->group(function(){
            Route::controller(BeritaController::class)->group(function(){
                Route::get('/', 'index');   
                Route::post('/', 'store'); //ADD BERITA
                Route::get('/edit/{slug}', 'edit'); //EDIT BERITA
                Route::get('/delete/{slug}', 'destroy'); //DELETE BERITA
                Route::post('/update/{slug}', 'update'); //UPDATE BERITA
            });
        });
        // BERITA ROUTE


        // ADMINISTRASI ROUTE
        Route::prefix('administrasi')->group(function(){
            Route::controller(AdministrasiController::class)->group(function(){
                Route::get('/', 'index');  // SHOW ADMINISTRASI 
                Route::post('/', 'store'); //ADD ADMINISTRASI
                Route::get('/edit/{id}', 'edit'); //EDIT ADMINISTRASI
                Route::get('/delete/{id}', 'destroy'); //DELETE ADMINISTRASI
                Route::post('/update/{id}', 'update'); //UPDATE ADMINISTRASI
            });
        });
        // ADMINISTRASI ROUTE
        
    });
});
// ===========================================================


// ============================== MAIN ROUTE ==========================
Route::get("/", [MainController::class, "index"]);
Route::get("/berita", [MainController::class, "berita"]);
Route::get("/umkm", [MainController::class, "umkm"]);
Route::get("/profil", [MainController::class, "profil"]);
Route::get("/pariwisata", [MainController::class, "pariwisata"]);
Route::get("/administrasi", [MainController::class, "administrasi"]);
Route::post("/feedback", [MainController::class, "feedback"]);
// ============================== MAIN ROUTE ==========================
