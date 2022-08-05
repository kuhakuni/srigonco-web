@extends('layouts.admin.template') @section('main')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Dokumen Administrasi</h1>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <table class="table table-borderless datatable bg-white">
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
                @php $i=1; @endphp @foreach ($admin as $a)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td>{{$a->dokumen}}</td>
                    <td>{{$a->deskripsi}}</td>
                    <td> <a target="_blank" href="{{$a->url_download}}" class="btn btn-primary"> <i class="bi bi-download"></i> </a> </td>
                    <td>
                        <a class="btn bg-warning text-white" href="{{ url('dashboard/administrasi/edit/' . $a->id) }}"><i
                                class="bi bi-pencil-fill"></i></a>
                        <a class="btn btn-danger text-white"
                            onclick="return confirm('Apakah anda yakin akan menghapus data tersebut?')"
                            href="{{ url('dashboard/administrasi/delete/' . $a->id) }}"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr />
        <div class="card p-4">
            <div class="row">
                <div class="pagetitle">
                    <h1>Tambah Data Adminsitrasi</h1>
                </div>
                <form action="/dashboard/administrasi" method="post" enctype="multipart/form-data" class="needs-validation"
                    id="pariwisata">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Dokumen</label>
                        <input type="text" name="nama" id="nama" placeholder="Surat Perceraian..."
                            class="@error('nama') is-invalid @enderror form-control form-group" required />
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="url_download" class="form-label">Alamat</label>
                        <input type="text" name="url_download" id="url_download"
                            placeholder="https://drive.google.com/file/d/1n08KsuVMBK...."
                            class="form-control form-group @error('url_download') is-invalid @enderror" required />
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deksripsi</label>
                <textarea class="form-control form-group @error('deskripsi') is-invalid @enderror" name="deskripsi"
                    id="deskripsi" cols="30" rows="10" placeholder="Surat yang digunakan untuk pengajuan perceraian...."
                    required></textarea>
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