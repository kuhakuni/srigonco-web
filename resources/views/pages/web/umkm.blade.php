@extends('layouts.web.template')
@section('main')
<main>
    <div class="header-img p-4 d-flex flex-column justify-content-center" style="background-image: url('../img/header_umkm.png');">
        <div class="container">
            <h1 class="mt-4">UMKM SRIGONCO</h1>
            <h2>SEMANGAT!</h2>
        </div>
    </div>
    <div class="container p-4">
        <div class="row">
            <div class="card p-0 col-12 d-flex flex-lg-row flex-column my-2">
                <div class="col-lg-3 col-12 p-0 d-flex justify-content-lg-start justify-content-center">
                    <img class="rounded-3 w-100" src="{{ asset('img/batik.png') }}" alt="Missing Photo">
                </div>
                <div class="col-lg-9 col-12 p-4">
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <h3 class="card-title text-black m-0">Batik Tulis Sridadali</h3>
                        <div class="d-flex justify-content-center gap-4">
                            <a href=""><img src="{{ asset('img/ic-shopee.png') }}" alt="missing logo" width="46" height="46"></a>
                            <a href=""><img src="{{ asset('img/ic-shopee.png') }}" alt="missing logo" width="46" height="46"></a>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra aenean tincidunt amet, sed
                        quisque. Sit iaculis congue aliquet consectetur sit. Quisque interdum at eget cursus.</p>
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h6>Produk :</h6>
                            <a href="" class="wa"><i class="fs-4 bi bi-whatsapp "></i> 0895394832984</a>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a class="map-btn p-2" href="http://" target="_blank" rel="noopener noreferrer"><i class="bi bi-geo-alt-fill"></i>Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection