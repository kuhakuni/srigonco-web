@extends('layouts.web.template') @section('main')
<main id="main">
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            @if (!empty($berita))
            <h1 class="text-black my-4">
                <strong>Berita Srigonco</strong>
            </h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="berita-card">
                        @foreach ($berita as $news)
                        <div class="berita">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <div class="aspect-ratio">
                                        <img class="img-fluid rounded-1"
                                            src="{{ Storage::url('public/img-berita/' . $news->image) }}"
                                            alt="Missing berita pic" />
                                    </div>
                                </div>
                                <div class="col-md-8 d-flex flex-column justify-content-center">
                                    <a href="{{ url('/berita/'. $news->slug) }}">
                                        <h5 class="berita-title">
                                            {{$news->judul}}
                                        </h5>
                                    </a>
                                    <p class="m-0">
                                        <i class="bi bi-calendar me-2"></i>
                                        {{ date('d F Y',strtotime($news->updated_at)) }}
                                    </p>
                                </div>
                            </div>
                            <hr />
                        </div>
                        @endforeach
                    </div>

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- End sidebar search formn-->
                        <h3 class="sidebar-title">Kategori</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($categories as $category)
                                <li>
                                    <a href="{{ url('berita/kategori/'. $category->slug) }}">
                                        {{ $category->kategori }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End sidebar categories-->

                        <h3 class="sidebar-title">Berita Terbaru</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-1.jpg" alt="" />
                                <h4>
                                    <a href="blog-single.html">Nihil blanditiis at in nihil autem</a>
                                </h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-2.jpg" alt="" />
                                <h4>
                                    <a href="blog-single.html">Quidem autem et impedit</a>
                                </h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-3.jpg" alt="" />
                                <h4>
                                    <a href="blog-single.html">Id quia et et ut maxime similique
                                        occaecati ut</a>
                                </h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>
                        </div>
                        <!-- End sidebar recent posts-->
                    </div>
                    <!-- End sidebar -->
                </div>

                <!-- End blog sidebar -->
            </div>
            @else
            <div class="row">
                <div class="col-md-6 text-center mx-auto">
                    <img src="{{ asset('img/undraw_page_not_found_re_e9o6.svg') }}" alt="" />
                    <p class="fs-2 fw-semibold mt-2">Berita Tidak Ditemukan</p>
                </div>
            </div>

            @endif
        </div>
    </section>
    <!-- End Blog Section -->
</main>
<!-- End #main -->

@endsection