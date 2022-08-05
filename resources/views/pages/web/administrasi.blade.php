@extends('layouts.web.template') @section('main')
<main>
    <section class="mx-3 py-4">
        <div class="container rounded-1 bg-white p-5">
            <h1 class="text-black fw-bold">Administrasi Desa</h1>
            <p class="text-black">
                Halaman ini memuat berkas-berkas dan surat untuk
                keperluan warga Desa Srigonco yang diperbaharui secara
                berkala, serta transparansi keuangan desa Srigonco
                mengenai beberapa sumber bidang dan jumlah pendapatan
                desa pada tahun anggaran 2022.
            </p>
            <div class="row mt-5 flex-column flex-lg-row flex-column-reverse">
                @foreach ($administrasi_image as $item)
                <div class="col-md-4">
                    <div class="col-12 mb-4">
                        <img
                            class="w-100 h-100"
                            src="{{ asset('storage/dokumen-administrasi/'. $item->file) }}"
                            alt="Missing image"
                        />
                    </div>
                    <div class="col-12 d-flex flex-column">
                        <h3 class="fw-bold text-black">
                            {{ $item->nama }}
                        </h3>
                        <p class="fs-6 m-0 fst-italic text-muted">Update terakhir: {{ date('d F Y',strtotime($item->updated_at)) }}</p>
                        <p>
                            {{ $item->deskripsi }}
                        </p>
                        <a
                        class="fw-semibold rounded-3 p-2 bg-primary text-white text-center"
                        href="{{ url('dokumen/download/'. $item->file) }}"
                        target="_blank"
                        >Unduh <i class="bi bi-download"></i
                    ></a>
                    </div>
                </div>
                @endforeach
                @foreach ($administrasi_dokumen as $a)
                <div class="col-md-8">
                    <hr class="mt-0 mb-3" />
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="text-black fw-semibold">{{ $a->nama }}</h3>
                            <p class="fs-6 m-0 fst-italic text-muted">Update terakhir: {{ date('d F Y',strtotime($a->updated_at)) }}</p>
                            <p>{{ $a->deskripsi }}</p>
                        </div>
                        <div class="col-sm-4 mb-3 d-flex justify-content-md-end justify-content-center align-items-center">
                            <a
                                class="fw-semibold rounded-3 p-2 bg-primary text-white"
                                href="{{ url('dokumen/download/'. $a->file) }}"
                                target="_blank"
                                >Unduh <i class="bi bi-download"></i
                            ></a>
                           
                        </div>
                    </div>
                    <hr class="mt-0 mb-3" />
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
