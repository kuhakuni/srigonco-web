<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Administrasi;
use App\Models\KritikSaran;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MainController extends Controller
{
    public function index()
    {
        $latest_news = Berita::query()
            ->latest("created_at")
            ->limit(3)
            ->get();
        $umkm = DB::table("umkm")
            ->orderBy("nama", "asc")
            ->limit(3)
            ->get();
        return view("pages.web.homepage", [
            "latest_news" => $latest_news,
            "route" => "/",
            "umkm" => $umkm,
        ]);
    }
    public function profil()
    {
        return view("pages.web.profil", [
            "route" => "profil",
            "title" => "Profil | Portal Srigonco",
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