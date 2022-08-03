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
        <a href="{{ url('dashboard/pariwisata/tambah') }}" class="btn bg-primary text-white my-2">Tambah Data</a>

        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Pariwisata</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Alamat</th>
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
                    <td> <img src="{{Storage::url('img-pariwisata/'.$p->image)}}" alt="Missing Photo" width="250px">
                    </td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->deskripsi}}</td>
                    <td>{{$p->alamat}}</td>
                    <td> <a class="btn btn-primary " href="{{ $p->url_gmaps }}" target="_blank"
                            rel="noopener noreferrer">Link Gmaps</a> </td>
                    <td>
                        <a class="btn bg-primary text-white" href="{{ url("dashboard/pariwisata/edit/$p->slug") }}">Edit</a>
                        <a class="btn btn-danger text-white"
                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data?')"
                            href="{{ url("dashboard/pariwisata/delete/$p->slug") }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
@endsection