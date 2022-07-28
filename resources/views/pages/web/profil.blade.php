@extends('layouts.web.template') 
@section('main')
<main>
	<div class="bg-secondary pb-1 mb-2">
		<div class="container mb-3">
			<div class="row flex-lg-row flex-column-reverse align-items-center">
				<div class="col-lg-7 col-12">
					<h2 class="fw-bold">Sambutan Kepala Desa</h2>
					<p class="fst-italic">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Sed doloremque ex eius similique magnam cupiditate fugit
						autem minus hic amet.
					</p>
				</div>
				<div
					class="img-kades col-lg-5 col-12 d-flex justify-content-center"
				>
					<img
						style="max-height: 300px"
						src="{{ asset('img/pak-didit.png') }}"
						alt="Missing pic"
					/>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-6 col-12 img-map">
				<img
					src="{{ asset('img/map-srigonco.png') }}"
					alt="Missing Logo"
				/>
			</div>
			<div class="col-md-6 col-12">
				<h4 class="fw-bold">Letak Geografis</h4>
				<p class="text-justify">
					Desa Srigonco yang terletak di Kecamatan Bantur Kabupaten
					Malang tepatnya berada di 54 km dari pusat Kota Malang. Desa
					Srigonco ini mempunyai luas wilayah sebesar 811,9 H. Desa
					Srigonco yang terdiri dari 3 dusun yaitu dusun krajan, dusun
					sumber jambe dan dusun watu sigar.
				</p>
				<ul>
					<li>Batas utara : Desa Bantur</li>
					<li>Batas timur : Kecamatan Gedangan</li>
					<li>Batas selatan : Pantai Balekambang</li>
					<li>Batas barat : Desa Sumberbening</li>
				</ul>
			</div>
		</div>
		<div class="row mt-5">
			<h3 class="text-center fw-bold">
				Struktur Perangkat Desa Srigonco
			</h3>
			<div class="col-12 mt-4">
				<img
					src="{{ asset('img/Struktur Perangkat Desa.png') }}"
					alt="Missing struktur pic"
				/>
			</div>
			<div class="my-4 row">
				<div class="col-md-4 col-12 d-flex justify-content-center my-2">
					<div class="ratio ratio-16x9">
						<iframe
							class="rounded-3"
							src="https://www.youtube.com/embed/fN5daMGykKs"
						>
						</iframe>
					</div>
				</div>
				<div class="col-md-4 col-12 d-flex justify-content-center my-2">
					<div class="ratio ratio-16x9">
						<iframe
							class="rounded-3"
							src="https://www.youtube.com/embed/FvTiBZlUx68"
						>
						</iframe>
					</div>
				</div>
				<div class="col-md-4 col-12 d-flex justify-content-center my-2">
					<div class="ratio ratio-16x9">
						<iframe
							class="rounded-3"
							src="https://www.youtube.com/embed/xR-vxJ7PEyQ"
						>
						</iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
