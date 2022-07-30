@extends('layouts.web.template') 
@section('main')
<main id="main">
	<!-- ======= Blog Single Section ======= -->
	<section id="blog" class="blog pt-5">
		<div class="container" data-aos="fade-up">
			<div class="row">
				@if (!$berita->isEmpty()) 
                @foreach ($berita as $news)
				<div class="col-lg-8">
					<article class="entry entry-single">
						<div class="entry-img">
							<img
								src="{{ $news->image }}"
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
							</ul>
						</div>

						<div class="entry-content">{{ $news->isi_berita }}</div>
					</article>
					<!-- End blog entry -->
				</div>
				@endforeach

				<!-- End blog entries list -->

				<div class="col-lg-4">
					<div class="sidebar">
						<!-- End sidebar search formn-->
						<h3 class="sidebar-title">Kate</h3>
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

						<h3 class="sidebar-title">Berita Terbaru</h3>
						<div class="sidebar-item recent-posts">
							<div class="post-item clearfix">
								<img
									src="assets/img/blog/blog-recent-1.jpg"
									alt=""
								/>
								<h4>
									<a href="blog-single.html"
										>Nihil blanditiis at in nihil autem</a
									>
								</h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>

							<div class="post-item clearfix">
								<img
									src="assets/img/blog/blog-recent-2.jpg"
									alt=""
								/>
								<h4>
									<a href="blog-single.html"
										>Quidem autem et impedit</a
									>
								</h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>

							<div class="post-item clearfix">
								<img
									src="assets/img/blog/blog-recent-3.jpg"
									alt=""
								/>
								<h4>
									<a href="blog-single.html"
										>Id quia et et ut maxime similique
										occaecati ut</a
									>
								</h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>
						</div>
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
