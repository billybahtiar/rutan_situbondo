@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerja Sama Rutan Kelas IIB Situbondo - WA Link</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Lucide Icons untuk estetika modern -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Konfigurasi Font, Warna Kustom, dan Animasi -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0fdf4; /* Very Light Mint Green */
        }
        /* Definisikan warna tema baru */
        .primary-color { color: #059669; } /* Emerald Green */
        .primary-bg { background-color: #059669; }
        .accent-color { color: #facc15; } /* Amber Yellow */
        .accent-bg { background-color: #facc15; }
        .hero-gradient {
            background: linear-gradient(135deg, #047857 0%, #059669 100%);
        }
        
        /* CSS untuk Animasi Ikon (Pulse Effect) */
        @keyframes pulse-icon {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.9;
            }
        }
        .animate-pulse-slow {
            animation: pulse-icon 3s infinite ease-in-out;
        }

        /* Pattern Latar Belakang */
        .pattern-background {
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23e0f2f1' fill-opacity='0.4'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
        }
        
        /* Animasi Card Hover */
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        /* Style khusus untuk tombol WhatsApp */
        .whatsapp-bg { background-color: #25d366; }
        .whatsapp-bg:hover { background-color: #1eab51; }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased">


    <!-- Bagian Utama: Hero Section (Visi Kerja Sama) -->
    <main class="flex-grow">
        <div class="hero-gradient text-white py-24 sm:py-32 lg:py-40 shadow-xl relative overflow-hidden">
            <!-- Pola Latar Belakang -->
            <div class="absolute inset-0 pattern-background opacity-20"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <span class="text-lg font-semibold uppercase tracking-widest accent-color bg-white/30 px-4 py-2 rounded-full mb-6 inline-block animate-pulse-slow">Membangun Sinergi Produktif</span>
                
                <h2 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-tight tracking-tight drop-shadow-lg">
                    Kolaborasi Strategis untuk Pemasyarakatan
                </h2>
                
                <!-- Animasi Ikon Besar di Bawah Judul -->
                <div class="flex justify-center my-6 space-x-8">
                    <i data-lucide="handshake" class="w-12 h-12 text-amber-300 animate-bounce" style="animation-delay: 0.1s;"></i>
                    <i data-lucide="trello" class="w-12 h-12 text-white animate-bounce" style="animation-delay: 0.3s;"></i>
                    <i data-lucide="users-2" class="w-12 h-12 text-amber-300 animate-bounce" style="animation-delay: 0.5s;"></i>
                </div>
                
                <p class="mt-8 text-xl text-gray-200 max-w-4xl mx-auto">
                    **Rutan Kelas IIB Situbondo** membuka pintu kemitraan dengan instansi, komunitas, dan sektor swasta untuk meningkatkan kualitas pembinaan Warga Binaan Pemasyarakatan (WBP).
                </p>
                <div class="mt-12 flex justify-center space-x-4">
                    <!-- Tombol yang mengarah ke GForm/Kontak (ditetapkan via JS) -->
                    <a id="cta-link" href="#" target="_blank" class="px-8 py-4 accent-bg text-gray-900 font-bold rounded-xl shadow-2xl hover:bg-amber-500 transition duration-300 transform hover:scale-105 active:scale-95 flex items-center">
                        <i data-lucide="briefcase" class="w-5 h-5 mr-2"></i>
                        Ajukan Perjanjian Kerja Sama (PKS)
                    </a>
                </div>
            </div>
        </div>

        <!-- Bagian: Fokus Kerja Sama (Grid 2x2 yang Rapi) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h3 class="text-4xl font-extrabold text-center mb-16 primary-color border-b-4 border-amber-400 inline-block pb-1">Area Fokus Kolaborasi</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Kartu 1: Vokasional -->
                <div class="bg-white p-8 rounded-2xl shadow-xl card-hover transition duration-500 border-t-8 border-yellow-500 hover:border-green-600">
                    <div class="flex items-center mb-6">
                        <div class="p-4 rounded-full accent-bg text-gray-900 mr-4 shadow-lg">
                            <i data-lucide="wrench" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-2xl font-bold primary-color">Pelatihan Vokasional</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Kolaborasi untuk menyediakan kursus dan pelatihan keahlian (misalnya, las, otomotif, tata boga) yang relevan dengan kebutuhan pasar kerja di Situbondo.
                    </p>
                    <a href="#" class="text-yellow-600 hover:text-green-600 font-semibold flex items-center transition duration-300">
                        Lihat Program <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i>
                    </a>
                </div>

                <!-- Kartu 2: Kewirausahaan -->
                <div class="bg-white p-8 rounded-2xl shadow-xl card-hover transition duration-500 border-t-8 border-green-500 hover:border-yellow-600">
                    <div class="flex items-center mb-6">
                        <div class="p-4 rounded-full primary-bg text-white mr-4 shadow-lg">
                            <i data-lucide="shop" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-2xl font-bold primary-color">Pemasaran & Kewirausahaan</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Dukungan dalam pemasaran produk WBP dan pendampingan kewirausahaan agar mereka siap membuka usaha setelah bebas.
                    </p>
                    <a href="#" class="text-yellow-600 hover:text-green-600 font-semibold flex items-center transition duration-300">
                        Lihat Kemitraan <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i>
                    </a>
                </div>
                
                <!-- Kartu 3: Dukungan Mental & Sosial -->
                <div class="bg-white p-8 rounded-2xl shadow-xl card-hover transition duration-500 border-t-8 border-yellow-500 hover:border-green-600">
                    <div class="flex items-center mb-6">
                        <div class="p-4 rounded-full accent-bg text-gray-900 mr-4 shadow-lg">
                            <i data-lucide="heart-handshake" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-2xl font-bold primary-color">Reintegrasi Sosial & Mental</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Kerja sama dengan psikolog, dinas sosial, dan tokoh agama untuk pemulihan mental dan spiritual WBP serta penerimaan di masyarakat.
                    </p>
                    <a href="#" class="text-yellow-600 hover:text-green-600 font-semibold flex items-center transition duration-300">
                        Lihat Program <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
        
       <!-- Bagian CTA Tengah (Call-to-Action) - Lebih Menarik -->
        <div class="primary-bg my-16 py-20 relative overflow-hidden">
            <!-- Efek Partikel SVG -->
            <svg class="absolute inset-0 w-full h-full opacity-10" viewBox="0 0 100 100" preserveAspectRatio="none">
                <circle cx="20" cy="20" r="5" fill="white" opacity="0.5" />
                <circle cx="80" cy="50" r="7" fill="white" opacity="0.5" />
                <circle cx="50" cy="85" r="3" fill="white" opacity="0.5" />
                <circle cx="10" cy="70" r="6" fill="white" opacity="0.5" />
            </svg>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white relative z-10">
                <i data-lucide="megaphone" class="w-12 h-12 text-amber-300 mx-auto mb-4 animate-pulse-slow"></i>
                <h3 class="text-4xl sm:text-5xl font-extrabold drop-shadow-lg">Mari Bersinergi Membangun Bangsa</h3>
                <p class="mt-6 text-xl max-w-3xl mx-auto text-white">
                    Kami mengundang semua pihak yang peduli untuk bersama mewujudkan pembinaan yang humanis dan produktif di Rutan Situbondo.
                </p>
                 <!-- Tombol yang mengarah ke WhatsApp -->
                <a id="contact-link" href="#" target="_blank" class="mt-10 px-10 py-4 whatsapp-bg text-white font-bold rounded-full shadow-2xl transition duration-300 transform hover:scale-105 active:scale-95 border-4 border-white/50 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 fill-current" viewBox="0 0 448 512"><!--! Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339.4 55.4 283.4 32 225.1 32c-122.9 0-222.8 99.8-222.9 222.9 0 39.1 10.1 77.9 29.4 112.3l-31.8 114.7 117-30.8c32.7 17.7 69.4 27 106.1 27.2h.1c122.3 0 221.7-99.7 221.9-222.6 0-59.9-24.1-115.5-68.2-157.9zM225.1 411.8c-36 0-71-9.9-102.3-29.4l-7.3-4.3-75.1 19.8 20-72.9-4.5-7.1c-20.9-33.1-32.3-71.5-32.3-112.5 0-101.4 82.3-183.7 183.9-183.7 49.3 0 95.8 19.4 130.4 53.9 34.6 34.4 53.9 80.9 53.9 130.2 0 101.5-82.4 183.8-183.8 183.8h-.1zM368.5 322.9c-2.3-1.4-15.6-7.7-18-8.6-2.3-1.4-4-2.1-5.6 2.1-1.7 4.3-6.5 21.6-7.9 23.2-1.4 1.7-2.8 2.3-5.2 1.2-2.3-1.2-9.8-3.6-18.7-11.4-13.6-11.5-22.9-25.7-25.6-30.5-2.8-4.8-2.8-4.2-2.3-6.1.4-1.9 2.1-4.8 3.5-6.5 1.4-1.7 1.9-2.9 2.8-4.8.9-1.9.4-3.6-.2-5.1-1.4-3.6-12.7-30.7-17.4-42.1-4.6-11.4-9.3-9.9-12.7-9.9-3.4 0-7.3-.4-11.3-.4-3.9 0-10.4 1.4-15.9 7.1-5.5 5.7-21 20.6-21 50.3s21.6 58.3 24.6 62.1c3 3.9 42.6 67.8 103.4 93.3 14.8 6 26.3 9.4 35.4 11.9 20.8 5.7 39.8 4.8 54.8 3 15-1.7 48.4-19.8 55.1-39.7 6.7-19.9 6.7-36.9 4.7-40.5-2-3.4-7.7-5.4-16.3-9.8z"/></svg>
                    Hubungi Petugas Kerja Sama
                </a>
            </div>
        </div>

    </main>


    <!-- Script untuk Ikon dan Interaksi -->
    <script>
        // *** PENTING: GANTI DENGAN NOMOR DAN PESAN WHATSAPP RESMI Rutan SITUBONDO ***
        // Gunakan format nomor internasional tanpa tanda + atau 0 di depan (misal: 628123456789)
        const WHATSAPP_NUMBER = "6285219340142"; 
        const WHATSAPP_MESSAGE = "Halo, saya tertarik untuk mengajukan perjanjian kerja sama (PKS) dengan Rutan Kelas IIB Situbondo. Bisakah saya mendapatkan informasi lebih lanjut mengenai prosedur dan persyaratannya?";
        
        // Tautan WhatsApp
        const WA_LINK = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(WHATSAPP_MESSAGE)}`;
        // Tautan Placeholder PKS (Bisa diganti dengan GForm lagi jika diperlukan, atau tetap sebagai placeholder)
        const PKS_LINK = "https://docs.google.com/forms/d/e/1FAIpQLSefkM_pH5akfgse1EcA5cizBJxiAvrgQsUCQmBww2DpyWZUAg/viewform?usp=publish-editor";


        // Inisialisasi Lucide Icons
        lucide.createIcons();

        // Mengatur tautan pada tombol PKS (Hero Section)
        document.getElementById('cta-link').href = PKS_LINK;
        
        // Mengatur tautan pada tombol Hubungi Petugas (CTA Bawah) ke WhatsApp
        document.getElementById('contact-link').href = WA_LINK;

    </script>
</body>
</html>


@include('scripts')