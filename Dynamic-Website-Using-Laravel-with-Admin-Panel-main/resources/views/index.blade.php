@include('header')

<section class="slider-wrapper">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">

            @foreach($slider_i as $slider)
            <div class="swiper-slide"
                 style="background-image:url('{{ asset('images/'.$slider->image) }}');">
                <div class="overlay"></div>

                <div class="slide-content">
                    <h2>{{ $slider->title }}</h2>
                    <p>{{ $slider->details }}</p>
                    <a href="{{ url('about') }}" class="btn-slider">
                        Tentang Kami
                    </a>
                </div>
            </div>
            @endforeach

        </div>

        <!-- PANAH -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- PAGINATION -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<style>
/* ===== RESET JARAK ===== */
.slider-wrapper,
.hero-slider,
.swiper-slide {
    margin: 0 !important;
    padding: 0 !important;
}

/* ===== FULL SCREEN ===== */
.hero-slider {
    width: 100%;
    height: 100vh;
}

/* ===== IMAGE ===== */
.swiper-slide {
    background-size: cover;
    background-position: center;
    position: relative;
}

/* ===== DARK OVERLAY ===== */
.overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0,0,0,.55),
        rgba(0,0,0,.35)
    );
    z-index: 1;
}

/* ===== TEXT CONTENT ===== */
.slide-content {
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #ffffff;
    width: 90%;
    max-width: 900px;
    z-index: 2;
}

.slide-content h2 {
    font-size: 46px;
    font-weight: 700;
    margin-bottom: 15px;
    line-height: 1.2;
    color: #ffffffff;
    animation: fadeUp .8s ease forwards;
}

.slide-content p {
    font-size: 19px;
    line-height: 1.6;
    color: rgba(255,255,255,.95);
    margin-bottom: 30px;
    animation: fadeUp 1.1s ease forwards;
}

/* ===== BUTTON ===== */
.btn-slider {
    display: inline-block;
    padding: 14px 34px;
    border-radius: 4px;
    background: #375cffff;
    color: #000;
    font-weight: 600;
    text-decoration: none;
    transition: all .3s ease;
    animation: fadeUp 1.4s ease forwards;
}

.btn-slider:hover {
    background: #f1f1f1;
    transform: translateY(-2px);
}

/* ===== PANAH DESKTOP ===== */
.swiper-button-prev,
.swiper-button-next {
    color: #ffffff;
}

/* ===== MOBILE: PANAH MATI TOTAL ===== */
@media (max-width: 768px),
       (hover: none) and (pointer: coarse) {

    .hero-slider {
        height: 85vh;
    }

    .swiper-button-prev,
    .swiper-button-next {
        display: none !important;
        opacity: 0 !important;
        visibility: hidden !important;
        pointer-events: none !important;
    }

    .slide-content h2 {
        font-size: 26px;
    }

    .slide-content p {
        font-size: 15px;
    }
}

/* ===== TEXT ANIMATION ===== */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
new Swiper('.hero-slider', {
    loop: true,
    speed: 900,
    effect: 'fade',
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    /* PANAH */
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    /* KEYBOARD ← → */
    keyboard: {
        enabled: true,
        onlyInViewport: true,
    }
});
</script>



<section class="services services_edit" style="background: #0c4a6e; position: relative; overflow: hidden;">

    <!-- ======= JAM KERJA (Versi Mirip Gambar) ======= -->
<div style="display:flex; align-items:center; gap:50px; margin-top:60px;">

    <!-- FOTO -->
    <div style="flex:1;">
        <img src="/images/rutan.jpg" 
             alt="Jam Kerja" 
             style="width:100%; border-radius:10px; object-fit:cover;">
    </div>

    <!-- TEKS JAM KERJA -->
    <div style="flex:1;">

        <h2 style="font-size:36px; font-weight:700; color:white; margin-bottom:10px;">
            Informasi Jam Kerja
        </h2>

        <h3 style="font-size:24px; color:#4dd0e1; border-bottom:3px solid #4dd0e1; display:inline-block; padding-bottom:8px;">
            Jam Kerja
        </h3>

        <p style="margin-top:20px; color:#e0e0e0; font-size:18px;">
            Berikut Rincian Jam Kerja Rumah Tahanan Kelas IIB Situbondo:
        </p>

        <ul style="margin-top:25px; list-style:none; padding-left:0; color:#fff; font-size:18px;">
            <li style="margin-bottom:18px;">
                <span style="color:#4dd0e1; font-weight:bold;">✔ Hari Senin - Kamis</span><br>
                Jam 07.00 - 14.00
            </li>

            <li style="margin-bottom:18px;">
                <span style="color:#4dd0e1; font-weight:bold;">✔ Hari Jumat - Sabtu</span><br>
                Jam 07.00 - 13.00
            </li>

                <h2 style="font-size:36px; font-weight:700; color:white; margin-bottom:10px;">
            Informasi Jam Kunjungan
               </h2>
            <li style="margin-bottom:18px;">
                <span style="color:#4dd0e1; font-weight:bold;">✔ Hari Senin - Kamis</span><br>
                Jam 08.00 - 11.00
            </li>
        </ul>

    </div>
</div>
<!-- ===== END JAM KERJA ===== -->

</section>
<section class="call-to-action-2" style="padding: 80px 0; background: #ffffffff;">

    <div style="
        max-width:1200px; 
        margin:auto;
        display:flex;
        align-items:center;       /* INI YANG MEMBUAT VIDEO DI TENGAH */
        justify-content:space-between;
        gap:60px;
    ">

        <!-- TEKS -->
        <div style="flex:1; text-align:justify;">
            <h2 style="font-weight:700; margin-bottom:20px;">
                Tentang Rutan Situbondo
            </h2>

            <p style="font-size:17px; line-height:1.8; color:#444;">
                <em>
                    Rutan Kelas IIB Situbondo merupakan unit pelaksana teknis pemasyarakatan
                    yang berfokus pada pelayanan, pembinaan, dan pengamanan warga binaan.
                </em>
                <br><br>
                Rutan Situbondo terus meningkatkan layanan publik, kebersihan lingkungan,
                keamanan, serta program pembinaan seperti pelatihan kerja, kerajinan, dan
                pembinaan kepribadian. Rutan juga aktif menjalankan kegiatan kesehatan,
                kebugaran, serta penguatan integritas melalui Reformasi Birokrasi dan WBK/WBBM.
            </p>
        </div>

        <!-- VIDEO -->
        <div style="flex:1; display:flex; justify-content:center;">
            <iframe 
                width="100%" 
                height="350"
                style="max-width:500px; border-radius:10px;"
                src="https://www.youtube.com/embed/zIHUhG2l8xE?si=aAfwdqmOMvXI0KWR"
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>

    </div>

</section>





<section class="portfolio">
    <div class="container">
        <div class="section-heading-white" style="animation: fadeInDown 0.8s ease-out;">
            <h2>Dokumentasi Kegiatan</h2>
            <div class="section-dec"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="owl-portfolio" class="owl-carousel owl-theme">

                @foreach($photos_i as $photos)
                    <div class="item">
                        <figure style="position: relative; overflow: hidden; transition: all 0.3s ease;"
                        onmouseover="this.querySelector('img').style.transform='scale(1.1)'; this.querySelector('figcaption').style.background='rgba(255, 255, 255, 0.95)';"
                        onmouseout="this.querySelector('img').style.transform='scale(1)'; this.querySelector('figcaption').style.background='';">
                            
                            <img alt="portfolio" src="{{asset('images/'.$photos->image)}}" style="transition: transform 0.5s ease;">
                            
                            <figcaption style="transition: all 0.3s ease;">
                                <h3>{{$photos->title}}</h3>
                                <p>{{$photos->details}}</p>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach

                </div>
            </div>
        </div>

        <div class="owl-navigation" style="opacity: 1 !important;">
          <a class="btn prev fa fa-angle-left"></a>
          <a class="btn next fa fa-angle-right"></a>
          <a href="/work-3columns" class="go-to">Selengkapnya</a>
        </div>
    </div>
</section>



<section class="blog-posts" style="padding: 60px 0; background: #f8f9fa;">
    <div class="container">
        <div class="section-heading" style="animation: fadeInDown 0.8s ease-out; text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 36px; font-weight: 700; color: #1a1a1a; margin-bottom: 15px;">Informasi & Berita</h2>
            <div class="section-dec" style="width: 80px; height: 3px; background: #0c4a6e; margin: 0 auto;"></div>
        </div>

        <div class="row">
         @foreach($blog_i->take(6) as $blog)
            <div class="col-md-4" style="margin-bottom: 30px;">
                <div class="blog-card"
                    style="
                        background: #fff;
                        border-radius: 12px;
                        overflow: hidden;
                        box-shadow: 0 4px 15px rgba(85, 0, 0, 0.08);
                        transition: all 0.4s ease;
                        display: flex;
                        flex-direction: column;
                        height: 100%;
                    "
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'; this.querySelector('.blog-img-wrapper img').style.transform='scale(1.08)'"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)'; this.querySelector('.blog-img-wrapper img').style.transform='scale(1)'">

                    <!-- IMAGE -->
                    <a href="/blog-single/{{$blog->id}}" 
                       class="blog-img-wrapper"
                       style="
                            display: block;
                            overflow: hidden;
                            position: relative;
                            padding-top: 66.67%;
                       ">
                        <img src="{{asset('images/'.$blog->image)}}" 
                             alt="{{$blog->title}}" 
                             style="
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                transition: transform 0.5s ease;
                             ">
                    </a>

                    <!-- CONTENT -->
                    <div style="padding: 25px; display: flex; flex-direction: column; flex-grow: 1;">
                        <!-- DATE -->
                        <div style="
                            font-size: 13px;
                            color: #999;
                            margin-bottom: 12px;
                            font-weight: 500;
                        ">
                            {{ date('d M Y', strtotime($blog->created_at)) }}
                        </div>

                        <!-- TITLE -->
                        <h3 class="blog-title" style="
                            font-size: 18px;
                            font-weight: 700;
                            line-height: 1.4;
                            margin-bottom: 12px;
                            min-height: 50px;
                        ">
                            <a href="/blog-single/{{$blog->id}}" style="
                                color: #1a1a1a;
                                text-decoration: none;
                                transition: color 0.3s ease;
                            "
                            onmouseover="this.style.color='#007bff'"
                            onmouseout="this.style.color='#1a1a1a'">
                                {{$blog->title}}
                            </a>
                        </h3>

                        <!-- SHORT DESCRIPTION -->
                        <p class="blog-desc" style="
                            color: #666;
                            line-height: 1.7;
                            font-size: 14px;
                            flex-grow: 1;
                            margin-bottom: 20px;
                        ">
                            {{$blog->short_details}}
                        </p>

                        <!-- FOOTER (Views, Comments, Read More) -->
                        <div style="
                            display: flex;
                            align-items: center;
                            justify-content: space-between;
                            padding-top: 15px;
                            border-top: 1px solid #eee;
                            margin-top: auto;
                        ">
                            <!-- Stats -->
                            <div style="display: flex; gap: 15px; align-items: center;">
                                <span style="
                                    font-size: 13px;
                                    color: #999;
                                    display: flex;
                                    align-items: center;
                                    gap: 5px;
                                ">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    {{$blog->views ?? 0}}
                                </span>
                                <span style="
                                    font-size: 13px;
                                    color: #999;
                                    display: flex;
                                    align-items: center;
                                    gap: 5px;
                                ">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                    </svg>
                                    {{$blog->comments ?? 0}}
                                </span>
                            </div>

                            <!-- Read More Link -->
                            <a href="/blog-single/{{$blog->id}}" 
                               style="
                                    color: #007bff;
                                    font-size: 14px;
                                    font-weight: 600;
                                    text-decoration: none;
                                    display: flex;
                                    align-items: center;
                                    gap: 5px;
                                    transition: gap 0.3s ease;
                               "
                               onmouseover="this.style.gap='8px'"
                               onmouseout="this.style.gap='5px'">
                                Selengkapnya
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
        </div>

    </div>
</section>

<style>
/* Batas 2 baris agar grid rapi */
.blog-title {
    height: 48px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
}

/* Batas 3 baris untuk deskripsi agar card sama tinggi */
.blog-desc {
    height: 72px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
</style>

<style>
@keyframes fadeInDown { from {opacity:0; transform:translateY(-30px);} to {opacity:1; transform:translateY(0);} }
@keyframes fadeInUp { from {opacity:0; transform:translateY(30px);} to {opacity:1; transform:translateY(0);} }
@keyframes fadeIn { from {opacity:0;} to {opacity:1;} }
@keyframes slideInLeft { from {opacity:0; transform:translateX(-50px);} to {opacity:1; transform:translateX(0);} }
@keyframes slideInRight { from {opacity:0; transform:translateX(50px);} to {opacity:1; transform:translateX(0);} }
@keyframes movePattern { 0% {transform:translate(0,0);} 100% {transform:translate(50px,50px);} }
</style>

<style>

/* ===========================
   RESPONSIVE GLOBAL
=========================== */

/* =================================
   RESPONSIVE OVERRIDE ONLY
   TANPA UBAH HTML
================================= */

/* TABLET */
@media (max-width: 992px) {

    /* JAM KERJA */
    section.services > div[style*="display:flex"] {
        flex-direction: column !important;
        text-align: center !important;
    }

    section.services img {
        max-width: 90% !important;
        margin: 0 auto 20px auto !important;
        display: block !important;
    }

    /* TENTANG RUTAN */
    section.call-to-action-2 > div {
        flex-direction: column !important;
        text-align: center !important;
    }

    section.call-to-action-2 iframe {
        width: 100% !important;
        height: 300px !important;
        margin: 20px auto 0 auto !important;
        display: block !important;
    }
}

/* MOBILE */
@media (max-width: 768px) {

    /* JAM KERJA */
    section.services h2 {
        font-size: 24px !important;
    }

    section.services h3 {
        font-size: 18px !important;
    }

    section.services ul li {
        font-size: 15px !important;
    }

    /* SLIDER */
    .tp-caption.first-line {
        font-size: 22px !important;
        top: 180px !important;
    }

    .tp-caption.second-line {
        font-size: 16px !important;
        top: 240px !important;
        padding: 0 15px !important;
        text-align: center !important;
    }

    .tp-caption.slider-btn {
        top: 320px !important;
    }
}

/* MOBILE KECIL */
@media (max-width: 480px) {

    section.services h2,
    section.call-to-action-2 h2 {
        font-size: 20px !important;
    }

    section.services ul li {
        font-size: 14px !important;
    }

    section.call-to-action-2 iframe {
        height: 220px !important;
    }
}


</style>



@include('footer')
@include('scripts')
