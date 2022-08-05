@extends('layouts.admin.template') @section('main')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Berita</h1>
    </div>
    <!-- End Page Title -->

    <section class="section ">
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
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">
                        Tanggal
                    </th>
                    <th scope="col">
                        Waktu
                    </th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @php $i=1; @endphp @foreach ($berita as $b)
                <tr class="align-middle">
                    <th scope="row">{{ $i++; }}</th>
                    <td>{{$b->judul}}</td>
                    <td>{{$b->kategori->kategori}}</td>
                    <td>
                        {{ date("j M Y", strtotime($b->updated_at)) }}
                    </td>
                    <td>
                        {{ date("G:i:s", strtotime($b->updated_at)) }}
                    </td>
                    <td>
                        <a
                            class="btn bg-primary text-white"
                            href="{{ url('berita/' . $b->slug) }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            ><i class="bi bi-eye-fill"></i
                        ></a>
                        <a
                            class="btn bg-warning text-white"
                            href="{{ url('dashboard/berita/edit/' . $b->slug) }}"
                            ><i class="bi bi-pencil-fill"></i
                        ></a>
                        <a
                            class="btn btn-danger text-white"
                            onclick="return confirm('Apakah anda yakin akan menghapus berita tersebut?')"
                            href="{{ url('dashboard/berita/delete/' . $b->slug) }}"
                            ><i class="bi bi-trash-fill"></i
                        ></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr />
        <div class="card p-4">
            <div class="row">
                <div class="pagetitle">
                    <h1>Buat Berita</h1>
                </div>
                <form
                    action="/dashboard/berita"
                    method="post"
                    enctype="multipart/form-data"
                    {{-- class="needs-validation" --}}
                    id="berita"
                >
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label"
                            >Judul Berita</label
                        >
                        <input
                            type="text"
                            name="judul"
                            id="judul"
                            class="form-control form-group"
                            required
                        />
                        @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label"
                            >Gambar Berita</label
                        >
                        <input
                            type="file"
                            name="gambar"
                            id="gambar"
                            class="form-control form-group"
                        />
                        @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Quill Editor Default -->
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Berita</label>
                        <input type="hidden" name="isi" />
                        <div id="editor" style="min-height: 160px"></div>
                        @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Quill Editor Default -->
                    <div class="mb-3">
                        <label for="kategori" class="form-label"
                            >Kategori</label
                        >
                        <select
                            name="kategori"
                            class="form-select my-2"
                            id="floatingSelect"
                            aria-label="Floating label select example"
                            required
                        >
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $k)
                            <option value="{{$k->id}}">{{$k->kategori}}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="slug" value="" id="slug">
                    <input
                        type="submit"
                        value="Tambah Data"
                        class="text-white btn bg-primary"
                    />
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
