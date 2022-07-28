@extends('layouts.web.template') 
@section('main')

<main>
	<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-white">
					<h1 class="display-4">PORTAL SRIGONCO</h1>
					<p class="fs-4">
						Menyediakan informasi mengenai UMKM, Pariwisata serta
						Profil di Desa Srigonco.
					</p>
					<a class="btn btn-selengkapnya">
						<span>Selengkapnya</span>
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex justify-content-center flex-column">
					<h1 class="fw-bold mb-3">Tentang Srigonco</h1>
					<p style="text-align: justify">
						Srigonco adalah sebuah desa yang subur dan asri yang
						terletak di Kecamatan Bantur, Kabupaten Malang, Jawa
						Timur. Sebelumnya desa ini memiliki nama Guling yang
						nama itu diambil dari salah satu kejadian saat babad
						tanah tersebut ada sebuah batu besar yang jatuh (guling)
						dari atas bukit, nama itulah yang dipakai masyarakat
						pada masa itu sebelum akhirnya dikenal dengan sebutan
						Desa Srigonco.
					</p>
				</div>
				<div class="col-md-6">
					<div class="ratio ratio-16x9">
						<iframe
							width="560"
							height="315"
							class="rounded-3"
							src="https://www.youtube.com/embed/fN5daMGykKs"
							title="YouTube video player"
							frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen
						></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pariwisata">
		<div class="text-center mb-5">
			<h1 class="fw-bold">Tempat Terbaik untuk Dikunjungi</h1>
			<p class="text-secondary">
				Jelajahi tempat wisata di Desa Srigonco
			</p>
		</div>
        <div class="pt-0" style="overflow: hidden;">
            <div class="container">
                <div class="row awesome-project-content portfolio-container">
                    <div
                        class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-app portfolio-item"
                    >
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"
                                    ><img src="img/pariwisata-1.jpg" alt=""
                                /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a
                                            class="portfolio-lightbox"
                                            data-gallery="myGallery"
                                            href="img/pariwisata-1.jpg"
                                        >
                                            <h4>Pantai Balekambang</h4>
                                            {{-- <span>Web Development</span> --}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->
    
                    <!-- portfolio-item start -->
                    <div
                        class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-web"
                    >
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"
                                    ><img src="img/pariwisata-2.jpg" alt=""
                                /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a
                                            class="portfolio-lightbox"
                                            data-gallery="myGallery"
                                            href="img/pariwisata-2.jpg"
                                        >
                                            <h4>Pantai Regent</h4>
                                            {{-- <span>Photosho</span> --}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->
    
                    <!-- portfolio-item start -->
                    <div
                        class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-card"
                    >
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"
                                    ><img src="img/pariwisata-3.jpg" alt=""
                                /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a
                                            class="portfolio-lightbox"
                                            data-gallery="myGallery"
                                            href="img/pariwisata-3.jpg"
                                        >
                                            <h4>Coban Kedung Darmo</h4>
                                            {{-- <span>Web Design</span> --}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->
    
                    <!-- portfolio-item start -->
                    <div
                        class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-web"
                    >
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"
                                    ><img src="img/pariwisata-4.jpg" alt=""
                                /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a
                                            class="portfolio-lightbox"
                                            data-gallery="myGallery"
                                            href="img/pariwisata-4.jpg"
                                        >
                                        <h4>Pantai Regent</h4>
                                        {{-- <span>Web design</span> --}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->
                </div>
            </div>
        </div>
	</section>
	<section class="umkm">
		<div class="container">
			<div
				id="carouselExampleControls"
				class="carousel slide"
				data-bs-ride="carousel"
			>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-md-6 col-8">
								<img
									src="img/batik-tulis.png"
									class="d-block w-100 img-carousel"
									alt="Missing UMKM Pic"
								/>
							</div>
							<div
								class="col-md-6 col-4 d-flex flex-column justify-content-center"
							>
								<h5 class="carousel-title">UMKM SRIGONCO</h5>
								<p class="carousel-subtitle">Batik Tulis</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-md-6 col-8">
								<img
									src="img/batik-tulis.png"
									class="d-block w-100 img-carousel"
									alt="Missing UMKM Pic"
								/>
							</div>
							<div
								class="col-md-6 col-4 d-flex flex-column justify-content-center"
							>
								<h5 class="carousel-title">UMKM SRIGONCO</h5>
								<p class="carousel-subtitle">Batik Tulis</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-md-6 col-8">
								<img
									src="img/batik-tulis.png"
									class="d-block w-100 img-carousel"
									alt="Missing UMKM Pic"
								/>
							</div>
							<div
								class="col-md-6 col-4 d-flex flex-column justify-content-center"
							>
								<h5 class="carousel-title">UMKM SRIGONCO</h5>
								<p class="carousel-subtitle">Batik Tulis</p>
							</div>
						</div>
					</div>
				</div>
				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#carouselExampleControls"
					data-bs-slide="prev"
				>
					<span
						class="carousel-control-prev-icon"
						aria-hidden="true"
					></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#carouselExampleControls"
					data-bs-slide="next"
				>
					<span
						class="carousel-control-next-icon"
						aria-hidden="true"
					></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</section>
	<section class="berita">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<h1 class="fw-bold">Berita Srigonco</h1>
				<a href="{{ url('/berita') }}" class="news">Selengkapnya > </a>
			</div>
			<div class="row">
				<div class="col-md-4 card-container">
					<div class="card" style="width: 18rem">
						<img src="img/blog/1.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title">
								Kisah Inspiratif Pemuda Srigonco
							</h5>
							<p class="card-text">
								Lorem ipsum, dolor sit amet consectetur
								adipisicing elit. Reiciendis cum ad sunt? Ipsam
								cum nisi dolore! Unde corporis dolor temporibus.
							</p>
							<a href="#" class="btn btn-primary more-news"
								>Selengkapnya</a
							>
						</div>
					</div>
				</div>
				<div class="col-md-4 card-container">
					<div class="card" style="width: 18rem">
						<img src="img/blog/2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Ex dicta aliquam vitae
								repellat officia culpa officiis delectus, vel
								facilis ipsa!
							</p>
							<a href="#" class="btn btn-primary more-news"
								>Selengkapnya</a
							>
						</div>
					</div>
				</div>
				<div class="col-md-4 card-container">
					<div class="card" style="width: 18rem">
						<img src="img/blog/3.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Voluptas illum, quos doloribus
								placeat quia saepe mollitia modi molestias
								totam. Temporibus.
							</p>
							<a href="#" class="btn btn-primary more-news"
								>Selengkapnya</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection
