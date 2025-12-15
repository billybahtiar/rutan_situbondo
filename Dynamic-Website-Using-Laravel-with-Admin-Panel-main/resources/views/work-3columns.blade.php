@include('header')

<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
	<div class="container">
		<div class="page-name">
			<h1>Dokumentasi</h1>
			<span>Kegiatan di Rutan</span>
		</div>
	</div>
</section>

<section class="portfolio on-portfolio">
	<div class="container">

		<div class="row">
			<div class="col-sm-12 text-center">
				<div id="projects-filter">
					<a href="#" data-filter="*" class="active">Show All</a>
					<a href="#" data-filter=".Pegawai">Pegawai Di Rutan</a>
					<a href="#" data-filter=".Kegiatan">Kegiatan Di Rutan</a>
					<a href="#" data-filter=".Acara">Acara Di Rutan</a>
					<a href="#" data-filter=".Kunjungan">Kunjungan Di Rutan</a>
				</div>
			</div>
		</div>

		<div class="row" id="portfolio-grid">

			@foreach($arr as $photos)			
			<div class="item col-md-4 col-sm-6 col-xs-12 {{ $photos->type }}">
				<figure>
					<img alt="image" src="{{ asset('images/'.$photos->image) }}">
					<figcaption>
						<h3>{{ $photos->title }}</h3>
						<p>{{ $photos->details }}</p>
					</figcaption>
				</figure>	
			</div>
			@endforeach

		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="portfolio-page-nav text-center">
					<ul>
						{{ $arr->links('/pagination/photos-pagination') }}
					</ul>
				</div>
			</div>
		</div>

	</div>
</section>

@include('footer')
@include('scripts')
