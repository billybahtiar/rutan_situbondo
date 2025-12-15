<!-- JQUERY HARUS PALING ATAS -->
<script src="{{asset('files/js/jquery-1.11.1.min.js')}}"></script>

<!-- BOOTSTRAP -->
<script src="{{asset('files/js/bootstrap.min.js')}}"></script>

<!-- REVOLUTION SLIDER (gunakan hanya dari asset, jangan campur dari root /js/) -->
<script src="{{asset('files/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('files/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- OTHER SCRIPTS -->
<script src="{{asset('files/js/plugins.js')}}"></script>
<script src="{{asset('files/js/custom.js')}}"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const loader = document.getElementById("page-loader");

    // Hilangkan loader setelah halaman selesai
    window.addEventListener("load", function () {
        loader.style.opacity = "0";
        setTimeout(() => loader.style.display = "none", 400);
    });

    // Loader hanya untuk link yang benar-benar pindah halaman
    document.querySelectorAll("a[href]").forEach(link => {
        const href = link.getAttribute("href");

        // Abaikan #, javascript:void(0), dan menu toggle
        if (
            !href.startsWith("#") &&
            !href.startsWith("javascript") &&
            link.target !== "_blank"
        ) {
            link.addEventListener("click", () => {
                loader.style.display = "flex";
                loader.style.opacity = "1";
            });
        }
    });
});


</script>
