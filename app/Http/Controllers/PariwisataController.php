<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pariwisata;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
            "pariwisata" => DB::table("pariwisata")
                ->orderBy("nama", "asc")
                ->paginate(3),
        ]);
    }
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
                "url_gmaps" => !empty($request->input("url_gmaps"))
                    ? $request->url_gmaps
                    : "#",
                "no_telp" => $request->no_telp,
                "image" => $image_name,
            ]);
            Alert::success("Sukses!", "Data Berhasil Ditambahkan");
        } catch (\Throwable $th) {
            dd($th);
            Alert::error("Error", "Terjadi Kesalahan");
        }

        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        try {
            $pariwisata = Pariwisata::where("slug", $slug)->first();
        } catch (\Throwable $th) {
            $pariwisata = null;
        }
        return view("pages.admin.edit.edit-pariwisata", [
            "route" => "pariwisata",
            "pariwisata" => $pariwisata,
            "edit" => true,
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
            "nama" => "required|max:60",
            "gambar" => "bail|image|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "alamat" => "required",
            "no_telp" => "numeric",
            "deskripsi" => "required|max:500",
        ]);
        $pariwisata = Pariwisata::where("slug", $slug)->first();
        if ($request->file("gambar") != null) {
            $gblama = $pariwisata->image;
            if ($gblama !== "template.jpg") {
                Storage::delete("public/img-pariwisata/" . $gblama);
            }
            $ext = $request->file("gambar")->extension();
            $name = "pariwisata-" . time() . "." . $ext;
            $request->file("gambar")->storeAs("public/img-pariwisata/", $name);
            $pariwisata->image = $name;
        }
        $pariwisata->nama = $validatedData["nama"];
        $pariwisata->slug = Str::slug($validatedData["nama"]);
        $pariwisata->deskripsi = $validatedData["deskripsi"];
        $pariwisata->no_telp = $validatedData["no_telp"];
        $pariwisata->alamat = $validatedData["alamat"];
        $pariwisata->url_gmaps = !empty($request->input("url_gmaps"))
            ? $request->url_gmaps
            : "#";
        $pariwisata->update();

        Alert::success("Sukses!", "Data Berhasil Diubah!");
        return redirect("/dashboard/pariwisata");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $pariwisata = Pariwisata::where("slug", $slug)->first();
        $filename = $pariwisata->image;
        $pariwisata->delete();
        if ($filename !== "template.jpg") {
            Storage::delete("public/img-pariwisata/" . $filename);
        }
        Alert::success("Sukses!", "Data Berhasil Dihapus");
        return redirect()->back();
    }
}