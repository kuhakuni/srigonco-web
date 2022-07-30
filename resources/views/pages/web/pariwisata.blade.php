@extends('layouts.web.template') 
@section('main')
<main>
<<<<<<< HEAD
    <section>
        <div class="header-img p-4 d-flex flex-column justify-content-end" style="background-image: url('{{asset('img/header-pariwisata.png')}}');">
          <div class="container">
            <h1 class="mt-4">PARIWISATA SRIGONCO</h1>
            <h2>SEMANGAT!</h2>
          </div>  
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="card p-0 col-12 d-flex flex-lg-row flex-column my-2">
                    <div class="col-lg-3 col-12 p-0 d-flex justify-content-lg-start justify-content-center">
                        <img class="rounded-3 w-100" src="{{ asset('img/batik.png') }}" alt="Missing Photo">
                    </div>
                    <div class="col-lg-9 col-12 p-4">
                            <h3 class="card-title text-black">Pantai Balekambang</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra aenean tincidunt amet, sed
                            quisque. Sit iaculis congue aliquet consectetur sit. Quisque interdum at eget cursus.</p>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h6>HTM :
                                    
                                </h6>
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
    </section>
=======
	<div
		class="header-img p-4 d-flex flex-column justify-content-center"
		style="background-image: url('{{asset('img/header-pariwisata.png')}}');"
	>
		<div class="container">
			<h1 class="mt-4">PARIWISATA SRIGONCO</h1>
			<h2>SEMANGAT!</h2>
		</div>
	</div>
	<div class="container p-4">
		<div class="row">
			<div class="card p-0 col-12 d-flex flex-lg-row flex-column my-2">
				<div
					class="col-lg-3 col-12 p-0 d-flex justify-content-lg-start justify-content-center"
				>
					<img
						class="rounded-3 w-100"
						src="{{ asset('img/batik.png') }}"
						alt="Missing Photo"
					/>
				</div>
				<div class="col-lg-9 col-12 p-4">
					<h3 class="card-title text-black">Pantai Balekambang</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Viverra aenean tincidunt amet, sed quisque. Sit iaculis
						congue aliquet consectetur sit. Quisque interdum at eget
						cursus.
					</p>
					<div class="row align-items-center">
						<div class="col-8">
							<h6>HTM :</h6>
							<a href="" class="wa"
								><i class="fs-4 bi bi-whatsapp"></i>
								0895394832984</a
							>
						</div>
						<div class="col-4 d-flex justify-content-end">
							<a
								class="map-btn p-2"
								href="http://"
								target="_blank"
								rel="noopener noreferrer"
								><i class="bi bi-geo-alt-fill"></i>Maps</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
>>>>>>> 64a1c8487ccfd6ebe0bd683597603d65536c3dd7
</main>
@endsection
