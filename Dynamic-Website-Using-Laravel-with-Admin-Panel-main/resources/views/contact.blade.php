@include('header')

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Kontak Rutan Situbondo</h1>
							<span>Informasi dan kontak Rutan Situbondo</span>
						</div>
					</div>
				</section> 	

				<section class="page-heading wow fadeIn">
				</section>

				<section class="contact-us">
					<div class="container">
						<div class="section-heading">
							<h2>Send Us A Message</h2>
							<div class="section-dec"></div>
						</div>
						<div class="send-message col-sm-12">
							<form id="contact_form" method="POST" enctype="multipart/form-data">
								@csrf
								<div class=" col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="name" placeholder="Your name..." value="" maxlength="15" required>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="email" placeholder="Your email..." value="" maxlength="20" required>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input type="text" class="subject" name="subject" placeholder="Subject..." value="" maxlength="30" required>
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea id="message" class="input" name="message" placeholder="Message..." maxlength="300" required></textarea>
								</div>
								<div class="submit-coment col-md-12">
									<div class="btn-black">
										<input type="submit" name="submit_contact" value="SEND NOW">
									</div>
								</div>
							</form>		
						</div>
					</div>
				</section>

				<!-- ================= SOCIAL MEDIA + WHATSAPP ================= -->
<div class="col-sm-12 text-center" style="margin-top:40px;">
    <h3>Hubungi Kami di Sosial Media</h3>
    <div class="section-dec"></div>

    <p style="font-size:15px; margin-top:15px;">
        Ikuti dan hubungi kami melalui platform resmi berikut:
    </p>

    <div style="margin-top:20px; text-align:center;">
        <ul class="socials" style="list-style:none; padding:0; margin:0; display:inline-block;">
            <li style="display:inline-block; margin:0 10px;">
                <a href="https://www.instagram.com/rutan_situbondo/" target="_blank">
                    <i class="fa-brands fa-instagram fa-2x"></i>
                </a>
            </li>

            <li style="display:inline-block; margin:0 10px;">
                <a href="https://www.tiktok.com/@humasrutansitubondo" target="_blank">
                    <i class="fa-brands fa-tiktok fa-2x"></i>
                </a>
            </li>

            <li style="display:inline-block; margin:0 10px;">
                <a href="https://www.youtube.com/channel/UCB7ioHw4FT8HDAz46Ox4Sqg" target="_blank">
                    <i class="fa-brands fa-youtube fa-2x"></i>
                </a>
            </li>

            <li style="display:inline-block; margin:0 10px;">
                <a href="https://wa.me/6281234567890" target="_blank">
                    <i class="fa-brands fa-whatsapp fa-2x"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- =========================================================== -->


				<section class="contact-map-wrapper">
					<div class="container">
						<div class="section-heading">
							<h2>Find Us On Map</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<!-- Embedded map for Situbondo, East Java -->
								<iframe width="100%" height="450" style="border:0;" loading="lazy" allowfullscreen
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7820277846936!2d114.00378737500417!3d-7.7065241923111305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7291c64b86025%3A0x3a57db6e289f0bb1!2sRumah%20Tahanan%20Negara%20Klas%20IIB%20Situbondo!5e0!3m2!1sid!2sid!4v1764227589188!5m2!1sid!2sid"></iframe>
							</div>
							<div class="col-sm-12 mt-3">
								<h4>Alamat:</h4>
								<p>Jl.Palraman, Dawuhan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68311</p>
							</div>
						</div>
					</div>
				</section>


@include('footer')

@include('scripts')