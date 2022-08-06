<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "file" =>
                "required|file|mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx|max:2048",
        ]);
        if (isset($validatedData["file"])) {
            $file = $validatedData["file"];
            $ext = $file->extension();
            $name = Str::slug($validatedData["nama"]) . "." . $ext;
            $file->storeAs("public/dokumen-administrasi/", $name);
        }
        try {
            Administrasi::create([
                "nama" => $validatedData["nama"],
                "file" => $name,
                "deskripsi" => $request->deskripsi,
            ]);
            Alert::success("Sukses!", "Data Berhasil Ditambahkan");
        } catch (\Throwable $th) {
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
    public function show($slug)
    {
        $path = public_path("storage/dokumen-administrasi/" . $slug);
        return response()->file($path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrasi = Administrasi::where("id", $id)->first();
        // dd($administrasi);
        return view("pages.admin.edit.edit-administrasi", [
            "route" => "administrasi",
            "a" => $administrasi,
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
                "file" => "file|mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx|max:2048",
            ]);
            $administrasi = Administrasi::where("id", $id)->first();
            if ($request->file("file") != null) {
                $oldname = $administrasi->file;
                Storage::delete("public/dokumen-administrasi/" . $oldname);
                $ext = $request->file("file")->extension();
                $name = Str::slug($validatedData["nama"]) . "." . $ext;
                $request
                    ->file("file")
                    ->storeAs("public/dokumen-administrasi/", $name);
                $administrasi->file = $name;
            } else{
                $str = explode(".", $administrasi->file);
                $ext = $str[1];
                $name = Str::slug($request->nama);
                $name = "$name.$ext";
                Storage::move("public/dokumen-administrasi/". $administrasi->file,"public/dokumen-administrasi/" . $name);
                $administrasi->file = $name;
            }
            $administrasi->nama = $validatedData["nama"];
            $administrasi->deskripsi = $request->deskripsi;
            $administrasi->update();
            Alert::success("Sukses!", "Data Berhasil Diubah");
        } catch (\Throwable $th) {
            throw $th;
            // Alert::error("Error!", "Data Gagal Diubah");
        }
        return redirect("/dashboard/administrasi");
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
        $path = public_path("storage/dokumen-administrasi/" . $slug);
        $headers = [
            "Content-Description" => "File Transfer",
            "Content-Type" => "application/pdf",
        ];
        return response()->download($path, $slug, $headers);
    }
}