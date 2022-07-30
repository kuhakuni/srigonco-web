<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $berita = Berita::all();
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
            "berita" => Berita::all(),
            "categories" => Kategori::all(),
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
        ]);
    }
    /**
     * Show
     */
    public function show_by_kategori($slug)
    {
        $kategori = Kategori::where("slug", $slug)->get();
        $berita = $kategori->isEmpty()
            ? []
            : Berita::where("kategori_id", $kategori[0]->id)->get();
        return view("pages.web.berita", [
            "route" => "berita",
            "title" => "Berita | Portal Srigonco",
            "berita" => $berita,
            "categories" => Kategori::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pages.admin.add-berita', [
            'route' => 'tambah_berita',
            'kategori' => $kategori,
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
        $gambar = $request->file("gambar");
        $ext = $gambar->extension();
        $name = time() . "." . $ext;
        // dd($request);
        // $isi = nl2br($request->isi, false);
        $gambar->storeAs("public/img-berita/", $name);
        // dd($isi);
        try {
            Berita::create([
                "judul" => $request->judul,
                "image" => $name,
                "slug" => Str::slug($request->judul),
                "isi_berita" => $request->isi,
                "id_kategori" => $request->kategori,
            ]);
            Alert::success(["Sukses!", "Data Berhasil Ditambahkan"]);
        } catch (\Throwable $th) {
            Alert::error("Tambah Data Gagal", "Judul Tidak Boleh Sama!");
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
        $berita = Berita::where("slug", $slug)->first();
        $kategori = Kategori::all();
        return view("pages.admin.edit.edit-berita", [
            "route" => "berita",
            "berita" => $berita,
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
        $berita = Berita::where("slug", $slug)->first();
        if ($request->file("gambar") != null) {
            $gblama = $berita->image;
            Storage::delete("public/img-berita/" . $gblama);
            $ext = $request->file("gambar")->extension();
            $name = time() . "." . $ext;
            $request->file("gambar")->storeAs("public/img-berita/", $name);
            $berita->image = $name;
        }
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi;
        $berita->slug = Str::slug($request->judul);
        $berita->id_kategori = $request->kategori;
        $berita->update();

        Alert::success("Sukses!", "Data Berhasil Diupdate!");
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
        Storage::delete("public/img-berita/" . $filename);
        Alert::success(["Sukses!", "Data Berhasil Dihapus"]);
        return redirect()->back();
    }
}
