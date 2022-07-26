@extends('layouts.web.template')
@section('main')
    <main>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-black fw-bold">Administrasi Desa</h1>
            </div>
            <div class="col-10">
              <p class="text-black">Halaman ini memuat berkas-berkas dan surat untuk keperluan warga Desa Srigonco yang diupdate secara berkala, serta transparansi keuangan desa Srigonco mengenai beberapa sumber bidang dan jumlah pendapatan desa pada tahun anggaran 2022. </p>
            </div>
          </div>
            <div class="card p-4 d-flex flex-lg-row flex-column row border-r-15">
              <div class="col-lg-8 col-12">
                <h3 class="text-black fw-semibold">Berkas Administrasi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra aenean tincidunt amet, sed quisque. </p>
              </div>
              <div class="col-lg-4 col-12 d-flex flex-column align-items-end">
                <p><em>Update terakhir : 9 Juli 2022</em></p>
                <a class="fw-bold rounded-3 bg-primary ps-2 text-decoration-none" href="" target="_blank">Unduh <img class="ic-down p-2 rounded-3" src="{{ asset('img/ic_download.svg') }}" alt=""></a>
              </div>
            </div>
          <div class="row">
            <div class="col-6">
              <img class="w-100 h-100" src="{{ asset('img/siskeudes.png') }}" alt="">
            </div>
            <div class="col-6">
              <h3 class="fw-bold text-black">Infografis APBDes 2022 Desa Srigonco Kecamatan Bantur</h3>
              <h4>Anggaran Pendapatan dan Belanja Desa Pemerintah Srigonco Tahun Anggaran 2022</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit proin bibendum sem amet adipiscing. Lorem diam eros feugiat a imperdiet semper id pulvinar. Diam, pharetra morbi facilisis lectus. </p>
              <a class="fw-bold rounded-3 bg-primary ps-2 text-decoration-none" href="" target="_blank">Unduh <img class="ic-down p-2 rounded-3" src="{{ asset('img/ic_download.svg') }}" alt=""></a>

            </div>
          </div>
        </div>
      </section>
    </main>
@endsection