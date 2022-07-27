<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.web.homepage', [
            "route"=>"/"
        ]);
    }
    public function profil(){
        return view('pages.web.profil', [
            "route"=>"profil",
            "title"=>"Profil | Portal Srigonco"
        ]);
    }
    public function berita(){
        return view('pages.web.berita', [
            "route"=>"berita",
            "title"=>"Berita | Portal Srigonco"
        ]);
    }
    public function detail_berita($id){
        $berita = Berita::find($id);
        return view('pages.web.berita_detail', [
            "route"=>"berita",
            "berita"=>$berita,
            "title"=> $berita->judul." | Portal Srigonco"
        ]);
    }
    public function umkm(){
        return view('pages.web.umkm', [
            "route"=>"umkm",
            "title"=>"UMKM | Portal Srigonco"
        ]);
    }
    public function pariwisata(){
        return view('pages.web.pariwisata', [
            "route"=>"pariwisata",
            "title"=>"Pariwisata | Portal Srigonco"
        ]);
    }
    public function administrasi(){
        return view('pages.web.administrasi', [
            "route"=>"administrasi",
            "title"=>"Administrasi | Portal Srigonco"
        ]);
    }
    
}