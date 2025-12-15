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

        <!-- CAROUSEL GAMBAR PRODUK -->
        <div id="productSlider" class="carousel slide" data-ride="carousel" data-interval="2500">
            <div class="carousel-inner">

                <!-- GAMBAR 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('images/billy.jpeg') }}" 
                         alt="produk 1"
                         style="width:100%; border-radius:12px;">
                </div>

            </div>

            <!-- TOMBOL PREV -->
            <a class="carousel-control-prev" href="#productSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>

            <!-- TOMBOL NEXT -->
            <a class="carousel-control-next" href="#productSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>

        </div>
        <!-- END CAROUSEL -->

    </div>
</div>


            <!-- DETAIL PRODUK -->
            <div class="col-md-6">

    <h2 style="margin-top:28px;">RAWON RATA KANAN</h2>


    <p style="font-size:16px; color:#555; margin-bottom:25px; line-height:28px; text-align:justify;">
       CEK NOTIF GUWA COYY
    </p>

    <div class="spacing"></div>
          <ul class="socials">
            <li>
              <a href="http://facebook.com">
                <i class="fa-brands fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.tiktok.com/@billybahtiar">
                <i class="fa-brands fa-tiktok"></i>
              </a>
            </li>
            <li>
              <a href="https://wa.me/+6285219340142">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/nahsi.rawon/">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
          </ul>

        </div>


</div>



                <!-- Tinggal copy-paste blok di atas untuk menambah produk lainnya -->

            </div>

        </div>

    </div>

</section>

@include('footer')
@include('scripts')
