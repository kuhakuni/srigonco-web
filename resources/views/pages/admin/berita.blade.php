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
            <form action="/dashboard/berita" method="post" enctype="multipart/form-data">
                @csrf
                <label for="gambar" class="form-label">Gambar Berita</label>
                <input type="file" name="gambar" class="form-control form-group" required>
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" name="judul" class="form-control form-group" required>
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea class="form-control my-2" name="isi" id="" cols="30" rows="10"></textarea>
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" class="form-select my-2" id="floatingSelect" aria-label="Floating label select example" required>
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategori as $k)
                    <option value="{{$k->id}}">{{$k->kategori}}</option>
                    @endforeach
                </select>
                <input type="submit" value="Tambah Data" class="text-white btn bg-primary">
            </form>
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