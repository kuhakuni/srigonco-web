<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pariwisata;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pariwisata = Pariwisata::all();
        return view('pages.admin.pariwisata', [
            'route' => 'pariwisata',
            'pariwisata' => $pariwisata,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.add-pariwisata', [
            'route' => 'pariwisata',
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
        try {
            $gambar = $request->file("gambar");
            $ext = $gambar->extension();
            $name = time() . "." . $ext;
            $gambar->storeAs("public/img-pariwisata/", $name);
            Pariwisata::create([
                'nama' => $request->judul,
                'slug' => Str::slug($request->judul),
                'deskripsi' => $request->isi,
                'alamat' => $request->alamat,
                'image' => $name,
                'url_gmaps' => $request->maps,
            ]);        
            Alert::success('Sukses!', 'Data Berhasil Ditambahkan');    
        } catch (\Throwable $th) {
            Alert::error("Tambah Data Gagal", $th);
        }
        return redirect('/dashboard/pariwisata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $pariwisata = Pariwisata::where('slug', $slug)->first();
        return view('pages.admin.edit.edit-pariwisata', [
            'route' => 'pariwisata',
            'pariwisata' => $pariwisata,
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
        try {
            $pariwisata = Pariwisata::where("slug", $slug)->first();
            if ($request->file("gambar") != null) {
            $gblama = $pariwisata->image;
            Storage::delete("public/img-pariwisata/" . $gblama);
            $ext = $request->file("gambar")->extension();
            $name = time() . "." . $ext;
            $request->file("gambar")->storeAs("public/img-berita/", $name);
            $pariwisata->image = $name;
        }
        $pariwisata->nama = $request->judul;
        $pariwisata->deskripsi = $request->isi;
        $pariwisata->slug = Str::slug($request->judul);
        $pariwisata->url_gmaps = $request->maps;
        $pariwisata->alamat = $request->alamat;
        $pariwisata->update();
        Alert::success("Sukses!", "Data Berhasil Diupdate!");
    } catch (\Throwable $th) {
        Alert::error("Gagal!", "Nama Tidak Boleh Sama");
    }
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
        try {
            $pariwisata = Pariwisata::where("slug", $slug)->first();
            $filename = $pariwisata->image;
            // dd($filename);
            $pariwisata->delete();
            Storage::delete("public/img-pariwisata/" . $filename);
            Alert::success(["Sukses!", "Data Berhasil Dihapus"]);
        } catch (\Throwable $th) {
            Alert::error(["Gagal!", "Data Gagal Dihapus"]);
            //throw $th;
        }
        return redirect()->back();
    }
}