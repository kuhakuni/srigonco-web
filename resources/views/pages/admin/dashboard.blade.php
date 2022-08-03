@extends('layouts.admin.template') @section('main')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-9">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total UMKM</h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    >
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $total_umkm }}</h6>
                                        <span class="text-muted small pt-2"
                                            >UMKM terdaftar</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End UMKM Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Pariwisata</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    >
                                        <i class="bi bi-tree"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $total_pariwisata }}</h6>
                                        <span class="text-muted small pt-2"
                                            >Pariwisata terdaftar</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Pariwisata Card -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Kritik dan Saran</h5>

                                <table class="table table-borderless datatable" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">
                                                Kritik dan Saran
                                            </th>
                                            <th scope="col">
                                                Tanggal
                                            </th>
                                            <th scope="col">
                                                Waktu
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kritik_saran as $item)
                                        <tr>
                                            <td>{{ $item->nama }}</td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                               {{ $item->kritik_saran }}
                                            </td>
                                            <td>
                                                {{ date("j M Y", strtotime($item->created_at)) }}
                                            </td>
                                            <td>
                                                {{ date("G:i:s", strtotime($item->created_at)) }}
                                            </td>
                                        </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Sales -->
                </div>
            </div>
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-3">
                <!-- News & Updates Traffic -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Berita Terkini</h5>
                        <div class="news">
                            @foreach ($berita_terkini as $berita)
                            <div class="post-item clearfix">
                                <img src="{{asset('storage/img-berita/' . $berita->image) }}" alt="Missing berita pic" />
                                <h4>
                                    <a
                                        href="/berita/{{ $berita->slug }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        >{{ $berita->judul }}</a
                                    >
                                </h4>
								<p class="text-muted">{{ date('d F Y',strtotime($berita->updated_at)) }}</p>
                            </div>
                            @endforeach
                        </div>
                        <!-- End sidebar recent posts-->
                    </div>
                </div>
                <!-- End News & Updates -->
            </div>
            <!-- End Right side columns -->
        </div>
    </section>
</main>
<!-- End #main -->

@endsection
