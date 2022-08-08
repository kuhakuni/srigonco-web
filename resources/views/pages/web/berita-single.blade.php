@extends('layouts.web.template') 
@section('main')
<main id="main">
	<!-- ======= Blog Single Section ======= -->
	<section id="blog" class="blog pt-5">
		<div class="container">
			<div class="row">
				@if (!$berita->isEmpty()) 
                @foreach ($berita as $news)
				<div class="col-lg-8">
					<article class="entry entry-single">
						<div class="entry-img">
							<img
								src="{{asset('storage/img-berita/' . $news->image) }}"
								alt=""
								class="img-fluid"
							/>
						</div>

						<h2 class="entry-title">{{ $news->judul }}</h2>

						<div class="entry-meta">
							<ul>
								<li class="d-flex align-items-center">
									<i class="bi bi-calendar"></i>
									{{ date('d F
									Y',strtotime($news->updated_at)) }}
								</li>
								<li class="d-flex align-items-center">
									<i class="bi bi-tags"></i>
									{{ $news->kategori->kategori }}
								</li>
							</ul>
						</div>

						<div class="entry-content">{!! $news->isi_berita !!}</div>
					</article>
					<!-- End blog entry -->
				</div>
				@endforeach

				<!-- End blog entries list -->

				<div class="col-lg-4">
					<div class="sidebar">
						<h3 class="sidebar-title">Berita Terbaru</h3>
                        <hr>
						<div class="sidebar-item recent-posts">
                            @foreach ($recent_news as $news)
							<div class="post-item clearfix">
								<img
                                    src="{{asset('storage/img-berita/' . $news->image) }}"
									alt="Missing Berita Pic"
								/>
								<h4>
									<a href="blog-single.html"
										>{{ $news->judul }}</a
									>
								</h4>
								<time>{{ date('d F Y',strtotime($news->updated_at)) }}</time>
							</div>
                            <hr>
                            @endforeach
						</div>
                        <!-- End sidebar search formn-->
						<h3 class="sidebar-title">Kategori</h3>
						<div class="sidebar-item categories">
							<ul>
								@foreach ($categories as $category)
								<li>
									<a
										href="{{ url('berita/kategori/'. $category->slug) }}"
									>
										{{ $category->kategori }}
									</a>
								</li>
								@endforeach
							</ul>
						</div>
						<!-- End sidebar categories-->

						<!-- End sidebar recent posts-->
					</div>
					<!-- End sidebar -->
				</div>
				@else
				<div class="col-md-6 text-center mx-auto">
					<img
						src="{{ asset('img/undraw_page_not_found_re_e9o6.svg') }}"
						alt=""
					/>
					<p class="fs-2 fw-semibold mt-2">Berita Tidak Ditemukan</p>
				</div>
				@endif
				<!-- End blog sidebar -->
			</div>
		</div>
	</section>
	<!-- End Blog Single Section -->
</main>
@endsection
