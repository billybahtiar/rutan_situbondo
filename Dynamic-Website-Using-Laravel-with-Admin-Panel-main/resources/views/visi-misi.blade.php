@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil & Tata Nilai - Rumah Tahanan Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            position: relative; 
            overflow-x: hidden; 
        }

        /* Container untuk efek partikel */
        .particle-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none; /* Penting: agar tidak menghalangi klik pada konten */
            z-index: -1;
            overflow: hidden;
        }

        /* Base style untuk setiap partikel */
        .particle {
            position: absolute;
            background: rgba(30, 58, 138, 0.15); /* Biru Tua transparan */
            border-radius: 50%;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            box-shadow: 0 0 10px rgba(30, 58, 138, 0.2);
        }

        /* Keyframes untuk pergerakan partikel: bergerak dari bawah ke atas */
        @keyframes flowUp {
            0% { transform: translateY(0) scale(1); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(-100vh) scale(0.5); opacity: 0; }
        }

        /* Masing-masing partikel memiliki ukuran, kecepatan, dan posisi acak */
        .particle:nth-child(1) { width: 30px; height: 30px; left: 10%; animation: flowUp 25s linear infinite; animation-delay: 0s; }
        .particle:nth-child(2) { width: 15px; height: 15px; left: 20%; animation: flowUp 18s linear infinite; animation-delay: 2s; background: rgba(245, 158, 11, 0.2); }
        .particle:nth-child(3) { width: 40px; height: 40px; left: 45%; animation: flowUp 30s linear infinite; animation-delay: 5s; }
        .particle:nth-child(4) { width: 20px; height: 20px; left: 70%; animation: flowUp 22s linear infinite; animation-delay: 10s; background: rgba(245, 158, 11, 0.2); }
        .particle:nth-child(5) { width: 50px; height: 50px; left: 85%; animation: flowUp 35s linear infinite; animation-delay: 15s; }
        .particle:nth-child(6) { width: 25px; height: 25px; left: 5%; animation: flowUp 20s linear infinite; animation-delay: 7s; }
        .particle:nth-child(7) { width: 35px; height: 35px; left: 35%; animation: flowUp 28s linear infinite; animation-delay: 12s; }
        .particle:nth-child(8) { width: 10px; height: 10px; left: 95%; animation: flowUp 15s linear infinite; animation-delay: 3s; background: rgba(245, 158, 11, 0.2); }
        .particle:nth-child(9) { width: 45px; height: 45px; left: 55%; animation: flowUp 40s linear infinite; animation-delay: 20s; }
        .particle:nth-child(10) { width: 18px; height: 18px; left: 78%; animation: flowUp 17s linear infinite; animation-delay: 8s; }


        /* Style untuk animasi fade-in saat di-scroll */
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            will-change: opacity, visibility;
        }
        .fade-in-section.is-visible {
            opacity: 1;
            transform: none;
        }
        /* Efek hover pada kartu Tata Nilai */
        .hover-card:hover .icon-box {
            transform: scale(1.1) rotate(5deg);
            background-color: #1e3a8a;
            color: #ffffff;
        }
    </style>
    <!-- Chosen Palette: Corporate Trust (Deep Navy #1e3a8a, Clean White #ffffff, Slate Gray #f1f5f9, Accent Amber #f59e0b) -->
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-200 selection:text-blue-900">

    <!-- OVERLAY PARTICLE FLOW ANIMATION -->
    <div class="particle-container">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <!-- END OVERLAY -->

    <!-- Container utama dengan jarak vertikal yang besar dan padding bawah tambahan -->
    <main class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-24 md:space-y-32 pb-24 relative z-0">

        <!-- HEADER SECTION -->
        <header class="text-center space-y-4 fade-in-section pt-10">
            <div class="inline-block p-4 rounded-full bg-blue-100 text-blue-900 mb-2">
                <i class="fa-solid fa-building-shield text-3xl"></i>
            </div>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight text-slate-900">
                Profil Kelembagaan
            </h1>
            <p class="max-w-3xl mx-auto text-lg md:text-xl text-slate-600">
                Komitmen kami dalam membangun sistem pemasyarakatan yang profesional, transparan, dan menjunjung tinggi hak asasi manusia.
            </p>
            <div class="w-24 h-1 bg-blue-900 mx-auto rounded-full mt-8"></div>
        </header>

        <!-- VISI & MISI SECTION -->
        <section id="visi-misi" class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch fade-in-section">
            
            <!-- VISI CARD (Dark Theme) -->
            <div class="group relative bg-slate-900 text-white rounded-3xl p-8 md:p-14 shadow-2xl overflow-hidden transform transition duration-500 hover:shadow-blue-900/20">
                <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 bg-blue-800 rounded-full opacity-20 group-hover:scale-150 transition duration-700"></div>
                <div class="relative z-10 flex flex-col h-full justify-center text-center py-4">
                    <div class="mb-6">
                        <span class="inline-block py-1 px-4 rounded-full bg-blue-800 text-blue-200 text-sm font-semibold tracking-wider uppercase border border-blue-700">
                            Landasan Kami
                        </span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-extrabold mb-8 text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white">
                        VISI
                    </h2>
                    <p class="text-xl md:text-2xl leading-relaxed font-light italic opacity-90 max-w-xl mx-auto">
                        “Menjadi Rumah Tahanan yang <span class="font-bold text-blue-400">profesional</span> dalam pelayanan,
                        pembinaan, serta menjaga keamanan dan ketertiban
                        demi terciptanya peradilan yang <span class="font-bold text-blue-400">adil dan berkeadilan</span>.”
                    </p>
                    <div class="mt-12 flex justify-center">
                        <i class="fa-solid fa-scale-balanced text-7xl opacity-20 group-hover:opacity-40 transition duration-500"></i>
                    </div>
                </div>
            </div>

            <!-- MISI CARD (Light Theme) -->
            <div class="group bg-white border border-slate-200 rounded-3xl p-8 md:p-14 shadow-xl flex flex-col justify-center relative transform transition duration-300 hover:-translate-y-1">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 rounded-t-3xl"></div>
                
                <div class="text-center mb-10">
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-2">MISI</h2>
                    <p class="text-slate-500 text-sm uppercase tracking-widest font-semibold">Langkah Strategis</p>
                </div>

                <ul class="space-y-8">
                    <li class="flex items-start group/item">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center mt-1 group-hover/item:bg-blue-900 transition-colors duration-300 text-lg">
                            <i class="fa-solid fa-check text-blue-700 group-hover/item:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-slate-800">Pelayanan Prima</h4>
                            <p class="text-slate-600 mt-1">Meningkatkan kualitas pelayanan terhadap Warga Binaan Pemasyarakatan (WBP) dan masyarakat luas.</p>
                        </div>
                    </li>
                    <li class="flex items-start group/item">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center mt-1 group-hover/item:bg-blue-900 transition-colors duration-300 text-lg">
                            <i class="fa-solid fa-hands-holding-child text-blue-700 group-hover/item:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-slate-800">Pembinaan Manusiawi</h4>
                            <p class="text-slate-600 mt-1">Menyelenggarakan pembinaan yang manusiawi, edukatif, dan berkelanjutan.</p>
                        </div>
                    </li>
                    <li class="flex items-start group/item">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center mt-1 group-hover/item:bg-blue-900 transition-colors duration-300 text-lg">
                            <i class="fa-solid fa-shield-halved text-blue-700 group-hover/item:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-slate-800">Keamanan Profesional</h4>
                            <p class="text-slate-600 mt-1">Menjaga keamanan serta ketertiban lingkungan secara profesional dan tanggap.</p>
                        </div>
                    </li>
                    <li class="flex items-start group/item">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center mt-1 group-hover/item:bg-blue-900 transition-colors duration-300 text-lg">
                            <i class="fa-solid fa-file-signature text-blue-700 group-hover/item:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-slate-800">Tata Kelola Berintegritas</h4>
                            <p class="text-slate-600 mt-1">Mengoptimalkan tata kelola pemerintahan yang bersih, transparan, dan bebas korupsi.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- TATA NILAI SECTION -->
        <section class="fade-in-section py-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-sm">Budaya Kerja Kami</span>
                <h2 class="text-4xl font-extrabold text-slate-900 mt-4">TATA NILAI PASTI</h2>
                <p class="text-slate-600 mt-4 text-lg">
                    Nilai-nilai luhur yang menjadi pedoman sikap dan perilaku seluruh pegawai dalam menjalankan tugas sehari-hari.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="hover-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-b-4 border-transparent hover:border-blue-700 group cursor-default">
                    <div class="icon-box w-16 h-16 rounded-2xl bg-blue-50 text-blue-900 flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-300">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 text-center mb-3">Integritas</h4>
                    <p class="text-slate-600 text-center text-base leading-relaxed">
                        Berpikir, berkata, berperilaku, dan bertindak dengan baik dan benar serta memegang teguh kode etik dan prinsip-prinsip moral.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="hover-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-b-4 border-transparent hover:border-blue-700 group cursor-default">
                    <div class="icon-box w-16 h-16 rounded-2xl bg-blue-50 text-blue-900 flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-300">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 text-center mb-3">Profesional</h4>
                    <p class="text-slate-600 text-center text-base leading-relaxed">
                        Bekerja dengan tuntas dan akurat atas dasar kompetensi terbaik dengan penuh tanggung jawab dan komitmen yang tinggi.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="hover-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-b-4 border-transparent hover:border-blue-700 group cursor-default">
                    <div class="icon-box w-16 h-16 rounded-2xl bg-blue-50 text-blue-900 flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-300">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 text-center mb-3">Akuntabel</h4>
                    <p class="text-slate-600 text-center text-base leading-relaxed">
                        Setiap kegiatan dan hasil akhir dari kegiatan dapat dipertanggungjawabkan kepada masyarakat sesuai ketentuan.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="hover-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-b-4 border-transparent hover:border-blue-700 group cursor-default">
                    <div class="icon-box w-16 h-16 rounded-2xl bg-blue-50 text-blue-900 flex items-center justify-center text-3xl mb-6 mx-auto transition-all duration-300">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 text-center mb-3">Humanis</h4>
                    <p class="text-slate-600 text-center text-base leading-relaxed">
                        Memberikan pelayanan prima dengan senyum, sapa, salam, serta menjunjung tinggi nilai-nilai kemanusiaan.
                    </p>
                </div>
            </div>
        </section>

    </main>

    <script>
        // DOM Elements
        const sections = document.querySelectorAll('.fade-in-section');

        // Interaction: Scroll Observer API
        // This adds a class 'is-visible' when elements come into the viewport
        function observeScroll() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target); // Hanya animasikan sekali
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
        }

        // Run Initialization
        document.addEventListener('DOMContentLoaded', observeScroll);
    </script>

</body>
</html>

@include('footer')

@include('scripts')