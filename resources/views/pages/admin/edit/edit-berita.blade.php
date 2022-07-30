@extends('layouts.admin.template')
@section('main')
@include('components.header')
@include('components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Berita</h1>
        {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Alerts</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <form action="/dashboard/berita/update/{{$berita->slug}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="gambar" class="form-label">Gambar Berita</label>
                <input type="file" name="gambar" class="form-control form-group" value="{{$berita->image}}">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" name="judul" class="form-control form-group" value="{{$berita->judul}}" required>
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea class="form-control my-2" name="isi" id="" cols="30"
                    rows="10">{{$berita->isi_berita}}</textarea>
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" class="form-select my-2" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option value="{{$berita->id_kategori}}">{{$berita->kategori->kategori}}</option>
                    @foreach ($kategori as $k)
                    @if ($berita->id_kategori != $k->id)
                    <option value="{{$k->id}}">{{$k->kategori}}</option>
                    @endif
                    @endforeach
                </select>
                <input type="submit" value="Simpan Data" class="text-white btn bg-primary">
            </form>
        </div>
    </section>
</main>
@endsection