@extends('layouts.admin.template')
@section('main')
@include('components.header')
@include('components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Pariwisata</h1>
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
            <form action="/dashboard/pariwisata" method="post">
                @csrf
                <label for="nama" class="form-label">Data Pariwisata</label>
                <input class="form-control" type="text" name="nama" required>
                <input type="submit" value="Tambah Data" class="btn text-white btn bg-primary my-2">
            </form>
        </div>

        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Pariwisata</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telp.</th>
                    <th scope="col">Maps</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($pariwisata as $p)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td> <img src="" alt=""> </td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->deskripsi}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->no_telp}}</td>
                    <td> <a class="btn btn-primary" href="{{ $p->url_gmaps }}" target="_blank" rel="noopener noreferrer"></a> </td>
                    <td>
                        {{-- <a class="btn bg-primary text-white"
                            href="{{ url("dashboard/kategori/edit/$k->slug") }}">Edit</a> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn bg-primary text-white" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Edit
                        </button>
                        <a class="btn btn-danger text-white"
                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data?')"
                            href="{{ url("dashboard/kategori/delete/$p->slug") }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
@endsection