@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Akuntabilitas Kinerja (LAKIP) Rutan Kelas IIB Situbondo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f7f9fb;
            color: #1f2937;
            /* Padding untuk mengkompensasi fixed header */
            padding-top: 64px; 
        }
        
        .header-section {
            background-color: #f0fdf4; /* Emerald 50 - Tema hijau untuk kinerja/hasil */
            border-bottom: 5px solid #10b981; /* Emerald 500 */
        }
        
        .sticky-nav {
            background-color: #047857; /* Emerald 700 - Warna kuat untuk kinerja */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .timeline-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 2rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #10b981; /* Emerald 500 */
            border: 2px solid white;
            z-index: 10;
        }
        .timeline-line {
            position: absolute;
            left: 3px;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #a7f3d0; /* Emerald 200 */
        }
        
        .card-animation {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <!-- NAVIGASI FIX -->
    <nav class="fixed top-0 left-0 right-0 sticky-nav z-50 h-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-between">
            <div class="flex-shrink-0">
                <span class="text-xl font-extrabold text-white">Rutan Situbondo</span>
            </div>
            <div class="flex space-x-4">
                <span class="text-emerald-300 text-sm font-medium">Laporan Akuntabilitas Kinerja (LAKIP)</span>
            </div>
        </div>
    </nav>
    
    <!-- JUDUL DAN SUB-JUDUL LAKIP -->
    <main class="pt-8"> 
        <header class="header-section py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-800 mb-3">
                    <i class="fa-solid fa-chart-line mr-3 text-emerald-600"></i> LAKIP: Pertanggungjawaban Kinerja
                </h1>
                <p class="text-xl text-slate-700 font-semibold max-w-2xl mx-auto">
                    Dokumen wajib yang memuat pencapaian hasil dan target Rutan Kelas IIB Situbondo selama satu tahun anggaran.
                </p>
                <div class="mt-4 text-center text-lg max-w-2xl mx-auto p-3 bg-emerald-100 border-l-4 border-emerald-500 rounded-lg">
                    <i class="fa-solid fa-star-half-stroke text-emerald-600 mr-2"></i> **Akuntabilitas Kinerja (SAKIP) adalah inti pelayanan kami.**
                </div>
            </div>
        </header>

        <!-- BAGIAN 1: APA ITU LAKIP? -->
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-6">
                    Memahami Tujuan LAKIP
                </h2>
                <div class="max-w-4xl mx-auto bg-gray-50 p-6 rounded-xl shadow-lg border-l-4 border-gray-500 card-animation">
                    <i class="fa-solid fa-scale-unbalanced text-4xl text-gray-600 float-right ml-4"></i>
                    <p class="text-lg text-slate-700">
                        LAKIP merupakan bentuk pertanggungjawaban Rutan atas pelaksanaan Rencana Kerja (Renja) tahunan yang didanai oleh Anggaran Pendapatan dan Belanja Negara (APBN). 
                        Dokumen ini membandingkan antara target yang ditetapkan di awal tahun dengan hasil yang dicapai di akhir tahun.
                    </p>
                    <p class="mt-3 text-sm italic text-slate-500">
                        Tujuan utamanya adalah menilai sejauh mana efisiensi dan efektivitas penggunaan anggaran dalam mencapai visi dan misi organisasi.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- BAGIAN 2: KOMPONEN DAN INDIKATOR KINERJA -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Indikator Kinerja Utama (IKU) dalam LAKIP
                </h2>
                <p class="text-center text-lg max-w-3xl mx-auto mb-8 text-slate-600">
                    Kinerja Rutan diukur berdasarkan IKU yang tercantum dalam Perjanjian Kinerja (PK) tahunan.
                </p>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- IKU 1: Pelayanan Hukum -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-b-4 border-blue-600" style="transition-delay: 0.1s;">
                        <h3 class="text-xl font-extrabold text-blue-700 mb-3">
                            <i class="fa-solid fa-gavel mr-2"></i> Kecepatan Layanan Integrasi
                        </h3>
                        <p class="text-sm text-slate-700">
                            Persentase ketepatan waktu penerbitan usulan Integrasi (PB, CB, CMB) kepada Kanwil.
                        </p>
                    </div>
                    
                    <!-- IKU 2: Pembinaan WBP -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-b-4 border-yellow-600" style="transition-delay: 0.2s;">
                        <h3 class="text-xl font-extrabold text-yellow-700 mb-3">
                            <i class="fa-solid fa-handshake-angle mr-2"></i> Tingkat Partisipasi Pembinaan
                        </h3>
                        <p class="text-sm text-slate-700">
                            Persentase WBP yang aktif mengikuti program pembinaan kemandirian dan kepribadian.
                        </p>
                    </div>
                    
                    <!-- IKU 3: Keamanan & Ketertiban -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-b-4 border-red-600" style="transition-delay: 0.3s;">
                        <h3 class="text-xl font-extrabold text-red-700 mb-3">
                            <i class="fa-solid fa-lock mr-2"></i> Zero Gangguan Kamtib
                        </h3>
                        <p class="text-sm text-slate-700">
                            Tingkat keberhasilan dalam mempertahankan kondisi aman, tertib, dan bebas dari insiden serius.
                        </p>
                    </div>
                    
                    <!-- IKU 4: Keuangan & SDM -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-b-4 border-emerald-600" style="transition-delay: 0.4s;">
                        <h3 class="text-xl font-extrabold text-emerald-700 mb-3">
                            <i class="fa-solid fa-sack-dollar mr-2"></i> Capaian Realisasi Anggaran
                        </h3>
                        <p class="text-sm text-slate-700">
                            Persentase penyerapan anggaran dibandingkan dengan target DIPA tahunan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: ALUR PENYUSUNAN LAKIP -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Proses Penyusunan dan Penilaian LAKIP
                </h2>
                
                <div class="relative pl-3">
                    <div class="timeline-line"></div>
                    <div class="space-y-6">
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.5s;">
                            <span class="text-lg font-bold text-emerald-700">Tahap 1: Penetapan Kinerja (PK)</span>
                            <p class="text-sm">Di awal tahun, Rutan Situbondo menyusun dan menandatangani Perjanjian Kinerja (PK) yang memuat target-target tahunan.</p>
                        </div>
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.6s;">
                            <span class="text-lg font-bold text-emerald-700">Tahap 2: Pengukuran Kinerja</span>
                            <p class="text-sm">Pengumpulan data realisasi (output dan outcome) secara berkala dan validasi data pendukung.</p>
                        </div>
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.7s;">
                            <span class="text-lg font-bold text-emerald-700">Tahap 3: Penyusunan LAKIP</span>
                            <p class="text-sm">Penyusunan dokumen LAKIP, termasuk analisis perbandingan antara target dan realisasi, serta evaluasi faktor pendukung/penghambat.</p>
                        </div>
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.8s;">
                            <span class="text-lg font-bold text-emerald-700">Tahap 4: Penilaian (Evaluasi SAKIP)</span>
                            <p class="text-sm">LAKIP dievaluasi oleh Inspektorat Jenderal Kemenkumham dan Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (KemenPAN-RB).</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 text-center text-lg max-w-4xl mx-auto p-4 bg-blue-100 border-l-4 border-blue-500 rounded-lg card-animation" style="transition-delay: 0.9s;">
                    <i class="fa-solid fa-magnifying-glass-chart text-blue-600 mr-2"></i> **Akses LAKIP:** Dokumen LAKIP Rutan tahun-tahun sebelumnya dapat diakses melalui website resmi Kanwil atau PPID Kemenkumham RI.
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Akuntabilitas Kinerja Instansi Pemerintah (AKIP).</p>
        </div>
    </footer>

    <!-- SCRIPT JAVASCRIPT UNTUK MEMICU ANIMASI SAAT SCROLL -->
    <script>
        // Fungsi untuk mengamati dan memicu animasi
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    // Hentikan observasi setelah animasi dimainkan
                    observer.unobserve(entry.target); 
                }
            });
        }, {
            threshold: 0.1 // Animasi dimulai ketika 10% elemen terlihat
        });

        // Ambil semua elemen yang akan dianimasikan
        const animatedElements = document.querySelectorAll('.card-animation');
        
        // Mulai mengamati setiap elemen
        animatedElements.forEach(el => observer.observe(el));
    </script>

</body>
</html>


@include('scripts')