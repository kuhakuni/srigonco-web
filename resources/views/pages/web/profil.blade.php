@extends('layouts.web.template')
@section('main')
<main>
    <section>
        <div class="container">
            <h2>Sambutan Kepala Desa Srigonco</h2>
            <div class="my-4 row flex-lg-row flex-column-reverse">
                <div class="col-lg-7 col-12 my-auto">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam consequat pretium posuere nunc
                        habitant leo, aliquet ligula justo. Quisque tellus tincidunt aliquam fermentum. Ipsum urna,
                        tincidunt rhoncus enim, a. Duis pulvinar non sit porta. Massa, pulvinar pellentesque venenatis
                        malesuada purus eget. Urna, purus consectetur vehicula est adipiscing aliquet. Sed convallis
                        volutpat augue nec lectus egestas id fusce condimentum. consectetur vehicula est adipiscing
                        aliquet. Sed convallis volutpat augue nec lectus egestas id fusce condimentum. consectetur
                        vehicula est adipiscing aliquet. Sed convallis volutpat augue</p>
                </div>
                <div class=" col-lg-5 col-12 d-flex justify-content-center">
                    <img class="mx-auto" src="{{ asset('img/Logo_kab_malang.png') }}" alt="Missing Logo">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <img class="w-100 border-r-15" src="{{ asset('img/peta-srigonco.png') }}" alt="Missing Logo">
                </div>
                <div class="col-lg-8 col-12">
                    Srigonco adalah sebuah desa yang subur dan asri yang terletak terletak di kecamatan Bantur,
                    Kabupaten Malang yang berada kurang lebih 54 KM dari pusat Kota Malang. Desa yang mempunyai luas
                    wilayah sebesar 811,9 HA ini dihuni oleh sebanyak 5.651 orang yang tinggal pada 3 dusun antara lain
                    Dusun Krajan, Dusun Jambe, dan Dusun Watu Sigar. Desa ini terletak paling ujung selatan wilayah
                    Kecamatan Bantur. Wilayah dari Desa Srigonco terdiri dari hutan dan persawahan yang mengakibatkan
                    sebagian besar mata pencaharian penduduk desa adalah bercocok tanam. Di Desa ini juga terdapat
                    pesantren yang memiliki kontribusi sangat penting dibidang keagamaan untuk menciptakan desa beriman
                    dan bersih, pesantren tersebut adalah pesantren Darul Hikam, Al-Jawahir, Darul Hikam, dan pesantren
                    Al-Jawahir.
                </div>
            </div>
            <div class="row">
                <div class="border-r-15 bg-primary col-12 p-4 mt-4">
                    <h3 class="text-center text-black">Struktur Desa Srigonco</h3>
                    <img class="w-100" src="{{ asset('img/struktur-desa.png') }}" alt="">
                </div>
                <div class="my-4 row">
                    <div class="col-lg-4 col-12 d-flex justify-content-center my-4">
                        <iframe class="h-100 border-r-10" src="https://www.youtube.com/embed/fN5daMGykKs">
                        </iframe>
                    </div>
                    <div class="col-lg-4 col-12 d-flex justify-content-center my-4">
                        <iframe class="h-100 border-r-10" src="https://www.youtube.com/embed/FvTiBZlUx68">
                        </iframe>
                    </div>
                    <div class="col-lg-4 col-12 d-flex justify-content-center my-4">
                        <iframe class="h-100 border-r-10" src="https://www.youtube.com/embed/xR-vxJ7PEyQ">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection