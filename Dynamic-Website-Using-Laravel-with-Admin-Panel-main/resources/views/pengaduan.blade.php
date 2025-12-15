@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pengaduan & WBS Rutan Kelas IIB Situbondo</title>
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
            background-color: #f3f4f6; /* Abu-abu terang */
            border-bottom: 5px solid #dc2626; /* Red 600 - Warna peringatan/integritas */
        }
        
        .sticky-nav {
            background-color: #991b1b; /* Red 800 - Warna kuat untuk integritas */
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
            background-color: #ef4444; /* Red 500 */
            border: 2px solid white;
            z-index: 10;
        }
        .timeline-line {
            position: absolute;
            left: 3px;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #fca5a5; /* Red 300 */
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
                <span class="text-red-300 text-sm font-medium">Layanan Pengaduan & Whistleblowing System</span>
            </div>
        </div>
    </nav>
    
    <!-- JUDUL DAN SUB-JUDUL LAYANAN PENGADUAN -->
    <main class="pt-8"> 
        <header class="header-section py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-red-800 mb-3">
                    <i class="fa-solid fa-bullhorn mr-3 text-red-600"></i> Sampaikan Pengaduan Anda
                </h1>
                <p class="text-xl text-slate-700 font-semibold max-w-2xl mx-auto">
                    Kami berkomitmen untuk Zona Integritas. Laporkan segala bentuk pelanggaran etika dan penyimpangan layanan dengan jaminan kerahasiaan.
                </p>
                <div class="mt-4 text-center text-lg max-w-2xl mx-auto p-3 bg-red-100 border-l-4 border-red-500 rounded-lg">
                    <i class="fa-solid fa-user-secret text-red-600 mr-2"></i> **Kerahasiaan Pelapor Diutamakan.**
                </div>
            </div>
        </header>

        <!-- BAGIAN 1: SALURAN PENGADUAN -->
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Pilih Saluran Pengaduan Resmi
                </h2>
                
                <div class="grid md:grid-cols-4 gap-6">
                    
                    <!-- Kartu WBS Kemenkumham -->
                    <div class="bg-indigo-50 p-6 rounded-xl shadow-lg border-t-4 border-indigo-600 card-animation">
                        <i class="fa-solid fa-globe text-4xl text-indigo-600 mb-3"></i>
                        <h3 class="text-xl font-bold mb-2 text-indigo-800">WBS Kemenkumham RI</h3>
                        <p class="text-sm text-slate-700">
                            Saluran resmi dan terpusat untuk melaporkan pelanggaran di lingkungan Kemenkumham (Direkomendasikan).
                        </p>
                        <a href="#" class="mt-3 inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-800">
                            Akses WBS <i class="fa-solid fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <!-- Kartu Email -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-gray-600 card-animation" style="transition-delay: 0.1s;">
                        <i class="fa-solid fa-envelope text-4xl text-gray-600 mb-3"></i>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Email Resmi Rutan</h3>
                        <p class="text-sm text-slate-700 break-words">
                            Kirimkan detail pengaduan ke alamat email resmi Rutan Situbondo.
                        </p>
                        <p class="mt-3 text-sm font-bold text-gray-700 break-words">rutan.situbondo@kemenkumham.go.id</p>
                    </div>

                    <!-- Kartu Kotak Pengaduan Fisik -->
                    <div class="bg-yellow-50 p-6 rounded-xl shadow-lg border-t-4 border-yellow-600 card-animation" style="transition-delay: 0.2s;">
                        <i class="fa-solid fa-box-open text-4xl text-yellow-600 mb-3"></i>
                        <h3 class="text-xl font-bold mb-2 text-yellow-800">Kotak Pengaduan Fisik</h3>
                        <p class="text-sm text-slate-700">
                            Tersedia di area Layanan Terpadu Satu Atap (LTSA) dan diawasi oleh petugas independen.
                        </p>
                    </div>

                    <!-- Kartu Telepon/WhatsApp -->
                    <div class="bg-green-50 p-6 rounded-xl shadow-lg border-t-4 border-green-600 card-animation" style="transition-delay: 0.3s;">
                        <i class="fa-solid fa-phone text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold mb-2 text-green-800">Telepon & WhatsApp</h3>
                        <p class="text-sm text-slate-700">
                            Hubungi layanan pengaduan kami (hanya saat jam kerja).
                        </p>
                        <p class="mt-3 text-sm font-bold text-green-700">0812-3456-7890 (Contoh)</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- BAGIAN 2: PANDUAN PENYAMPAIAN PENGADUAN EFEKTIF -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Informasi Wajib Agar Aduan Ditindaklanjuti
                </h2>
                <p class="text-center text-lg max-w-3xl mx-auto mb-8 text-slate-600">
                    Laporan yang jelas, detail, dan didukung bukti akan mempercepat proses investigasi dan penindakan.
                </p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    
                    <!-- Materi 1: Siapa dan Kapan -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-b-4 border-red-500" style="transition-delay: 0.4s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-4">
                            <i class="fa-solid fa-user-tag mr-2"></i> Who & When (Siapa & Kapan)
                        </h3>
                        <ul class="list-disc space-y-2 text-slate-700 ml-5">
                            <li>**Pihak Terlapor:** Nama/Jabatan/Ciri-ciri.</li>
                            <li>**Waktu Kejadian:** Tanggal dan jam pasti kejadian.</li>
                            <li>**Lokasi Kejadian:** Detail tempat di Rutan (misal: Blok A, Ruang Kunjungan).</li>
                        </ul>
                    </div>
                    
                    <!-- Materi 2: Apa dan Bagaimana -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-b-4 border-red-500" style="transition-delay: 0.5s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-4">
                            <i class="fa-solid fa-clipboard-question mr-2"></i> What & How (Jenis Pelanggaran)
                        </h3>
                        <ul class="list-disc space-y-2 text-slate-700 ml-5">
                            <li>**Jenis Pelanggaran:** Penyuapan, pungli, pemerasan, diskriminasi, atau pelayanan buruk.</li>
                            <li>**Kronologi:** Ceritakan kejadian secara runtut dan jelas.</li>
                            <li>**Dampak:** Apa kerugian yang dialami?</li>
                        </ul>
                    </div>
                    
                    <!-- Materi 3: Bukti Pendukung -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-b-4 border-red-500" style="transition-delay: 0.6s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-4">
                            <i class="fa-solid fa-camera-retro mr-2"></i> Evidence (Bukti Kuat)
                        </h3>
                        <ul class="list-disc space-y-2 text-slate-700 ml-5">
                            <li>Foto atau rekaman video/suara (jika ada).</li>
                            <li>Dokumen terkait.</li>
                            <li>Nama saksi mata (jika ada, dan dapat dihubungi).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: ALUR PROSES PENGADUAN -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Alur Proses Penanganan Pengaduan
                </h2>
                
                <div class="relative pl-3">
                    <div class="timeline-line"></div>
                    <div class="space-y-6">
                        
                        <div class="timeline-item bg-red-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.7s;">
                            <span class="text-lg font-bold text-red-700">Tahap 1: Penerimaan dan Verifikasi Awal</span>
                            <p class="text-sm">Pengaduan diterima dan diverifikasi kelengkapan datanya (apakah memenuhi unsur 4W+1H). Jika anonim, kerahasiaan dijaga.</p>
                        </div>
                        
                        <div class="timeline-item bg-red-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.8s;">
                            <span class="text-lg font-bold text-red-700">Tahap 2: Investigasi dan Pengumpulan Bukti</span>
                            <p class="text-sm">Tim internal melakukan investigasi lapangan, mengumpulkan bukti, dan memanggil pihak terkait untuk klarifikasi.</p>
                        </div>
                        
                        <div class="timeline-item bg-red-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.9s;">
                            <span class="text-lg font-bold text-red-700">Tahap 3: Penetapan Keputusan</span>
                            <p class="text-sm">Hasil investigasi dilaporkan kepada pimpinan. Keputusan berupa penindakan, sanksi disiplin, atau penyelesaian masalah ditetapkan.</p>
                        </div>
                        
                        <div class="timeline-item bg-red-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 1.0s;">
                            <span class="text-lg font-bold text-red-700">Tahap 4: Pemberian Feedback</span>
                            <p class="text-sm">Pihak pelapor (jika identitasnya diketahui) akan dihubungi untuk menerima informasi mengenai tindak lanjut yang telah dilakukan (sesuai batasan kerahasiaan).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Zero Tolerance untuk Pelanggaran.</p>
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