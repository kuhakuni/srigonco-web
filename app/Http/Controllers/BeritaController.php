<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $berita = Berita::latest()->get();
        $kategori = Kategori::all();
        return view("pages.admin.berita", [
            "route" => "berita",
            "berita" => $berita,
            "kategori" => $kategori,
        ]);
    }
    /**
     * Show berita
     */
    public function show()
    {
        return view("pages.web.berita", [
            "route" => "berita",
            "title" => "Berita | Portal Srigonco",
            "berita" => DB::table("berita")
                ->orderBy("created_at", "desc")
                ->paginate(5),
            "categories" => Kategori::orderBy("kategori")->get(),
            "recent_news" => Berita::latest()
                ->limit(3)
                ->get(),
        ]);
    }

    /**
     * Show berita by id
     */
    public function show_detail($slug)
    {
        $berita = Berita::where("slug", $slug)->get();
        return view("pages.web.berita-single", [
            "route" => "berita",
            "title" => "Berita | Portal Srigonco",
            "berita" => $berita,
            "categories" => Kategori::all(),
            "recent_news" => Berita::latest()
                ->limit(3)
                ->get(),
        ]);
    }
    /**
     * Show
     */
    public function show_by_kategori($slug)
    {
        try {
            $kategori = Kategori::where("slug", $slug)->get[0];
            $berita = Berita::where("id_kategori", $kategori->id)->paginate(5);
        } catch (\Throwable $th) {
            $kategori = null;
            $berita = null;
        }
        return view("pages.web.berita", [
            "route" => "berita",
            "title" => "Berita | Portal Srigonco",
            "berita" => $berita,
            "kategori" => $kategori,
            "categories" => Kategori::all(),
            "recent_news" => Berita::latest()
                ->limit(3)
                ->get(),
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
            "judul" => "required",
            "kategori" => "required",
            "isi" => "required",
            "gambar" => "image|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
        // dd($validatedData);
        if (isset($validatedData["gambar"])) {
            $gambar = $validatedData["gambar"];
            $ext = $gambar->extension();
            $name = "berita-" . time() . "." . $ext;
            $gambar->storeAs("public/img-berita/", $name);
        } else {
            $name = "template.jpg";
        }
        $slug = Str::slug($validatedData["judul"]);
        try {
            Berita::create([
                "judul" => $validatedData["judul"],
                "image" => $name,
                "slug" => $slug,
                "isi_berita" => $validatedData["isi"],
                "id_kategori" => $validatedData["kategori"],
            ]);
            Alert::success("Sukses!", "Data Berhasil Ditambahkan");
        } catch (\Throwable $th) {
            Alert::error("Error", "Judul Tidak Boleh Sama!");
        }

        // dd($request->isi);
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
            $berita = Berita::where("slug", $slug)->first();
        } catch (\Throwable $th) {
            $berita = null;
        }
        $kategori = Kategori::all();
        return view("pages.admin.edit.edit-berita", [
            "route" => "berita",
            "berita" => $berita,
            "edit" => true,
            "kategori" => $kategori,
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
            "judul" => "required",
            "kategori" => "required",
            "isi" => "required |",
            "gambar" => "image|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
        $berita = Berita::where("slug", $slug)->first();
        if ($request->file("gambar") != null) {
            $gblama = $berita->image;
            Storage::delete("public/img-berita/" . $gblama);
            $ext = $request->file("gambar")->extension();
            $name = "berita-" . time() . "." . $ext;
            $request->file("gambar")->storeAs("public/img-berita/", $name);
            $berita->image = $name;
        }
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi;
        $berita->slug = Str::slug($request->judul);
        $berita->id_kategori = $request->kategori;
        $berita->update();

        Alert::success("Sukses!", "Data Berhasil Diubah!");
        return redirect("/dashboard/berita");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $berita = Berita::where("slug", $slug)->first();
        $filename = $berita->image;
        // dd($filename);
        $berita->delete();
        if ($filename !== "template.jpg") {
            Storage::delete("public/img-berita/" . $filename);
        }
        Alert::success("Sukses!", "Data Berhasil Dihapus");
        return redirect()->back();
    }
}