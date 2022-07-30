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
        </div>

        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($berita as $b)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td><img src="{{Storage::url('img-berita/'.$b->image)}}" alt="" width="150px" ></td>
                    <td>{{$b->judul}}</td>
                    <td>{{substr(strip_tags($b->isi_berita), 0, 200)}} {{ strlen(strip_tags($b->isi_berita)) > 50 ? "..." : "" }}</td>
                    <td>{{$b->kategori->kategori}}</td>
                    <td>
                        <a class="btn bg-primary text-white"
                            href="{{ url("dashboard/berita/edit/$b->slug") }}">Edit</a>
                        <a class="btn btn-danger text-white"
                            href="{{ url("dashboard/berita/delete/$b->slug") }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
@endsection