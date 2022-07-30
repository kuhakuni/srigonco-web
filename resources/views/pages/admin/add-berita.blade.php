@extends('layouts.admin.template')
@section('main')
@include('components.header')
@include('components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Berita</h1>
    </div><!-- End Page Title -->
    <section class="section">
        {{-- FORM ADD DATA  --}}
        <form action="/dashboard/berita" method="post" enctype="multipart/form-data">
            @csrf
            <label for="gambar" class="form-label">Gambar Berita</label>
            <input type="file" name="gambar" class="form-control form-group" required>
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" name="judul" class="form-control form-group" required>
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea class="form-control my-2" name="isi" id="" cols="30" rows="10"></textarea>
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-select my-2" id="floatingSelect"
                aria-label="Floating label select example" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $k)
                <option value="{{$k->id}}">{{$k->kategori}}</option>
                @endforeach
            </select>
            <input type="submit" value="Tambah Data" class="text-white btn bg-primary">
        </form>
        {{-- END FORM  --}}
    </section>
</main>
@endsection