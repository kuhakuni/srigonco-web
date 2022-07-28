<!-- ========= NAVBAR ============ -->
  <nav class="navbar position-sticky top-0 bg-white navbar-expand-md navbar-light">
  <div class="container"> 
      <a class="navbar-brand d-flex flex-grid justify-content-center align-content-center gap-2" href="{{ url('/') }}">
        <img src="{{ asset('img/Logo_kab_malang.png') }}" alt="Missing Logo" width="44" height="57 ">
        <h6 class="my-auto text-center">Desa Srigonco</h6>        
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto gap-1">
        <a class="nav-link {{ $route === '/' ? "active" : "" }}" href="{{ url('/') }}">Beranda</a>
        <a class="nav-link {{ $route === 'profil' ? "active" : "" }}" href="{{ url('/profil') }}">Profil</a>
        <a class="nav-link {{ $route === 'berita' ? "active" : "" }}" href="{{ url('/berita') }}">Berita</a>
        <a class="nav-link {{ $route === 'pariwisata' ? "active" : "" }}" href="{{ url('/pariwisata') }}">Pariwisata</a>
        <a class="nav-link {{ $route === 'umkm' ? "active" : "" }}" href="{{ url('/umkm') }}">UMKM</a>
        <a class="nav-link {{ $route === 'administrasi' ? "active" : "" }}" href="{{ url('/administrasi') }}">Administrasi</a>
      </div>
    </div>
  </div>
</nav>
  <!-- =============== END OF NAVBAR ============== -->