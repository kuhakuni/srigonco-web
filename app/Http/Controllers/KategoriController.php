<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        // dd($kategori);
        return view(
            'pages.admin.kategori',
            [
                'route' => 'kategori',
                'kategori' => $kategori,
            ]
        );
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
            Kategori::create([
                'kategori' => $request->kategori,
                'slug' => Str::slug($request->kategori)
            ]);
            Alert::success(
                'Sukses!!',
                'Data Berhasil Ditambahkan'
            );
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Data Gagal Ditambahkan!!', 'Nama Kategori Harus Berbeda!!');
        }
        return redirect()->back();
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
    public function update(Request $request, $slug)
    {
        // dd($request);
        $kategori = Kategori::where('slug', $slug)->first();
        $kategori->kategori = $request->kategori;
        $kategori->slug = Str::slug($request->kategori);
        $kategori->update();
        Alert::success('Sukses!', 'Data Berhasil Diupdate');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
    $kategori = Kategori::where('slug', $slug)->first();
        // dd($kategori);
        try {
            //code...
            $kategori->delete();
            Alert::success('Sukses !!','Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Data Gagal Dihapus!!', 'Mohon Perhatikan apakah ada kategori yang akan dihapus pada data berita');
        }
        return redirect()->back();
    }
}
