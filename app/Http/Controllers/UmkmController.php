<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\UMKM;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umkm = UMKM::all();
        return view("pages.admin.umkm", [
            "route" => "umkm",
            "umkm" => $umkm,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "gambar" => "bail|image|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "alamat" => "required",
            "deskripsi" => "max:500",
        ]);
        if (isset($validatedData["gambar"])) {
            $gambar = $validatedData["gambar"];
            $ext = $gambar->extension();
            $image_name = "umkm-" . time() . "." . $ext;
            $gambar->storeAs("public/img-umkm/", $image_name);
        } else {
            $image_name = "template.png";
        }
        try {
            UMKM::create([
                "nama" => $validatedData["nama"],
                "slug" => Str::slug($validatedData["nama"]),
                "deskripsi" => $request->deskripsi,
                "alamat" => $validatedData["alamat"],
                "url_gmaps" => $request->url_gmaps,
                "no_telp" => $request->no_telp,
                "url_ecommerce" => $request->url_ecommerce,
                "image" => $image_name,
            ]);
            Alert::success("Sukses!", "Data Berhasil Ditambahkan");
        } catch (\Throwable $th) {
            // dd($th);
            Alert::error("Error", "Terjadi Kesalahan");
        }

        // dd($request->isi);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("pages.web.umkm", [
            "route" => "umkm",
            "title" => "UMKM | Portal Srigonco",
            "umkm" => DB::table("umkm")
                ->orderBy("nama", "asc")
                ->paginate(3),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $umkm = UMKM::where("slug", $slug)->first();
        return view("pages.admin.edit.edit-umkm", [
            "route" => "umkm",
            "umkm" => $umkm,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "gambar" => "image|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
        $umkm = UMKM::where("slug", $slug)->first();
        if ($request->file("gambar") != null) {
            $gblama = $umkm->image;
            if ($gblama !== "template.png") {
                Storage::delete("public/img-umkm/" . $gblama);
            }
            $ext = $request->file("gambar")->extension();
            $name = "umkm-" . time() . "." . $ext;
            $request->file("gambar")->storeAs("public/img-umkm/", $name);
            $umkm->image = $name;
        }
        $umkm->nama = $validatedData["nama"];
        $umkm->deskripsi = $request->deskripsi;
        $umkm->slug = Str::slug($validatedData["nama"]);
        $umkm->alamat = $validatedData["alamat"];
        $umkm->url_gmaps = $request->url_gmaps;
        $umkm->no_telp = $request->no_telp;
        $umkm->url_ecommerce = $request->url_ecommerce;
        $umkm->update();

        Alert::success("Sukses!", "Data Berhasil Diubah!");
        return redirect("/dashboard/umkm");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $umkm = UMKM::where("slug", $slug)->first();
        $filename = $umkm->image;
        // dd($filename);
        $umkm->delete();
        if ($filename !== "template.jpg") {
            Storage::delete("public/img-umkm/" . $filename);
        }
        Alert::success("Sukses!", "Data Berhasil Dihapus");
        return redirect()->back();
    }
}