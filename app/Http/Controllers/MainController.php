<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Administrasi;
use App\Models\KritikSaran;
use Illuminate\Support\Arr;
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
        $administrasi_image = DB::query()
            ->select("*")
            ->from("administrasi")
            ->where("file", "like", "%.jpg")
            ->orWhere("file", "like", "%.png")
            ->orWhere("file", "like", "%.jpeg")
            ->orderBy("created_at")
            ->get();
        $administrasi_dokumen = DB::query()
            ->select("*")
            ->from("administrasi")
            ->where("file", "like", "%.pdf")
            ->orWhere("file", "like", "%.doc")
            ->orWhere("file", "like", "%.docx")
            ->orWhere("file", "like", "%.xls")
            ->orWhere("file", "like", "%.xlsx")
            ->orderBy("created_at")
            ->get();
        return view("pages.web.administrasi", [
            "route" => "administrasi",
            "title" => "Administrasi | Portal Srigonco",
            "administrasi_image" => $administrasi_image,
            "administrasi_dokumen" => $administrasi_dokumen,
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