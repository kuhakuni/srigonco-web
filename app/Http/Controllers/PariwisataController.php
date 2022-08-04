<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pariwisata;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PariwisataController extends Controller
{
    public function index()
    {
        $pariwisata = Pariwisata::all();
        return view("pages.admin.pariwisata", [
            "route" => "pariwisata",
            "pariwisata" => $pariwisata,
        ]);
    }
    /**
     * Show pariwisata
     */
    public function show()
    {
        return view("pages.web.pariwisata", [
            "route" => "pariwisata",
            "title" => "Pariwisata | Portal Srigonco",
            "pariwisata" => Pariwisata::latest()->get(),
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->no_telp);
        $validatedData = $request->validate([
            "nama" => "required",
            "gambar" => "bail|image|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "alamat" => "required",
            "deskripsi" => "max:500",
        ]);
        if (isset($validatedData["gambar"])) {
            $gambar = $validatedData["gambar"];
            $ext = $gambar->extension();
            $image_name = "pariwisata-" . time() . "." . $ext;
            $gambar->storeAs("public/img-pariwisata/", $image_name);
        } else {
            $image_name = "template.jpg";
        }
        try {
            Pariwisata::create([
                "nama" => $validatedData["nama"],
                "slug" => Str::slug($validatedData["nama"]),
                "deskripsi" => $request->deskripsi,
                "alamat" => $validatedData["alamat"],
                "url_gmaps" => $request->url_gmaps,
                'no_telp' => $request->no_telp,
                "image" => $image_name,
            ]);
            Alert::success("Sukses!", "Data Berhasil Ditambahkan");
        } catch (\Throwable $th) {
            Alert::error("Error", "Terjadi Kesalahan");
        }

        // dd($request->isi);
        return redirect()->back();
    }
}