<!-- ===== FOOTER ===== -->
<footer class="p-2">
	<div class="container">
		<h4 class="fw-semibold text-black py-2">KRITIK DAN SARAN</h4>
		<form class="row g-3 needs-validation" method="post" action="{{ url('/feedback') }}" novalidate>
            @csrf
			<div class="col-md-6">
				<input
					class="form-control"
					type="text"
					name="nama"
					placeholder="Nama"
					required
				/>
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
			</div>
			<div class="col-md-6">
				<input
					class="form-control"
					type="email"
					name="email"
					placeholder="Email"
					required
				/>
               @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
               @enderror
			</div>
			<div class="col-12">
				<textarea
					class="form-control"
					name="kritik_saran"
					cols="30"
					rows="5"
                    maxlength="255"
					style="resize: none"
					placeholder="Tulis Kritik dan Saran di sini"
					required
				></textarea>
                @error('kritik_saran')
                <div class="invalid-feedback">{{ $message }}</div>
               @enderror
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
			<div class="col-md-5 my-3 contact-us">
				<h6 class="fw-semibold text-center">Hubungi Kami</h6>
				<p>
					Jl. Bale Kambang No.17, Dusun Krajan, Desa Srigonco,
					Kecamatan Bantur, Kabupaten Malang 65179
				</p>
                <p><i class="bi bi-telephone-fill pe-2"></i> : 081217434900 </p>
                <p><i class="bi bi-envelope-fill pe-2"></i> : pemerintahdesasrigonco@gmail.com</p>
				<h6 class="mt-4 mb-2 font-semibold text-center">
					Sosial Media
				</h6>
				<div class="d-flex justify-content-evenly sosmed">
					<a href="https://www.facebook.com/profile.php?id=100080228667345" target="_blank"> <i class="bi bi-facebook"></i></a>
					<a href="https://instagram.com/pemdes.srigonco" target="_blank"> <i class="bi bi-instagram"></i></a>
					<a href="https://twitter.com/CenterSrigonco" target="_blank"> <i class="bi bi-twitter"></i></a>
				</div>
			</div>
            <div class="col-12 text-center mt-3">
                <p>&copy; KKN FILKOM UB 2022</p>
            </div>
		</div>
	</div>
</footer>
<!-- ===== END OF FOOTER ===== -->
