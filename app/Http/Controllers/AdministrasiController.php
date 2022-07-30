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
        return view('pages.admin.administrasi', [
            'surat' => $admin,
            'route' => 'administrasi'
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
            //code...
            Administrasi::create([
                'dokumen' => $request->judul,
                'url_download' => $request->link_download,
                'deskripsi' => $request->deskripsi,
            ]);
            Alert::success('Sukses!', 'Data Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            Alert::error('Error!', 'Data Gagal Ditambahkan');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Administrasi $administrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrasi $administrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrasi $administrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrasi  $administrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Administrasi::find( $id, 'id')->first();
        try {
            $admin->delete();
            Alert::success('Sukses!', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error!', 'Data Gagal Dihapus');
        }
        return redirect()->back();
    }
}
