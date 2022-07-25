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

Route::get('/login', function () {
    return view('pages.admin.login');
});
Route::get('/berita', function () {
    return view('pages.web.berita');
});
Route::get('/umkm', function () {
    return view('pages.web.umkm');
});
Route::get('/profil', function () {
    return view('pages.web.profil');
});
Route::get('/administrasi', function () {
    return view('pages.web.administrasi');
});
