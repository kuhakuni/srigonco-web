<!-- ===== FOOTER ===== -->
<footer class="p-4">
    <div class="container">
        <h4 class="fw-semibold text-black">KRITIK DAN SARAN</h4>
        <form class="row g-3 needs-validation" action="post">
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

            <button class="btn col-12 mx-auto mt-3 text-black" type="submit">
                Kirim
            </button>
        </form>
        <div class="row mt-4 bottom-footer">
            <div class="col-md-2 my-3 d-flex justify-content-center align-items-center">
                <img
                    class="img-fluid"
                    width="200"
                    src="{{ asset('img/Logo_kab_malang.png') }}"
                    alt="Missing Logo"
                />
            </div>  
            <div class="col-md-4 my-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15790.29055962944!2d112.562482!3d-8.345189!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97672642923f6b89!2sVillage%20Head%20Office%20Srigonco!5e0!3m2!1sen!2sus!4v1658754842292!5m2!1sen!2sus"
                    style="border: 0; width: 100%; height: 100%"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            <div class="col-md-4 my-3">
                <h5 class="fw-bold text-start">Hubungi Kami</h5>
                <p class="fs-6">
                    Jl. Bale Kambang No.17, Dusun Krajan, Desa Srigonco,
                    Kecamatan Bantur, Kabupaten Malang 65179
                </p>
                <p><i class="bi bi-telephone-fill pe-2"></i> : 0341</p>
                <p><i class="bi bi-envelope-fill pe-2"></i> : pemerintahdesasrigonco@gmail.com</p>
            </div>
            <div class="col-md-2 my-3">
            <h5 class="fw-bold text-start">KETENTUAN</h5>
                <a href="#">Terms & Condition</a><p></p>
                <a href="#">Privacy Policy</a>
                <p></p>
            <h5 class="fw-bold text-start">SOSIAL MEDIA</h5>
                <div class="d-flex">
                        <a href="#"> <i class="bi bi-facebook fs-3 pe-2"></i></a>
                        <a href="#"> <i class="bi bi-instagram fs-3 px-2"></i></a>
                        <a href="#"> <i class="bi bi-twitter fs-3 px-2"></i></a>
                    </div>
            </div>
            <div class="col-12 my-3">
                <div><hr></div>
                &copy 2022 KKN FILKOM UB
            </div>
        </div>
    </div>
</footer>
<!-- ===== END OF FOOTER ===== -->
