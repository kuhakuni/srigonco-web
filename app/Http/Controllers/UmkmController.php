<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\UMKM;
use Illuminate\Support\Facades\DB;

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
            $gambar->storeAs("public/img-pariwisata/", $image_name);
        } else {
            $image_name = "template.jpg";
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
            dd($th);
            // Alert::error("Error", "Terjadi Kesalahan");
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}