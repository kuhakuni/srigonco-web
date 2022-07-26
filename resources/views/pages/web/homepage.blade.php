@extends('layouts.web.template')
@section('main')
<main>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white">
                    <h1 class="display-4">PORTAL SRIGONCO</h1>
                    <p class="fs-4">
                        Menyediakan informasi mengenai UMKM, Pariwisata
                        serta Profil di Desa Srigonco.
                    </p>
                    <a class="btn btn-selengkapnya">
                        <span>Selengkapnya</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="about py-5">
        <div class="container">
            <div class="row">
                <div
                    class="col-md-6 d-flex justify-content-center flex-column"
                >
                    <h1 class="fw-bold mb-3">Tentang Srigonco</h1>
                    <p style="text-align: justify">
                        Srigonco adalah sebuah desa yang subur dan asri yang
                        terletak di Kecamatan Bantur, Kabupaten Malang, Jawa
                        Timur. Sebelumnya desa ini memiliki nama Guling yang
                        nama itu diambil dari salah satu kejadian saat babad
                        tanah tersebut ada sebuah batu besar yang jatuh
                        (guling) dari atas bukit, nama itulah yang dipakai
                        masyarakat pada masa itu sebelum akhirnya dikenal
                        dengan sebutan Desa Srigonco.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe
                            width="560"
                            height="315"
                            class="rounded-3"
                            src="https://www.youtube.com/embed/fN5daMGykKs"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pariwisata py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Tempat Terbaik untuk Dikunjungi</h1>
            <p class="text-secondary">
                Jelajahi tempat wisata di Desa Srigonco
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img
                        src="img/pariwisata-1.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </div>
                <div class="col-md-6">
                    <img
                        src="img/pariwisata-2.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <img
                        src="img/pariwisata-3.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </div>
                <div class="col-md-6">
                    <img
                        src="img/pariwisata-4.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </div>
            </div>
            <div
                class="col-12 mt-5 d-flex justify-content-center align-items-center"
            >
                <a href="/pariwisata" class="btn mx-auto">Selengkapnya</a>
            </div>
        </div>
    </section>  
</main>
@endsection