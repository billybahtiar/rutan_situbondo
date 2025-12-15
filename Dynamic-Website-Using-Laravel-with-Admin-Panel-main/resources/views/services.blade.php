@include('header')

<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
    <div class="container">
        <div class="page-name">
            <h1>Layanan Rutan Situbondo</h1>
            <span>Informasi layanan dan program pembinaan</span>
        </div>
    </div>
</section>

<section class="services on-services green">
    <div class="container">
        <div class="row">
            <div class="section-heading">
                <h2>Layanan yang Kami Sediakan</h2>
                <div class="section-dec"></div>
            </div>

            @foreach($arr as $services)
                <div class="service-item col-md-4">
                    <span><i class="fa fa-support"></i></span>
                    <div class="tittle"><h3>{{$services->title}}</h3></div>
                    <p>{{$services->details}}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="call-to-action-2">
    <div class="container">
        <div class="left-text hidden-xs">
            <h4>Kenali Kami Lebih Dekat</h4>
            <p>
                <em>Rutan Kelas IIB Situbondo berkomitmen memberikan pelayanan yang humanis dan transparan.</em>
                <br><br>
                Melalui berbagai program pembinaan, peningkatan kebersihan, serta pelayanan kesehatan, kami
                terus berupaya menciptakan lingkungan yang aman, tertib, dan mendukung pembinaan warga binaan secara optimal.
            </p>
        </div>
        
    </div>
</section>

@include('footer')

@include('scripts')
