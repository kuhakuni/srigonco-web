@extends('layouts.admin.template')
@section('main')
@include('components.header')
@include('components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Dokumen</h1>
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
            <form action="/dashboard/administrasi" method="post" enctype="multipart/form-data">
                @csrf
                <label for="judul" class="form-label">Judul Dokumen</label>
                <input type="text" name="judul" class="form-control form-group" required>
                <label for="deskripsi" class="form-label">Deskripsi Dokumen</label>
                <textarea class="form-control my-2" name="deskripsi" id="" cols="30" rows="10"></textarea>
                <label for="link_download" class="form-label">Link Download</label>
                <input type="text" name="link_download" class="form-control form-group my-2" required>
                <input type="submit" value="Tambah Data" class="text-white btn bg-primary">
            </form>
        </div>

        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Dokumen</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Link Download</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($surat as $s)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td>{{$s->dokumen}}</td>
                    <td>{{substr(strip_tags($s->deskripsi), 0, 200)}} {{ strlen(strip_tags($s->deskripsi)) > 50 ? "..." : "" }}</td>
                    <td><a target="_blank" href="{{$s->url_download}}" class="btn bg-primary text-white">Download</a></td>
                    <td>
                        <a class="btn bg-primary text-white"
                            href="{{ url("dashboard/administrasi/edit/$s->id") }}">Edit</a>
                        <a class="btn btn-danger text-white"
                            href="{{ url("dashboard/administrasi/delete/$s->id") }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
@endsection