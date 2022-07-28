@extends('layouts.web.template')
@section('main')
{{-- {{ dd($berita) }} --}}
<main>
    <div class="container">
        <h1 class="text-black mt-4"><strong>Berita Srigonco</strong></h1>
        {{-- NEW HEADER --}}
        <div class="row my-4">
            <div class="col-lg-8 col-12">
                <div class="news-header w-100 border-r-15 p-4 d-flex flex-column justify-content-end"
                    style="background-image: url('{{asset('img/header_umkm.png')}}');">
                    <h3 class="text-white fw-bold">Pantai Balekambang kembali ramai pengunjung di musim liburan</h3>
                    <div class="d-flex gap-4">
                        <p>20 Juli 2022</p>
                        <p>20 Dusun Sumberjambe</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 pt-4">
                <p>Nisi, sagittis aliquet sit rutrum. Nunc, id vestibulum quam ornare adipiscing. Pellentesque sed
                    turpis nunc gravida pharetra, sit nec vivamus pharetra. Velit, dui, egestas nisi, elementum mattis
                    mauris, magnis. Massa tortor nibh nulla condimentum imperdiet scelerisque... read more</p>
            </div>
        </div>
        {{-- END OF NEW HEADER --}}
        <div class="row">
            <h2 class="text-black fw-bold">Berita Terbaru</h2>
            <div class="col-xl-3 col-6">
                <img class="w-100 border-r-15" src="{{ asset('img/header_umkm.png') }}" alt="">
                <h6 class="text-black fw-semibold my-3">News Title Lorem Ipsum Dolor Sit Amet</h6>
                <div class="d-flex gap-4">
                  <p class="fs-12p">5 jam yang lalu</p>
                  <p class="fs-12p">Dusun Krajan</p>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <img class="w-100 border-r-15" src="{{ asset('img/header_umkm.png') }}" alt="">
                <h6 class="text-black fw-semibold my-3">News Title Lorem Ipsum Dolor Sit Amet</h6>
                <div class="d-flex gap-4">
                  <p class="fs-12p">5 jam yang lalu</p>
                  <p class="fs-12p">Dusun Krajan</p>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <img class="w-100 border-r-15" src="{{ asset('img/header_umkm.png') }}" alt="">
                <h6 class="text-black fw-semibold my-3">News Title Lorem Ipsum Dolor Sit Amet</h6>
                <div class="d-flex gap-4">
                  <p class="fs-12p">5 jam yang lalu</p>
                  <p class="fs-12p">Dusun Krajan</p>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <img class="w-100 border-r-15" src="{{ asset('img/header_umkm.png') }}" alt="">
                <h6 class="text-black fw-semibold my-3">News Title Lorem Ipsum Dolor Sit Amet</h6>
                <div class="d-flex gap-4">
                  <p class="fs-12p">5 jam yang lalu</p>
                  <p class="fs-12p">Dusun Krajan</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex flex-lg-row flex-column-reverse">
          <div class="col-lg-8 col-12">
            <div class="row">
              <div class="col-6">
                <p  class="fs-12p"><strong> Dusun Krajan </strong>| 22 Juli, 2022</p>
                <h4 class="text-black fw-bold">Jokowi Pakai Kemeja Putih 'Indonesia Maju' di Hari Reshuffle Kabinet</h3>
                <p><strong>Jakarta - Zulkifli</strong> Hasan santer dikabarkan bakal dilantik menjadi Menteri Perdagangan menggantikan Muhammad Lutfi.</p>
                <p class="fs-12p">20 jam yang lalu</p>
              </div>
              <div class="col-6">
                <img class="border-r-15 w-100" src="{{ asset('img/header_umkm.png') }}" alt="">
              </div>
            </div>
            {{-- 1 ROW BERITA --}}
            <div class="row">
              <div class="col-4">
                <img class="border-r-15 w-100" src="{{ asset('img/header_umkm.png') }}" alt="">
              </div>
              <div class="col-8">
                <h5 class="black-text">Viral Foto Selebgram Cantik saat Ditangkap Polisi, Wajah Aslinya Jadi Sorotan</h5>
                <p><strong>Jakarta - LINE </strong>Today akan resmi ditutup pada 6 Juli 2022. Line Indonesia menyampaikan....</p>
                <p class="fs-12p">1 jam yang lalu</p>
              </div>
              <hr>
            </div>
            {{-- END OF 1 ROW BERITA --}}
            <div class="row">
              <div class="col-4">
                <img class="border-r-15 w-100" src="{{ asset('img/header_umkm.png') }}" alt="">
              </div>
              <div class="col-8">
                <h5 class="black-text">Viral Foto Selebgram Cantik saat Ditangkap Polisi, Wajah Aslinya Jadi Sorotan</h5>
                <p><strong>Jakarta - LINE </strong>Today akan resmi ditutup pada 6 Juli 2022. Line Indonesia menyampaikan....</p>
                <p class="fs-12p">1 jam yang lalu</p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-4">
                <img class="border-r-15 w-100" src="{{ asset('img/header_umkm.png') }}" alt="">
              </div>
              <div class="col-8">
                <h5 class="black-text">Viral Foto Selebgram Cantik saat Ditangkap Polisi, Wajah Aslinya Jadi Sorotan</h5>
                <p><strong>Jakarta - LINE </strong>Today akan resmi ditutup pada 6 Juli 2022. Line Indonesia menyampaikan....</p>
                <p class="fs-12p">1 jam yang lalu</p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-4">
                <img class="border-r-15 w-100" src="{{ asset('img/header_umkm.png') }}" alt="">
              </div>
              <div class="col-8">
                <h5 class="black-text">Viral Foto Selebgram Cantik saat Ditangkap Polisi, Wajah Aslinya Jadi Sorotan</h5>
                <p><strong>Jakarta - LINE </strong>Today akan resmi ditutup pada 6 Juli 2022. Line Indonesia menyampaikan....</p>
                <p class="fs-12p">1 jam yang lalu</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <h5 class="text-black fw-bold">Arsip Berita dan Artikel</h5>
            <hr>
          </div>
        </div>
    </div>
</main>

@endsection