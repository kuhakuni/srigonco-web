<!-- ===== FOOTER ===== -->
<footer class="p-4">
	<div class="container">
		<h4 class="fw-semibold text-black">KRITIK DAN SARAN</h4>
		<form class="row g-3 needs-validation" method="post" action="/feedback" novalidate>
			<div class="col-md-6">
				<input
					class="form-control"
					type="text"
					name="nama"
					id=""
					placeholder="Nama Pengirim"
					required
				/>
			</div>
			<div class="col-md-6">
				<input
					class="form-control"
					type="email"
					name="email"
					id=""
					placeholder="Email Pengirim"
					required
				/>
			</div>
			<div class="col-12">
				<textarea
					class="form-control"
					name="pesan"
					cols="30"
					rows="5"
					style="resize: none"
					placeholder="Tulis pesan disini"
					required
				></textarea>
			</div>
			<div class="col-12">
				<button class="btn w-full" type="submit">Kirim</button>
			</div>
		</form>
		<div class="row mt-4 bottom-footer">
			<div
				class="col-md-2 my-3 d-flex justify-content-center align-items-center"
			>
				<img
					class="img-fluid"
					width="200"
					src="{{ asset('img/Logo_kab_malang.png') }}"
					alt="Missing Logo"
				/>
			</div>
			<div class="col-md-5 my-3">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15790.29055962944!2d112.562482!3d-8.345189!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97672642923f6b89!2sVillage%20Head%20Office%20Srigonco!5e0!3m2!1sen!2sus!4v1658754842292!5m2!1sen!2sus"
					style="border: 0; width: 100%; height: 100%"
					allowfullscreen=""
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
				></iframe>
			</div>
			<div class="col-md-5 my-3">
				<h6 class="fw-semibold text-center">Hubungi Kami</h6>
				<p class="fs-6">
					Jl. Bale Kambang No.17, Dusun Krajan, Desa Srigonco,
					Kecamatan Bantur, Kabupaten Malang 65179
				</p>
				<p>Phone : 0341</p>
				<p>Email : pemerintahdesasrigonco@gmail.com</p>
				<h6 class="mt-4 mb-2 font-semibold text-center">
					Sosial Media
				</h6>
				<div class="d-flex justify-content-evenly">
					<a href="#"> <i class="bi bi-facebook fs-3"></i></a>
					<a href="#"> <i class="bi bi-instagram fs-3"></i></a>
					<a href="#"> <i class="bi bi-twitter fs-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- ===== END OF FOOTER ===== -->
