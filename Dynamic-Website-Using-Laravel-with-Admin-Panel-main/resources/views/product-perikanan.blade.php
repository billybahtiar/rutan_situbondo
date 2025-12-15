@include('header')

<section class="product-detail" style="padding:70px 0; background:#f4f6f9;">

    <div class="container">

        <div class="row">

            <!-- FOTO PRODUK -->
            <div class="col-md-6">
                <div style="
                    background:#fff; 
                    padding:25px; 
                    border-radius:15px; 
                    box-shadow:0 4px 15px rgba(0,0,0,0.08);">

                    <!-- CAROUSEL GAMBAR PRODUK (BOOTSTRAP 3) -->
                    <div id="productSlider" class="carousel slide" data-ride="carousel">

                        <!-- INDICATORS -->
                        <ol class="carousel-indicators">
                            <li data-target="#productSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#productSlider" data-slide-to="1"></li>
                            <li data-target="#productSlider" data-slide-to="2"></li>
                        </ol>

                        <!-- SLIDES -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="{{ asset('images/rutan.jpg') }}" 
                                     alt="Produk 1"
                                     style="width:100%; border-radius:12px;">
                            </div>

                            <div class="item">
                                <img src="{{ asset('images/rutan2.jpeg') }}" 
                                     alt="Produk 2"
                                     style="width:100%; border-radius:12px;">
                            </div>

                            <div class="item">
                                <img src="{{ asset('images/rutan3.png') }}" 
                                     alt="Produk 3"
                                     style="width:100%; border-radius:12px;">
                            </div>

                        </div>

                        <!-- CONTROLS -->
                        <a class="left carousel-control" href="#productSlider" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>

                        <a class="right carousel-control" href="#productSlider" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                    </div>
                    <!-- END SLIDER -->

                </div>
            </div>

            <!-- DETAIL PRODUK -->
            <div class="col-md-6">

                <h2 style="margin-top:28px;">Rusibon Bakery</h2>

                <p style="font-size:22px; color:#28a745; font-weight:700; margin-bottom:20px;">
                    Rp 10.000
                </p>

                <p style="font-size:16px; color:#555; margin-bottom:25px; line-height:28px; text-align:justify;">
                    Ini adalah contoh deskripsi produk yang dapat kamu sesuaikan.
                    Tulis penjelasan lengkap tentang produk, mulai dari bahan yang digunakan, ukuran yang tersedia, keunggulan produk, serta informasi penting lainnya seperti cara perawatan, ketahanan bahan, fungsi tambahan, hingga manfaat yang didapat oleh pengguna. Jelaskan juga detail desain, warna yang tersedia, serta kelebihan yang membuat produk ini berbeda dari yang lain. Dengan memberikan informasi yang lengkap, calon pembeli dapat memahami kualitas produk dan membuat keputusan pembelian dengan lebih yakin.
                    Sertakan pula informasi mengenai garansi, kebijakan pengembalian, cara penggunaan yang benar, serta rekomendasi penyimpanan jika diperlukan. Jika produk memiliki sertifikasi atau standar kualitas tertentu, sebutkan untuk menambah kepercayaan pelanggan. Kamu juga bisa menambahkan contoh penggunaan dalam kehidupan sehari-hari agar pembeli mendapatkan gambaran yang lebih jelas mengenai fungsi dan nilai produk.
                </p>

                <ul style="text-align:justify; font-size:16px; color:#444; margin-bottom:30px; line-height:28px;">
                    <li>Kualitas terjamin</li>
                    <li>Diproduksi oleh WBP Rutan Situbondo</li>
                    <li>Pengemasan rapi dan aman</li>
                </ul>

                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20memesan%20produk%20ini"
                target="_blank"
                style="
                        padding:14px 26px; 
                        background:#25D366; 
                        color:white; 
                        border-radius:10px; 
                        font-size:17px; 
                        font-weight:600; 
                        text-decoration:none; 
                        box-shadow:0 4px 10px rgba(0,0,0,0.1);">
                    Pesan via WhatsApp
                </a>

            </div>

        </div>

    </div>

</section>

@include('footer')
@include('scripts')

<!-- AUTO SLIDE -->
<script>
    $('#productSlider').carousel({
        interval: 3000
    });
</script>
