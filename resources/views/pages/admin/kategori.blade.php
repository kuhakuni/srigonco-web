@extends('layouts.admin.template')
@section('main')
@include('components.header')
@include('components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Kategori Berita</h1>
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
            <form action="/dashboard/kategori" method="post">
                @csrf
                <label for="kategori" class="form-label">Kategori</label>
                <input class="form-control" type="text" name="kategori" required>
                <input type="submit" value="Tambah Data" class="btn text-white btn bg-primary my-2">
            </form>
        </div>

        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($kategori as $k)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td>{{$k->kategori}}</td>
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
                            href="{{ url("dashboard/kategori/delete/$k->slug") }}">Hapus</a>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/dashboard/kategori/update/{{$k->slug}}" method="post">
                                    @csrf
                                    <label for="kategori" class="form-label">Nama Kategori</label>
                                    <input class="form-control" type="text" name="kategori" id=""
                                        value="{{$k->kategori}}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input class="btn bg-primary text-white" type="submit" value="Simpan">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
@endsection