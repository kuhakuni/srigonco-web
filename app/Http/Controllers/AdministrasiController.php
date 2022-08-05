<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        try {
            // dd($request->file);
            $validatedData = $request->validate([
                "nama" => "required",
                "file" => "required"
            ]);
            //code...
            if (isset($validatedData['file'])) {
                $file = $validatedData['file'];
                $ext = $file->extension();
                $name = Str::slug($validatedData['nama']) . "." . $ext;
                $file->storeAs("public/dokumen-administrasi/", $name);
            }
            Administrasi::create([
                "nama" => $validatedData["nama"],
                "file" => $name,
                "deskripsi" => $request->deskripsi,
            ]);
            Alert::success("Sukses!", "Data Berhasil Ditambahkan");
        } catch (\Throwable $th) {
            dd($th);
            // Alert::error("Error!", "Data Gagal Ditambahkan");
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
                "file" => ""
            ]);
            $administrasi = Administrasi::where('id', $id)->first();
            if ($request->file("file") != null) {
                $oldname = $administrasi->file;
                Storage::delete("public/dokumen-administrasi/" . $oldname);
                $ext = $request->file("file")->extension();
                $name = Str::slug($validatedData['nama']) . "." . $ext;
                $request->file("file")->storeAs("public/dokumen-administrasi/", $name);
                $administrasi->file = $name;
            }
            $administrasi->nama = $validatedData["nama"];
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
            Storage::delete("public/dokumen-administrasi/" . $admin->file);
            $admin->delete();
            Alert::success("Sukses!", "Data Berhasil Dihapus");
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error("Error!", "Data Gagal Dihapus");
        }
        return redirect()->back();
    }

    public function download($slug)
    {
        $path = Storage::disk('public')->path("dokumen-administrasi/" . $slug);
        $content = file_get_contents($path);

        $headers = [
            'Content-Description' => 'File Transfer',
            'Content-Type' => 'application/pdf',
        ];
        return response($content)->withHeaders($headers);
    }
}
