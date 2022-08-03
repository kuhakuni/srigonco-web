@extends('layouts.admin.template')
@section('main')
@include('components.header')
@include('components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Berita</h1>
    </div><!-- End Page Title -->

    <section class="section p-4 rounded-2 bg-white">
        <div class="row">
            <form
            action="/dashboard/berita"
            method="post"
            enctype="multipart/form-data"
            id="berita"
             >
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label"
                    >Judul Berita</label
                >
                <input
                    type="text"
                    name="judul"
                    id="judul"
                    class="form-control form-group"
                    value="{{$berita->judul}}"
                    required
                />
                @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label"
                    >Gambar Berita</label
                >
                <input
                    type="file"
                    name="gambar"
                    id="gambar"
                    class="form-control form-group"
                />
                @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Quill Editor Default -->
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Berita</label>
                <input type="hidden" name="isi" />
                <div id="editor" style="min-height: 160px"></div>
                @error('isi')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- End Quill Editor Default -->
            <div class="mb-3">
                <label for="kategori" class="form-label"
                    >Kategori</label
                >
                <select
                    name="kategori"
                    class="form-select my-2"
                    id="floatingSelect"
                    aria-label="Floating label select example"
                    required
                >
                    @foreach ($kategori as $k)
                    <option value="{{$k->id}}">{{$k->kategori}}</option>
                    @if ($berita->id_kategori === $k->id)
                    <option value="{{$k->id}}" selected>{{$k->kategori}}</option>
                    @endif
                    @endforeach
                </select>
                @error('kategori')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="slug" value="" id="slug">
            <input
                type="submit"
                value="Ubah Data"
                class="text-white btn bg-primary"
            />
        </form>
        </div>
    </section>
</main>
@endsection