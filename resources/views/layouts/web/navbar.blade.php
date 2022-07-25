<!-- ========= NAVBAR ============ -->
  <nav class="navbar position-sticky top-0 bg-white navbar-expand-lg navbar-light">
  <div class="container"> 
      <a class="navbar-brand d-flex flex-grid justify-content-center align-content-center gap-2" href="#">
        <img src="{{ asset('img/Logo_kab_malang.png') }}" alt="Missing Logo" width="44" height="57 ">
        <h5 class="my-auto text-center">Desa Srigonco</h5>        
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto me-4 gap-3">
        <a class="nav-link" aria-current="page" href="{{ url('beranda', []) }}">Beranda</a>
        <a class="nav-link" href="{{ url('profil', []) }}">Profil</a>
        <a class="nav-link" href="{{ url('berita', []) }}">Berita</a>
        <a class="nav-link" href="{{ url('pariwisata', []) }}">Pariwisata</a>
        <a class="nav-link" href="{{ url('umkm', []) }}">UMKM</a>
      </div>
    </div>
  </div>
</nav>
  <!-- =============== END OF NAVBAR ============== -->