<!-- ===== FOOTER ===== -->
<footer class="p-4">
    <section class="col-10 mx-auto">
        <h4><strong>KRITIK DAN SARAN</strong></h4>
        <form class="d-flex flex-column mx-auto my-3" action="post">
            <div class="d-flex flex-lg-row flex-column justify-content-between">
                <input class="saran col-lg-5 col-12 mb-3" type="text" name="nama" id="" placeholder="Nama Pengirim">
                <input class="saran col-lg-5 col-12 mb-3" type="email" name="email" id="" placeholder="Email Pengirim">
            </div>
            <textarea class="saran mx-auto col-12" name="pesan" id="" cols="30" rows="2"
                placeholder="Tulis pesan disini"></textarea>
            <input class="btn col-12 mx-auto mt-3 text-black" type="submit" value="KIRIM">
        </form>
        <hr>
        <div class="d-flex flex-wrap gap-3 justify-content-lg-between justify-content-">
            <img class=" col-md-2 col-3 h-100 img-fluid" src="{{ asset('img/Logo_kab_malang.png') }}" alt="Missing Logo">
            <div class="col-md-3 col-8">
                <p>MAPS</p>
            </div>
            <div class="col-md-4 col-7">
                <h6 class="mb-2"><strong>HUBUNGI KAMI</strong></h6>
                <p class="fs-6">Jl. Bale Kambang No.17, Dusun Krajan, Desa Srigonco, Kecamatan Bantur, Kabupaten Malang
                    65179</p>
                    <a href="#" class=""> <i class="bi bi-telephone-fill fs-4 me-2"></i>0341</a>
                    <br>
                    <a href="#" class=""> <i class="bi bi-envelope-fill fs-4 me-2"></i>desa-srigonco@malangkab.go.id</a>
            </div>
            <div class="col-md-2 col-4">
                <h6 class="mb-2"><strong>Ketentuan</strong></h6>
                <a href="#">Terms & Condition</a>
                <a href="#">Privacy Policy</a>
                <h6 class="mt-4 mb-2"><strong>Social Media</strong></h6>
                <div class="d-flex justify-content-between">
                    <a href="#"> <i class="bi bi-facebook fs-3"></i></a>
                    <a href="#"> <i class="bi bi-instagram fs-3"></i></a>
                    <a href="#"> <i class="bi bi-twitter fs-3"></i></a>
                </div>
            </div>

        </div>
    </section>
</footer>
<!-- ===== END OF FOOTER ===== -->