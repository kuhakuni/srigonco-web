<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pariwisata;
use App\Models\Administrasi;
use App\Models\KritikSaran;
use RealRashid\SweetAlert\Facades\Alert;

class MainController extends Controller
{
    public function index()
    {
        $latest_news = Berita::query()
            ->latest("created_at")
            ->limit(3)
            ->get();
        return view("pages.web.homepage", [
            "route" => "/",
            "latest_news" => $latest_news,
        ]);
    }
    public function profil()
    {
        return view("pages.web.profil", [
            "route" => "profil",
            "title" => "Profil | Portal Srigonco",
        ]);
    }
    public function detail_berita($id)
    {
        $berita = Berita::find($id);
        return view("pages.web.berita_detail", [
            "route" => "berita",
            "berita" => $berita,
            "title" => $berita->judul . " | Portal Srigonco",
        ]);
    }
    public function umkm()
    {
        return view("pages.web.umkm", [
            "route" => "umkm",
            "title" => "UMKM | Portal Srigonco",
        ]);
    }
    public function pariwisata()
    {
        $pariwisata = Pariwisata::all();
        return view("pages.web.pariwisata", [
            "route" => "pariwisata",
            "title" => "Pariwisata | Portal Srigonco",
            "pariwisata" => $pariwisata,
        ]);
    }
    public function administrasi()
    {
        $administrasi = Administrasi::all();
        return view("pages.web.administrasi", [
            "route" => "administrasi",
            "title" => "Administrasi | Portal Srigonco",
            "administrasi" => $administrasi,
        ]);
    }
    public function feedback()
    {
        $validatedData = request()->validate([
            "nama" => "required",
            "email" => "required|email ",
            "kritik_saran" => "required | max:255",
        ]);
        KritikSaran::create($validatedData);
        Alert::success(
            "Terima kasih",
            "Kritik dan saran anda berhasil terkirim"
        );
        return redirect()->back();
    }
}
