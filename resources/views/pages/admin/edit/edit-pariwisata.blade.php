@extends('layouts.admin.template')
@section('main')
<main id="main" class="main">
    @if (!empty($pariwisata))
    <div class="pagetitle">
        <h1>Ubah Data Berita</h1>
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
            <form
            action="/dashboard/pariwisata/update/{{ $pariwisata->slug }}"
            method="post"
            enctype="multipart/form-data"
            id="berita"
             >
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label"
                    >Nama Pariwisata</label
                >
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="form-control form-group @error('nama') is-invalid @enderror"
                    value="{{$pariwisata->nama}}"
                    required
                />
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 d-flex flex-column">
                <label for="gambar" class="form-label mb-2"
                    >Gambar Pariwisata</label
                >
                <img
                    src="{{asset('storage/img-pariwisata/' . $pariwisata->image) }}"
                    alt="Missing Pariwisata Pic"
                    style="max-width: 300px; margin-bottom: 1rem;"
                    id="preview-pic"
                />
                <input
                    type="file"
                    name="gambar"
                    placeholder="test"
                    id="gambar"
                    class="form-control form-group @error('gambar') is-invalid @enderror"
                    style="max-width: 50%"
                    onchange="previewImg(event)"
                />
                <script>
                       const previewImg = function (event) {
                        const img = document.getElementById("preview-pic");
                        img.src = URL.createObjectURL(event.target.files[0]);
                        img.onload = () => {
                            URL.revokeObjectURL(img.src);
                        };
                    };
                </script>
                @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label"
                    >Alamat Pariwisata</label
                >
                <input
                    type="text"
                    name="alamat"
                    id="alamat"
                    value="{{$pariwisata->alamat}}"
                    class="form-control form-group @error('alamat') is-invalid @enderror"
                    required
                />
                @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
               <div class="row">
                <div class="col-md-6">
                    <label for="no_telp" class="form-label"
                        >Nomor Telepon <span class="text-muted">(bila ada)</span></label
                    >
                    <input
                        type="number"
                        name="no_telp"
                        id="no_telp"
                        value="{{str_replace(' ', '',$pariwisata->no_telp)}}"
                        class="form-control form-group @error('no_telp') is-invalid @enderror"
                    />
                    @error('no_telp')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
               </div>

               <div class="col-md-6">
                    <label for="url_gmaps" class="form-label"
                        >Link Google Maps <span class="text-muted">(bila ada)</span></label
                    >
                    <input
                        type="text"
                        name="url_gmaps"
                        id="url_gmaps"
                        value="{{$pariwisata->url_gmaps}}"
                        class="form-control form-group @error('url_gmaps') is-invalid @enderror"
                    />
                    @error('url_gmaps')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
               </div>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deksripsi</label>
                <textarea class="form-control form-group @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="10" required>{{ $pariwisata->deskripsi }}</textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input
                type="submit"
                value="Ubah Data"
                class="text-white btn bg-primary"
            />
        </form>
        </div>
    </section>
    @else
        <h1>Pariwisata Tidak Ditemukan</h1>
    @endif
</main>
@endsection