<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Administrasi::all();
        return view("pages.admin.administrasi", [
            "admin" => $admin,
            "route" => "administrasi",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "url_download" => "required"
        ]);
        try {
            //code...
            Administrasi::create([
                "dokumen" => $validatedData["nama"],
                "url_download" => $validatedData["url_download"],
                "deskripsi" => $request->deskripsi,
            ]);
            Alert::success("Sukses!", "Data Berhasil Ditambahkan");
        } catch (\Throwable $th) {
            // dd($th);
            Alert::error("Error!", "Data Gagal Ditambahkan");
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrasi = Administrasi::where('id', $id)->first();
        // dd($administrasi);
        return view('pages.admin.edit.edit-administrasi', [
            'route' => 'administrasi',
            'a' => $administrasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            //code...
            $validatedData = $request->validate([
                "nama" => "required",
                "url_download" => "required"
            ]);
            
            $administrasi = Administrasi::where('id', $id)->first();
            $administrasi->dokumen = $validatedData["nama"];
            $administrasi->url_download = $validatedData["url_download"];
            $administrasi->deskripsi = $request->deskripsi;
            $administrasi->update();
            Alert::success("Sukses!", "Data Berhasil Diubah");
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error("Error!", "Data Gagal Dihapus");
        }
        return redirect('/dashboard/administrasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Administrasi::find($id, "id")->first();
        try {
            $admin->delete();
            Alert::success("Sukses!", "Data Berhasil Dihapus");
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error("Error!", "Data Gagal Dihapus");
        }
        return redirect()->back();
    }
}
