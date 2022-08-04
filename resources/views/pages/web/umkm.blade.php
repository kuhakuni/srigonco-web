@extends('layouts.web.template') @section('main')
<main>
	<div
		class="header-img p-4 d-flex flex-column justify-content-center"
		style="background-image: url('../img/header_umkm.png')"
	>
		<div class="container">
			<h1 class="mt-4">UMKM SRIGONCO</h1>
			<h2>SEMANGAT!</h2>
		</div>
	</div>
	<div class="container p-4">
		<div class="row mx-3">
            @foreach ($umkm as $u)
			<div class="card p-0 col-12 d-flex flex-lg-row flex-column my-3">
				<div
					class="col-lg-3 col-12 p-0 d-flex justify-content-lg-start justify-content-center"
				>
					<img
						class="rounded-3 w-100"
						src="{{ Storage::url('public/img-umkm/' . $u->image) }}"
						alt="Missing Photo"
					/>
				</div>
				<div class="col-lg-9 col-12 p-4">
					<div
						class="d-flex justify-content-between align-items-center my-2"
					>
						<h3 class="card-title text-black m-0">
							{{ $u->nama }}
						</h3>
							<a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Link marketplace"
								><i class="bi bi-cart fs-2 text-black"></i></a>
					</div>
					<p>
						{{ $u->deskripsi }}
					</p>
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <p>Alamat : {{ $u->alamat }}</p>
                            <p class="m-0">No. Telepon : {{ $u->no_telp }}</p>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center justify-content-sm-end mt-2">
                            <a class="map-btn p-2 text-white d-flex gap-1" href="{{ $u->url_gmaps }}" target="_blank" rel="noopener noreferrer"><i
                                    class="bi bi-geo-alt-fill"></i>Maps</a>
                        </div>
                    </div>
				</div>
			</div>
            @endforeach
		</div>
        <div class="d-flex justify-content-center">
            {!! $umkm->links() !!}
        </div>
	</div>
</main>
@endsection
