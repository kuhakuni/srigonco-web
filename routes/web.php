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
    return view('pages.web.homepage', ["route"=>"/"]);
});

Route::get('/login', function () {
    return view('pages.admin.login', ["route"=>"login"]);
});
Route::get('/berita', function () {
    return view('pages.web.berita', ["route"=>"berita"]);
});
Route::get('/umkm', function () {
    return view('pages.web.umkm', ["route"=>"umkm"]);
});
Route::get('/pariwisata', function () {
    return view('pages.web.pariwisata', ["route"=>"pariwisata"]);
});
Route::get('/profil', function () {
    return view('pages.web.profil', ["route"=>"profil"]);
});
Route::get('/administrasi', function () {
    return view('pages.web.administrasi', ["route"=>"administrasi"]);
});