@extends('layouts.web.template') 
@section('main')
<main>
    <div class="bg-secondary pb-1 mb-2">
        <div class="container mb-3">
            <div
                class="row flex-lg-row flex-column-reverse justify-content-center align-items-center"
                style="min-height: 80vh"
            >
                <div class="col-lg-7 col-12">
                    <h2 class="fw-bold">Sambutan Kepala Desa</h2>
                    <p class="mt-3 text-justify" style="font-weight: 500; font-size: 1rem">
                        Assalamu'alaikum Warahmatullahi Wabarakatuh 
                        <br>
                        Puji Syukur ke hadirat Allah SWT atas karunianya,
                        Website Desa Srigonco telah hadir untuk menyebarkan
                        potensi pariwisata dan UMKM Desa Srigonco, serta menjadi
                        wadah informasi dan administrasi bagi warga Desa
                        Srigonco.
                        <br />
                        <br />
                        Saya mewakili Desa Srigonco mengucapkan terima kasih
                        yang sebesar-besarnya atas semua pihak yang turut
                        membantu merealisasikan website ini.
                        <br />
                        <br />
                        Dengan hadirnya website ini, saya berharap supaya Desa
                        Srigonco dapat lebih dikenal oleh khalayak umum dan
                        menjadikan Desa Srigonco lebih maju dan sejahtera.
                        Semoga warga Desa Srigonco juga turut merasakan manfaat
                        dari hadirnya website ini.
                        <br />
                        <br />
                        Akhir kata, semoga website ini dapat terus berjalan
                        untuk melayani kebutuhan masyarakat Desa Srigonco.
                        <br />
                        Wasalamu'alaikum Warahmatullahi Wabarakatuh 
                    </p>
                </div>
                <div
                    class="img-kades col-lg-5 col-12 d-flex justify-content-center"
                >
                    <img
                        style="max-height: 500px"
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
                <a href="img/map-srigonco.png">
                    <img
                        src="{{ asset('img/map-srigonco.png') }}"
                        alt="Missing Logo"
                    />
                </a>
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
                <a href="img/Struktur Perangkat Desa.png">
                    <img
                        src="{{ asset('img/Struktur Perangkat Desa.png') }}"
                        alt="Missing struktur pic"
                    />
                </a>
            </div>
            <h3 class="text-center fw-bold">Seputar Desa Srigonco</h3>
            <div class="my-4 row d-flex justify-content-center">
                <div class="col-md-4 col-12 my-2 d-flex justify-content-center align-items-center">
                    <div class="ratio ratio-16x9">
                        <iframe
                            class="rounded-3"
                            src="https://www.youtube.com/embed/fN5daMGykKs"
                        >
                        </iframe>
                    </div>
                </div>
                <div class="col-md-4 col-12 my-2 d-flex justify-content-center align-items-center">
                    <div class="ratio ratio-16x9">
                        <iframe
                            class="rounded-3"
                            src="https://www.youtube.com/embed/FvTiBZlUx68"
                        >
                        </iframe>
                    </div>
                </div>
                <div class="col-md-4 col-12 my-2 d-flex justify-content-center align-items-center">
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
