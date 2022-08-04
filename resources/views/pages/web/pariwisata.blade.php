@extends('layouts.web.template')
@section('main')
<main>
        <div class="header-img p-4 d-flex flex-column justify-content-center"
            style="background-image: url('{{asset('img/header-pariwisata.png')}}');">
            <div class="container">
                <h1 class="mt-4">PARIWISATA SRIGONCO</h1>
                <h2>SEMANGAT!</h2>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                @foreach ($pariwisata as $p)
                <div class="card p-0 col-12 d-flex flex-lg-row flex-column my-3">
                    <div class="col-lg-3 col-12 p-0 d-flex justify-content-lg-start justify-content-center">
                        <img class="w-100" src="{{ Storage::url('public/img-pariwisata/' . $p->image) }}" alt="Missing Photo">
                    </div>
                    <div class="col-lg-9 col-12 p-4">
                        <h3 class="card-title text-black">{{ $p->nama }}</h3>
                        <p>{{ $p->deskripsi }}</p>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p>Alamat : {{ $p->alamat }}</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <a class="map-btn p-2 text-white" href="{{ $p->url_gmaps }}" target="_blank" rel="noopener noreferrer"><i
                                        class="bi bi-geo-alt-fill me-1"></i>Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {!! $pariwisata->links() !!}
            </div>
        </div>
</main>
@endsection