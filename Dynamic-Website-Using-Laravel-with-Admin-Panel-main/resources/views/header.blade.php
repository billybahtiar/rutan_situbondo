<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Rutan Situbondo</title>

<!-- CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- TEMPLATE CSS -->
<link rel="stylesheet" href="{{asset('files/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('files/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('files/css/simple-line-icons.css')}}">
<link rel="stylesheet" href="{{asset('files/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('files/css/style.css')}}">
<link rel="stylesheet" href="{{asset('files/rs-plugin/css/settings.css')}}">

<style>

:root{ --rutan-primary:#0d6efd; }

/* LOGO */
.logo a{
    display:flex;
    align-items:center;
    gap:8px;
    font-weight:700;
    color:var(--rutan-primary);
}
.logo-img{ height:32px; }

/* PAGE LOADER */
#page-loader{
    position:fixed; inset:0;
    background:#fff; z-index:99999;
    display:flex; align-items:center; justify-content:center;
}
.spinner{
    width:50px; height:50px;
    border:6px solid #ccc;
    border-top-color:var(--rutan-primary);
    border-radius:50%;
    animation:spin .7s linear infinite;
}
@keyframes spin{ to{ transform:rotate(360deg);} }


/* =====================================================
     SIDEBAR PREMIUM FIXED
 ===================================================== */

.mobile-overlay{
    position:fixed; inset:0;
    background:rgba(0,0,0,.35);
    backdrop-filter:blur(4px);
    opacity:0;
    z-index:49999;
    pointer-events:none;
    transition:opacity .35s ease;
}
.mobile-overlay.show{
    opacity:1;
    pointer-events:auto;
}

.mobile-sidebar{
    position:fixed;
    top:0; 
    left:0;
    width:78%;
    max-width:300px;
    height:100%;
    background:rgba(255,255,255,0.90);
    backdrop-filter:blur(18px);
    border-right:1px solid rgba(0,0,0,0.08);
    box-shadow:0 10px 40px rgba(0,0,0,0.2);
    transform:translateX(-110%);
    z-index:50000;
    padding:30px 20px;
    transition:all .38s cubic-bezier(.23,1,.32,1);
    overflow-y:auto;
}

.mobile-sidebar.open{
    transform:translateX(0);
}

.mobile-sidebar ul{
    list-style:none;
    margin:0; padding:0;
}

.mobile-sidebar li{
    margin-bottom:5px;
}

.mobile-sidebar a{
    font-size:18px;
    font-weight:600;
    color:#222;
    text-decoration:none;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:14px 12px;
    border-radius:10px;
    transition:.25s;
}
.mobile-sidebar a:hover{
    background:rgba(0,0,0,.06);
}

.sidebar-divider{
    height:1px;
    background:rgba(0,0,0,.12);
    margin:15px 0;
}

/* DROPDOWN MOBILE */
.dropdown-icon{
    font-size:18px;
    transition:transform .35s cubic-bezier(.23,1,.32,1);
}

.dropdown-icon.rotate{
    transform:rotate(90deg);
}

.submenu{
    display:none;
    padding-left:15px;
    animation:submenuIn .3s ease;
}
@keyframes submenuIn {
    from { opacity:0; transform:translateY(-4px);}
    to   { opacity:1; transform:translateY(0);}
}


/* =====================================================
     DESKTOP DROPDOWN FIX
 ===================================================== */

.main-navigation ul li{
    position:relative;
}

.main-navigation ul li .sub-menu{
    position:absolute;
    top:100%; left:0;
    width:100px;
    background:#fff;
    padding:10px 0;
    box-shadow:0 5px 20px rgba(0,0,0,.15);
    opacity:0;
    visibility:hidden;
    transform:translateY(10px);
    transition:.25s;
    z-index:9999;
}

.main-navigation ul li:hover .sub-menu{
    opacity:1;
    visibility:visible;
    transform:translateY(0);
}

.sub-menu li{
    padding:8px 20px;
}

.sub-menu li a{
    color:#333 !important;
    font-size:15px;
}


/* ==========================
   MOBILE FIX
=========================== */
@media (max-width:768px){
    body,html{ overflow-x:hidden; }

    .site-header{
        position:relative !important;
        z-index:30000 !important;
    }

    nav.main-navigation{
        display:none !important;
    }

    .header-right-toggle{
        display:block !important;
        position:absolute;
        right:15px; top:15px;
        z-index:30001;
    }
}

/* =====================================================
     HAMBURGER WHITE + HOVER PREMIUM
 ===================================================== */

.header-right-toggle i{
    color:#ffffff !important;      /* warna awal putih */
    font-size:26px;
    transition:.25s ease;
}

.header-right-toggle:hover i{
    color:#0d6efd !important;      /* warna hover biru */
    transform:scale(1.15);
}

/* SUBMENU STYLE OVERRIDE */
.main-navigation.navbar ul li .sub-menu li a {
    font-size: 12px !important;       /* lebih kecil */
    color: #555 !important;           /* warna teks berbeda */
    padding: 5px 15px !important;     /* padding berbeda */
    font-weight: 400 !important;      /* lebih ringan */
    background: #f9f9f9 !important;   /* latar berbeda */
    border-bottom: 1px solid #eee !important; /* garis tipis antar submenu */
}

/* Hover submenu */
.main-navigation.navbar ul li .sub-menu li a:hover {
    background: #0d6efd !important;  /* background biru saat hover */
    color: #fff !important;           /* teks putih saat hover */
}

</style>
</head>

<body>

<!-- LOADER -->
<div id="page-loader"><div class="spinner"></div></div>

<!-- ===== SIDEBAR PREMIUM ===== -->
<div class="mobile-overlay" id="mobileOverlay"></div>

<div class="mobile-sidebar" id="mobileSidebar">

   <ul>
    <li>
        <a href="/">Home</a>
    </li>

    <li>
        <a href="javascript:void(0)" class="dropdown-btn">
            Profil
            <i class="fa fa-chevron-right dropdown-icon"></i>
        </a>
        <ul class="submenu">
            <li><a href="/about">Tentang Rutan Situbondo</a></li>
            <li><a href="/visi-misi">Visi, Misi, dan Tata Nilai</a></li>
            <li><a href="/tupoksi">Tugas Pokok dan Fungsi</a></li>
            <li><a href="/struktur-organisasi">Struktur Organisasi</a></li>
            <li><a href="/profil-pejabat">Profil Pejabat</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript:void(0)" class="dropdown-btn">
            Berita
            <i class="fa fa-chevron-right dropdown-icon"></i>
        </a>
        <ul class="submenu">
            <li><a href="/blog">Berita Rutan</a></li>
            <li><a href="/blog-single">Detail Berita</a></li>
            <li><a href="/blog">Berita Media Lain</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript:void(0)" class="dropdown-btn">
            Layanan Publik
            <i class="fa fa-chevron-right dropdown-icon"></i>
        </a>
        <ul class="submenu">
            <li><a href="/kunjungan-napi">Kunjungan Napi</a></li>
            <li><a href="/kunjungan-tahanan">Kunjungan Tahanan</a></li>
            <li><a href="/integrasi">Integrasi</a></li>
            <li><a href="/magang">Magang</a></li>
            <li><a href="/pengaduan">Pengaduan</a></liw>
            <li><a href="/layanan-lain">Layanan Lain</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript:void(0)" class="dropdown-btn">
            Informasi Publik
            <i class="fa fa-chevron-right dropdown-icon"></i>
        </a>
        <ul class="submenu">
            <li><a href="dipa">DIPA</a></li>
            <li><a href="lakip">LAKIP</a></li>
            <li><a href="lkjip">LKJIP</a></li>
            <li><a href="survey">Survey</a></li>
            <li><a href="renstra">Renstra</a></li>
            <li><a href="kerjasama">Kerjasama</a></li>
            <li><a href="sop">SOP</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript:void(0)" class="dropdown-btn">
            Pembinaan
            <i class="fa fa-chevron-right dropdown-icon"></i>
        </a>
        <ul class="submenu">
            <li><a href="kemandirian">Kemandirian</a></li>
            <li><a href="kerohanian">Kerohanian</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript:void(0)" class="dropdown-btn">
            Produk WBP
            <i class="fa fa-chevron-right dropdown-icon"></i>
        </a>
        <ul class="submenu">
            <li><a href="/product-teh">Fresh Mint</a></li>
            <li><a href="/product-roti">Rusibon Bakery</a></li>
            <li><a href="/product-kerajinan">Kerajinan Tangan</a></li>
        </ul>
    </li>

    <li><a href="#">FAQ</a></li>

    <li>
        <a href="javascript:void(0)" class="dropdown-btn">
            Galeri
            <i class="fa fa-chevron-right dropdown-icon"></i>
        </a>
        <ul class="submenu">
            <li><a href="/work-3columns">Dokumentasi</a></li>
        </ul>
    </li>

    <li><a href="/contact">Kontak</a></li>
</ul>


    <div class="sidebar-divider"></div>

</div>




<!-- HEADER -->
<header class="site-header">
<div id="main-header" class="main-header header-sticky">
<div class="inner-header clearfix">

    <div class="logo">
        <a href="/">
            <img src="{{ asset('images/logo_kementrian.png') }}" class="logo-img">
            Rutan Situbondo
        </a>
    </div>

    <!-- HAMBURGER -->
    <div class="header-right-toggle hidden-md hidden-lg">
        <a href="javascript:void(0)" id="openSidebar">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <!-- MENU DESKTOP -->
    <nav class="main-navigation pull-right hidden-xs hidden-sm">
        <ul>
            <li><a href="/">Home</a></li>

            
            <li class="has-submenu">
                <a href="#">Profil</a>
                <ul class="sub-menu">
                    <li><a href="/about">Tentang Rutan Situbondo</a></li>
                    <li><a href="/visi-misi">Visi, Misi, dan Tata Nilai</a></li>
                    <li><a href="/tupoksi">Tugas Pokok dan Fungsi</a></li>
                    <li><a href="/struktur-organisasi">Struktur Organisasi</a></li>
                    <li><a href="/profil-pejabat">Profil Pejabat</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#">Berita</a>
                <ul class="sub-menu">
                    <li><a href="/blog">Berita Rutan</a></li>
                    <li><a href="/blog-single">Detail Berita</a></li>
                    <li><a href="/blog">Berita Media Lain</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#">Layanan Publik</a>
                <ul class="sub-menu">
                    <li><a href="/kunjungan-napi">Kunjungan Napi</a></li>
                    <li><a href="/kunjungan-tahanan">Kunjungan Tahanan</a></li>
                    <li><a href="/integrasi">Integrasi</a></li>
                    <li><a href="/magang">Magang</a></li>
                    <li><a href="/pengaduan">Pengaduan</a></li>
                    <li><a href="/layanan-lain">Layanan Lain</a></li>  
                </ul>
            </li>

             <li class="has-submenu">
                <a href="#">Informasi Publik</a>
                <ul class="sub-menu">
                    <li><a href="/dipa">DIPA</a></li>
                    <li><a href="/lakip">LAKIP</a></li>
                    <li><a href="/lkjip">LKJIP</a></li>
                    <li><a href="/survey">Survey</a></li>
                    <li><a href="/renstra">Renstra</a></li>
                    <li><a href="/kerjasama">Kerjasama</a></li>
                    <li><a href="/sop">SOP</a></li>  
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#">Pembinaan</a>
                <ul class="sub-menu">
                    <li><a href="kemandirian">Kemandirian</a></li>
                    <li><a href="kerohanian">Kerohanian</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#">Produk WBP</a>
                <ul class="sub-menu">
                    <li><a href="/product-teh">Fresh Mint</a></li>
                    <li><a href="/product-roti">Rusibon Bakery</a></li>
                    <li><a href="/product-kerajinan">Kerajinan Tangan</a></li>
                </ul>
            </li>


            <li><a href="#">FAQ</a></li>

            <li class="has-submenu">
                <a href="#">Galeri</a>
                <ul class="sub-menu">
                    <li><a href="/work-3columns">Dokumentasi</a></li>
                </ul>
            </li>

            <li><a href="/contact">Kontak</a></li>
        </ul>
    </nav>

</div>
</div>
</header>


<!-- JS -->
<script src="{{ asset('files/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('files/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('files/js/plugins.js') }}"></script>
<script src="{{ asset('files/js/custom.js') }}"></script>

<script>

/* LOADER */
window.addEventListener('load',()=>{
    document.getElementById('page-loader').style.display='none';
});

/* SIDEBAR */
const sidebar = document.getElementById("mobileSidebar");
const overlay = document.getElementById("mobileOverlay");
const openBtn = document.getElementById("openSidebar");

openBtn.addEventListener("click",()=>{
    sidebar.classList.add("open");
    overlay.classList.add("show");
});

overlay.addEventListener("click",()=>{
    sidebar.classList.remove("open");
    overlay.classList.remove("show");
});

/* MOBILE DROPDOWN */
document.querySelectorAll(".dropdown-btn").forEach(btn=>{
    btn.addEventListener("click",()=>{
        const submenu = btn.nextElementSibling;
        const icon = btn.querySelector(".dropdown-icon");
        const isOpen = submenu.style.display === "block";

        document.querySelectorAll(".submenu").forEach(s=>s.style.display="none");
        document.querySelectorAll(".dropdown-icon").forEach(i=>i.classList.remove("rotate"));

        if(!isOpen){
            submenu.style.display="block";
            icon.classList.add("rotate");
        }
    });
});

</script>

</body>
</html>
