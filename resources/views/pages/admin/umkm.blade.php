@extends('layouts.admin.template') @section('main')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data UMKM</h1>
    </div>
    <!-- End Page Title -->

    <section class="section">
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p class="fw-bold">Error</p>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
        @endif
        <table class="table table-borderless datatable bg-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @php $i=1; @endphp @foreach ($umkm as $u)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td>{{$u->nama}}</td>
                    <td>{{$u->alamat}}</td>
                    <td>
                        <a class="btn bg-warning text-white" href="{{ url('dashboard/umkm/edit/' . $u->slug) }}"><i
                                class="bi bi-pencil-fill"></i></a>
                        <a class="btn btn-danger text-white"
                            onclick="return confirm('Apakah anda yakin akan menghapus umkm tersebut?')"
                            href="{{ url('dashboard/umkm/delete/' . $u->slug) }}"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr />
        <div class="card p-4">
            <div class="row">
                <div class="pagetitle">
                    <h1>Tambah UMKM</h1>
                </div>
                <form action="/dashboard/umkm" method="post" enctype="multipart/form-data"
                    class="needs-validation" id="pariwisata">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama UMKM</label>
                        <input type="text" name="nama" id="nama" placeholder="Keripik Pisang..."
                            class="@error('nama') is-invalid @enderror form-control form-group" required />
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Foto Pariwisata <span class="text-muted">(Max. 2
                                MB)</span></label>
                        <input type="file" name="gambar" id="gambar"
                            class="@error('gambar') is-invalid @enderror form-control form-group" />
                        @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Jl. Balekambang No.17, Srigonco, Bantur"
                            class="form-control form-group @error('alamat') is-invalid @enderror" required />
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="no_telp" class="form-label">Nomor Telepon <span class="text-muted">(bila
                                        ada)</span></label>
                                <input type="number" name="no_telp" id="no_telp" placeholder="081234567890"
                                    class="form-control form-group @error('no_telp') is-invalid @enderror" />
                                @error('no_telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="url_gmaps" class="form-label">Link Google Maps <span
                                        class="text-muted">(bila ada)</span></label>
                                <input type="text" name="url_gmaps" id="url_gmaps" placeholder="https://goo.gl/maps/Rne1vvv4wpoCia4j7"
                                    class="form-control form-group @error('url_gmaps') is-invalid @enderror" />
                                @error('url_gmaps')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="url_ecommerce" class="form-label">E-commerce UMKM <span class="text-muted">(bila ada)</span> </label>
                        <input type="text" name="url_ecommerce" id="url_ecommerce"
                            class="@error('url_ecommerce') is-invalid @enderror form-control form-group" placeholder="https://shopee.co.id/Keripik-Pisang-Original...." required />
                        @error('url_ecommerce')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deksripsi</label>
                <textarea class="form-control form-group @error('deskripsi') is-invalid @enderror" name="deskripsi"
                    id="deskripsi" cols="30" rows="10" placeholder="UMKM yang menghasilkan keripik pisang..." required></textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="slug" value="" id="slug">
            <input type="submit" value="Tambah Data" class="text-white btn bg-primary" />
            </form>
        </div>
        </div>
    </section>
</main>
@endsection