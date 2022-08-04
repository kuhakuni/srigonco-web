<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ $route === 'dashboard' ? '' : 'collapsed' }}"
                href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End dashboard Nav -->
        <li class="nav-item">
            @if($route === 'berita' || $route === 'kategori' )
            <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-newspaper"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show " data-bs-parent="#sidebar-nav">
                @else
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-newspaper"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    @endif
                    <li>
                        <a href="{{ url('/dashboard/berita') }}" class="{{ $route === 'berita' ? "active" : "" }}">
                            <i class="bi bi-circle"></i><span>Data Berita</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/kategori') }}" class="{{ $route === 'kategori' ? "active" : "" }}">
                            <i class="bi bi-circle"></i><span>Data Kategori</span>
                        </a>
                    </li>
                </ul>
        </li><!-- End Berita Nav -->

        <li class="nav-item">

            <a class="nav-link {{ $route === 'pariwisata' ? '' : 'collapsed' }}"
                href="{{ url('/dashboard/pariwisata') }}">

                <i class="bi bi-tree"></i>
                <span>Data Pariwisata</span>
            </a>
        </li><!-- End Pariwisata Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $route === 'umkm' ? '' : 'collapsed' }}" href="{{ url('/dashboard/umkm') }}">

                <i class="bi bi-shop"></i>
                <span>Data UMKM</span>
            </a>
        </li><!-- End UMKM Nav -->
        <li class="nav-item">
            <a class="nav-link {{ $route === 'administrasi' ? '' : 'collapsed' }}"
                href="{{ url('/dashboard/administrasi') }}">
                <i class="bi bi-file-earmark"></i>
                <span>Data Administrasi</span>
            </a>
        </li><!-- End administrasi Nav -->

        <li class="nav-heading">Administrator</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/logout">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Logout Page Nav -->

    </ul>

</aside><!-- End Sidebar-->