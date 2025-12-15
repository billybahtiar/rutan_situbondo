@include('header')

<style>
	/* ===== GLOBAL ===== */
	body {
		background-color: #f6f8fc;
	}

	/* ===== PAGE HEADING ===== */
	.page-heading {
		border-bottom-left-radius: 40px;
		border-bottom-right-radius: 40px;
		overflow: hidden;
	}

	.page-heading h1 {
		letter-spacing: 1px;
	}

	/* ===== BLOG CARD ===== */
	.blog-item {
		background: #ffffff;
		border-radius: 16px;
		overflow: hidden;
		box-shadow: 0 10px 30px rgba(0,0,0,.08);
		transition: all .35s ease;
		height: 100%;
	}

	.blog-item:hover {
		transform: translateY(-10px);
		box-shadow: 0 20px 45px rgba(0,0,0,.15);
	}

	.blog-item img {
		transition: transform .5s ease;
	}

	.blog-item:hover img {
		transform: scale(1.08);
	}

	.blog-item h3 a {
		color: #222;
		text-decoration: none;
		transition: color .3s ease;
	}

	.blog-item:hover h3 a {
		color: #5b5ce2;
	}

	.read-more a {
		color: #5b5ce2;
		font-weight: 600;
		display: inline-flex;
		align-items: center;
		gap: 6px;
		transition: transform .3s ease;
	}

	.read-more a:hover {
		transform: translateX(6px);
	}

	/* ===== PAGINATION ===== */
	.portfolio-page-nav ul li {
		display: inline-block;
		margin: 0 5px;
	}

	.portfolio-page-nav ul li a,
	.portfolio-page-nav ul li span {
		padding: 10px 16px;
		border-radius: 30px;
		background: #ffffff;
		color: #555;
		box-shadow: 0 4px 10px rgba(0,0,0,.08);
		transition: all .3s ease;
	}

	.portfolio-page-nav ul li.active span,
	.portfolio-page-nav ul li a:hover {
		background: #5b5ce2;
		color: #ffffff;
	}
</style>

<!-- ===================== PAGE HEADING ===================== -->
<section class="page-heading wow fadeIn" data-wow-duration="1.5s"
	style="
		background-image: url('{{ asset('files/images/01-heading.jpg') }}');
		background-size: cover;
		background-position: center;
		position: relative;
		padding: 140px 0;
	">

	<div style="
		position:absolute;
		inset:0;
		background:linear-gradient(to bottom, rgba(0,0,0,.6), rgba(0,0,0,.45));
		z-index:1;
	"></div>

	<div class="container" style="position:relative; z-index:2;">
		<div class="page-name text-center">
			<h1 class="wow fadeInDown" data-wow-duration="1s"
				style="#000000ff; font-size:50px; font-weight:800;">
				Berita Kami
			</h1>
			<span class="wow fadeInUp" data-wow-duration="1.2s"
				style="#232323ff; font-size:18px;">
				Update Info Seputar Rutan Situbondo
			</span>
		</div>
	</div>
</section>

<!-- ===================== BLOG GRID ===================== -->
<section class="on-blog-grid" style="padding: 90px 0;">
	<div class="container">
		<div class="row g-4">

			@foreach ($arr as $blog)
			<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
				<div class="blog-item">

					<a href="/blog-single/{{ $blog->id }}">
						<img src="{{ asset('images/'.$blog->image) }}"
							alt=""
							style="width:100%; height:230px; object-fit:cover;">
					</a>

					<div style="padding:25px;">
						<h3 style="font-size:22px; font-weight:700; margin-bottom:12px;">
							<a href="/blog-single/{{ $blog->id }}">
								{{ $blog->title }}
							</a>
						</h3>

						<p style="color:#666; font-size:15px; line-height:1.6; margin-bottom:18px;">
							{{ $blog->short_details }}
						</p>

						<div class="read-more">
							<a href="/blog-single/{{ $blog->id }}">
								Read more →
							</a>
						</div>
					</div>

				</div>
			</div>
			@endforeach

			<div class="col-md-12">
				<div class="portfolio-page-nav text-center wow fadeInUp" data-wow-duration="1s" style="margin-top:40px;">
					<ul style="list-style:none; padding:0; margin:0;">
						{{ $arr->links('/pagination/blog-pagination') }}
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>

@include('footer')
@include('scripts')
