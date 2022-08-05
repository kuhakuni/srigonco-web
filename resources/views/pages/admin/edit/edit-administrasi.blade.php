@extends('layouts.admin.template')
@section('main')
<main id="main" class="main">
    @if (!empty($a))
    <div class="pagetitle">
        <h1>Ubah Data Administrasi</h1>
    </div><!-- End Page Title -->
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <section class="section p-4 rounded-2 bg-white">
        <div class="row">
            <form action="/dashboard/administrasi/update/{{ $a->id }}" method="post" enctype="multipart/form-data"
                id="berita">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Dokumen</label>
                    <input type="text" name="nama" id="nama"
                        class="form-control form-group @error('nama') is-invalid @enderror" value="{{$a->nama}}"
                        required />
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File Dokumen <span class="text-muted">(max. 2 MB)</span></label>
                    <input type="file" name="file" id="file" class="form-control form-group" />
                    @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control form-group @error('deskripsi') is-invalid @enderror" name="deskripsi"
                        id="deskripsi" cols="30" rows="10" required>{{ $a->deskripsi }}</textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" value="Ubah Data" class="text-white btn bg-primary" />
            </form>
        </div>
    </section>
    @else
    <h1>Dokumen Tidak Ditemukan</h1>
    @endif
</main>
@endsection