@extends('layouts.web.template')
@section('main')
<main>
        <div class="header-img p-4 d-flex flex-column justify-content-center"
            style="background: rgba(0, 0, 0, 0.5) url('{{asset('img/pantai.jpg')}}'); bakcground-fit: cover; background-position: center center;">
            <div class="container">
                <h1 class="mt-4">PARIWISATA SRIGONCO</h1>
                <h2>SEMANGAT!</h2>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row mx-3">
                @foreach ($pariwisata as $p)
                <div class="card p-0 col-12 d-flex flex-lg-row flex-column my-3">
                    <div class="col-lg-3 col-12 p-0 d-flex justify-content-lg-start justify-content-center">
                        <img src="{{ Storage::url('public/img-pariwisata/' . $p->image) }}" alt="Missing Photo">
                    </div>
                    <div class="col-lg-9 col-12 p-4">
                        <h3 class="card-title text-black">{{ $p->nama }}</h3>
                        <p>{{ $p->deskripsi }}</p>
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <p>Alamat : {{ $p->alamat }}</p>
                                <p class="m-0">No. Telepon : {{ $p->no_telp }}</p>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center justify-content-sm-end mt-2">
                                <a class="map-btn p-2 text-white d-flex gap-1" href="{{ $p->url_gmaps }}" target="_blank" rel="noopener noreferrer"><i
                                        class="bi bi-geo-alt-fill"></i>Maps</a>
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