<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Rusibon Bakery - Rutan Situbondo</title>

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
:root {
    --rutan-primary:#0d6efd;
    --header-bg:#1a1a2e;
    --success-green: #28a745;
    --whatsapp-green: #25D366;
}

/* =====================
   PRODUCT DETAIL CSS
===================== */

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
    padding-top: 70px; /* untuk header sticky */
}

.product-detail {
    padding: 50px 0 80px;
    background: #f8f9fa;
}

.product-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.product-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

.product-gallery {
    background: #fff;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    position: sticky;
    top: 100px;
}

.main-image-wrapper {
    position: relative;
    margin-bottom: 20px;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 1/1;
}

.main-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.main-image-wrapper:hover .main-image {
    transform: scale(1.05);
}

.image-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.9);
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: 0.3s;
    z-index: 10;
}

.image-nav:hover {
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

.image-nav.prev { left: 15px; }
.image-nav.next { right: 15px; }

.thumbnail-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}

.thumbnail {
    aspect-ratio: 1/1;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    border: 3px solid transparent;
    transition: 0.3s;
}

.thumbnail:hover,
.thumbnail.active {
    border-color: var(--rutan-primary);
}

.thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-info {
    background: #fff;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.product-badge {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
}

.product-title {
    font-size: 32px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 20px;
    line-height: 1.3;
}

.product-price {
    font-size: 36px;
    color: var(--success-green);
    font-weight: 700;
    margin-bottom: 25px;
}

.product-description {
    font-size: 16px;
    color: #555;
    line-height: 1.8;
    margin-bottom: 30px;
    text-align: justify;
}

.product-features {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 30px;
}

.product-features h3 {
    font-size: 18px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.feature-list li {
    padding: 10px 0;
    color: #555;
    font-size: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.feature-list li i {
    color: var(--success-green);
    font-size: 18px;
}

.product-actions {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.btn-whatsapp {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 16px 32px;
    background: var(--whatsapp-green);
    color: white;
    border: none;
    border-radius: 12px;
    font-size: 18px;
    font-weight: 600;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
    transition: all 0.3s;
    cursor: pointer;
}

.btn-whatsapp:hover {
    background: #20bd5a;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
    color: white;
    text-decoration: none;
}

.product-meta {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #e9ecef;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    color: #666;
}

.meta-item i {
    color: var(--rutan-primary);
    font-size: 16px;
}

/* SOCIAL MEDIA SHARE */
.social-share {
    margin-top: 25px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 12px;
}

.social-share h4 {
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.social-share h4 i {
    color: var(--rutan-primary);
}

.social-buttons {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.social-btn {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    transition: all 0.3s;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.social-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.social-btn.facebook {
    background: #1877f2;
}

.social-btn.facebook:hover {
    background: #145dbf;
}

.social-btn.twitter {
    background: #1da1f2;
}

.social-btn.twitter:hover {
    background: #0d8bd9;
}

.social-btn.whatsapp {
    background: #25d366;
}

.social-btn.whatsapp:hover {
    background: #20bd5a;
}

.social-btn.instagram {
    background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
}

.social-btn.instagram:hover {
    opacity: 0.9;
}

.social-btn.email {
    background: #ea4335;
}

.social-btn.email:hover {
    background: #d33426;
}

/* RESPONSIVE */
@media (max-width: 991px) {
    body { padding-top: 60px; }
    .product-row { grid-template-columns: 1fr; gap: 30px; }
    .product-gallery { position: relative; top: 0; }
    .product-title { font-size: 26px; }
    .product-price { font-size: 30px; }
    .product-info { padding: 25px; }
}

@media (max-width: 576px) {
    .product-gallery { padding: 20px; }
    .product-info { padding: 20px; }
    .thumbnail-list { grid-template-columns: repeat(3,1fr); gap: 8px; }
    .product-title { font-size: 22px; }
    .product-price { font-size: 26px; }
    .btn-whatsapp { font-size: 16px; padding: 14px 24px; }
    .product-meta { grid-template-columns: 1fr; }
}
</style>
</head>
<body>

<!-- HEADER -->
@include('header')  <!-- PENTING: Pakai include header sama persis dengan home -->

<!-- PRODUCT DETAIL -->
<section class="product-detail">
    <div class="product-container">
        <div class="product-row">

            <!-- IMAGE GALLERY -->
            <div class="product-gallery">
                <div class="main-image-wrapper">
                    <img id="mainImage" src="images/roti.jpg" alt="Rusibon Bakery" class="main-image">
                    <button class="image-nav prev" onclick="changeImage(-1)">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button class="image-nav next" onclick="changeImage(1)">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>

                <div class="thumbnail-list">
                    <div class="thumbnail active" onclick="selectImage(0)">
                        <img src="images/roti.jpg" alt="Thumbnail 1">
                    </div>
                    <div class="thumbnail" onclick="selectImage(1)">
                        <img src="images/roti2.jpg" alt="Thumbnail 2">
                    </div>
                    <div class="thumbnail" onclick="selectImage(2)">
                        <img src="images/roti3.jpg" alt="Thumbnail 3">
                    </div>
                </div>

                <!-- SOCIAL MEDIA SHARE -->
                <div class="social-share">
                    <h4><i class="fa fa-share-alt"></i> Bagikan Produk</h4>
                    <div class="social-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=YOUR_URL&text=Rusibon Bakery" target="_blank" class="social-btn twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://wa.me/?text=Lihat produk ini: https://www.instagram.com/nahsi.rawon/" target="_blank" class="social-btn whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="social-btn instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="mailto:?subject=Rusibon Bakery&body=Lihat produk ini: YOUR_URL" class="social-btn email">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>



            <!-- PRODUCT INFO -->
            <div class="product-info">
                <div class="product-badge"><i class="fa fa-star"></i> Produk Unggulan</div>
                <h1 class="product-title">Rusibon Bakery</h1>
                <div class="product-price">Rp 5.000</div>
                <div class="product-description">
                    Ini adalah roti lezat yang diproduksi oleh Rusibon Bakery, hasil karya WBP Rutan Situbondo. Roti ini dibuat dengan bahan-bahan berkualitas tinggi dan proses produksi yang higienis, menjamin cita rasa yang nikmat dan tekstur yang lembut. Cocok untuk dinikmati kapan saja sebagai camilan atau pendamping sarapan Anda.
                </div>
                <div class="product-features">
                    <h3><i class="fa fa-check-circle"></i> Keunggulan Produk</h3>
                    <ul class="feature-list">
                        <li><i class="fa fa-check-circle"></i> Kualitas terjamin dan higienis</li>
                        <li><i class="fa fa-check-circle"></i> Diproduksi oleh WBP Rutan Situbondo</li>
                        <li><i class="fa fa-check-circle"></i> Pengemasan rapi dan aman</li>
                        <li><i class="fa fa-check-circle"></i> Bahan berkualitas premium</li>
                        <li><i class="fa fa-check-circle"></i> Tekstur lembut dan rasa nikmat</li>
                    </ul>
                </div>
                <div class="product-actions">
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20memesan%20Rusibon%20Bakery" 
                       class="btn-whatsapp" 
                       target="_blank"><i class="fab fa-whatsapp"></i> Pesan via WhatsApp</a>
                </div>
                <div class="product-meta">
                    <div class="meta-item"><i class="fa fa-box"></i> <span>Stok: Tersedia</span></div>
                    <div class="meta-item"><i class="fa fa-map-marker-alt"></i> <span>Situbondo, Jawa Timur</span></div>
                    <div class="meta-item"><i class="fa fa-certificate"></i> <span>Sertifikat Halal</span></div>
                    <div class="meta-item"><i class="fa fa-shield-alt"></i> <span>Produk Aman & Berkualitas</span></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- JS -->
<script src="{{ asset('files/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('files/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('files/js/plugins.js') }}"></script>
<script src="{{ asset('files/js/custom.js') }}"></script>

<script>
// Image Gallery
const images = [
    '/images/roti.jpg',
    '/images/roti2.jpg',
    '/images/roti3.jpg'
];

let currentImageIndex = 0;
function selectImage(index) {
    currentImageIndex = index;
    document.getElementById('mainImage').src = images[index];
    document.querySelectorAll('.thumbnail').forEach((thumb,i)=>{
        thumb.classList.toggle('active', i===index);
    });
}

function changeImage(direction){
    currentImageIndex += direction;
    if(currentImageIndex<0) currentImageIndex = images.length-1;
    if(currentImageIndex>=images.length) currentImageIndex=0;
    selectImage(currentImageIndex);
}

setInterval(()=>{ changeImage(1); }, 4000);
</script>

</body>
</html>
