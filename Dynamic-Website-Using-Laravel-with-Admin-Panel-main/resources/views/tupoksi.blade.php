@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pokok & Fungsi Rutan Situbondo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            position: relative; 
            overflow-x: hidden; 
        }
        
        /* CSS untuk BACKGROUND GRID HALUS */
        body {
            background-color: #f1f5f9; /* Slate 100 */
            background-image: radial-gradient(rgba(30, 58, 138, 0.1) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        /* Style untuk animasi fade-in saat di-scroll */
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            will-change: opacity, transform;
        }
        .fade-in-section.is-visible {
            opacity: 1;
            transform: none;
        }

        /* Efek hover pada kartu Fungsi */
        .func-card {
            transition: all 0.3s ease-in-out;
        }
        .func-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(30, 58, 138, 0.2);
            border-color: #1e3a8a;
        }
        .func-card:hover .func-icon {
            background-color: #1e3a8a;
            color: white;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.5);
        }
    </style>
    <!-- Chosen Palette: Deep Navy #1e3a8a, Slate Gray #f1f5f9, Accent Amber #f59e0b -->
</head>
<body class="text-slate-800 antialiased">

    <!-- Container utama -->
    <main class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">

        <!-- HEADER SECTION -->
        <header class="text-center space-y-4 fade-in-section pt-10">
            <div class="inline-block px-6 py-2 rounded-full bg-amber-100 text-amber-700 font-semibold text-sm tracking-wider uppercase mb-2">
                Kelas IIB Situbondo
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-tight">
                Tugas Pokok & Fungsi
            </h1>
            <p class="max-w-3xl mx-auto text-xl text-slate-600">
                Landasan operasional dan komitmen seluruh jajaran Rumah Tahanan Negara Situbondo dalam menjalankan amanat undang-undang.
            </p>
            <div class="w-32 h-1.5 bg-blue-900 mx-auto rounded-full mt-6"></div>
        </header>

        <!-- TUGAS POKOK SECTION -->
        <section id="tugas-pokok" class="fade-in-section">
            <div class="bg-blue-900 text-white rounded-3xl p-8 md:p-12 shadow-2xl shadow-blue-900/30 border-t-8 border-amber-500 relative overflow-hidden">
                <i class="fa-solid fa-gavel absolute right-0 top-0 text-[10rem] opacity-5 -translate-y-1/4 translate-x-1/4"></i>
                
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4 relative z-10 text-amber-300">
                    TUGAS POKOK (MAIN DUTY)
                </h2>
                <div class="text-lg md:text-2xl leading-relaxed relative z-10 font-light max-w-4xl">
                    Rumah Tahanan Negara Kelas IIB Situbondo bertugas untuk melaksanakan
                    <span class="font-bold text-amber-500">perawatan terhadap tersangka atau terdakwa</span>
                    sesuai dengan peraturan perundang-undangan yang berlaku.
                </div>
            </div>
        </section>

        <!-- FUNGSI UTAMA SECTION -->
        <section id="fungsi-utama" class="fade-in-section pt-8">
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-sm">FUNGSI OPERASIONAL</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2">Empat Pilar Pelaksanaan Tugas</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                
                <!-- Fungsi 1: Pelayanan Tahanan -->
                <div class="func-card bg-white rounded-2xl p-8 shadow-xl border-l-4 border-blue-500">
                    <div class="func-icon w-14 h-14 rounded-full bg-blue-100 text-blue-900 flex items-center justify-center text-2xl mb-4 transition-all duration-300">
                        <i class="fa-solid fa-hands-holding-child"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">1. Pelayanan Tahanan</h4>
                    <p class="text-slate-600">
                        Meliputi penerimaan, penempatan, perawatan kesehatan, dan pemenuhan hak-hak dasar tahanan secara manusiawi dan non-diskriminatif.
                    </p>
                </div>

                <!-- Fungsi 2: Keamanan & Tata Tertib -->
                <div class="func-card bg-white rounded-2xl p-8 shadow-xl border-l-4 border-blue-500">
                    <div class="func-icon w-14 h-14 rounded-full bg-blue-100 text-blue-900 flex items-center justify-center text-2xl mb-4 transition-all duration-300">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">2. Pemeliharaan Keamanan</h4>
                    <p class="text-slate-600">
                        Menyelenggarakan sistem pengamanan yang ketat dan prosedur tata tertib yang efektif untuk mencegah gangguan keamanan dan ketertiban.
                    </p>
                </div>

                <!-- Fungsi 3: Pengelolaan Rutan -->
                <div class="func-card bg-white rounded-2xl p-8 shadow-xl border-l-4 border-blue-500">
                    <div class="func-icon w-14 h-14 rounded-full bg-blue-100 text-blue-900 flex items-center justify-center text-2xl mb-4 transition-all duration-300">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">3. Pengelolaan Fasilitas</h4>
                    <p class="text-slate-600">
                        Melakukan pengelolaan dan pemeliharaan seluruh aset, sarana, dan prasarana Rutan agar berfungsi optimal untuk mendukung tugas utama.
                    </p>
                </div>

                <!-- Fungsi 4: Urusan Tata Usaha -->
                <div class="func-card bg-white rounded-2xl p-8 shadow-xl border-l-4 border-blue-500">
                    <div class="func-icon w-14 h-14 rounded-full bg-blue-100 text-blue-900 flex items-center justify-center text-2xl mb-4 transition-all duration-300">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">4. Administrasi & Tata Usaha</h4>
                    <p class="text-slate-600">
                        Melaksanakan urusan administrasi umum, kepegawaian, keuangan, dan kearsipan sebagai dukungan teknis manajemen Rutan.
                    </p>
                </div>

            </div>
        </section>
        
        <!-- CALL TO ACTION / FOOTER INFO -->
        <footer class="fade-in-section pt-16 text-center">
            <p class="text-base text-slate-500 italic border-t pt-8">
                Rutan Situbondo berkomitmen mewujudkan Pemasyarakatan PASTI (Profesional, Akuntabel, Sinergi, Transparan, dan Inovatif) berdasarkan Tata Nilai Kemenkumham.
            </p>
        </footer>

    </main>

    <script>
        // JS untuk Animasi Scroll Fade-In
        const sections = document.querySelectorAll('.fade-in-section');

        function observeScroll() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1 // Ketika 10% elemen terlihat
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

        document.addEventListener('DOMContentLoaded', observeScroll);
    </script>

</body>
</html>

@include('footer')

@include('scripts')