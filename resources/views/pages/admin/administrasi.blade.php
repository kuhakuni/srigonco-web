@extends('layouts.admin.template') @section('main')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Dokumen Administrasi</h1>
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
                    <th scope="col">Nama Dokumen</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @php $i=1; @endphp @foreach ($admin as $a)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->deskripsi}}</td>
                    <td>
                        <a
                            class="btn bg-primary text-white"
                            href="{{ url('dokumen/' . $a->file) }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><i class="bi bi-eye-fill"></i
                        ></a>
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
                        <label for="file" class="form-label"
                            >File Dokumen <span class="text-muted">(max. 2 MB)</span></label
                        >
                        <input
                            type="file"
                            name="file"
                            id="file"
                            class="form-control form-group"
                        />
                        @error('file')
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