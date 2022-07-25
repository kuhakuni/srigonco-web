@extends('layouts.web.template')
@section('main')
<main>
    <section>
        <div class="header-img p-4 d-flex flex-column justify-content-end">
            <h1 class="mt-4">UMKM SRIGONCO</h1>
            <h2>SEMANGAT!</h2>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="card col-12 d-flex flex-md-row flex-column p-0 row">
                    <img class=" col-12 col-md-4 w-25 h-100 p-0" src="{{ asset('img/batik.png') }}" alt="Missing photo">
                    <div class="col-8 content m-3">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-black">Batik Tulis Sridadali</h3>
                            <div class="d-flex justify-content-center gap-4">
                                <a href=""><img src="{{ asset('img/ic-shopee.png') }}" alt="missing logo" width="46" height="46"></a>
                                <a href=""><img src="{{ asset('img/ic-shopee.png') }}" alt="missing logo" width="46" height="46"></a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra aenean tincidunt amet, sed
                            quisque. Sit iaculis congue aliquet consectetur sit. Quisque interdum at eget cursus.</p>
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6>Produk :</h6>
                                <a href="" class="wa"><i class="fs-4 bi bi-whatsapp "></i> 0895394832984</a>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                              <a class="map-btn p-2" href="http://" target="_blank" rel="noopener noreferrer"><i class="bi bi-geo-alt-fill"></i>Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection