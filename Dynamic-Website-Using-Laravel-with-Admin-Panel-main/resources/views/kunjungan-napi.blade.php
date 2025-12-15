@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kunjungan Rutan Kelas IIB Situbondo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f7f9fb;
            color: #1f2937;
            /* Tinggi Navigasi: h-16 (64px) */
            padding-top: 64px; 
        }
        
        /* Gaya untuk Animasi Slide-Up */
        .animated-card {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        /* Kelas untuk memicu animasi saat elemen terlihat */
        .fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Efek Hover untuk Kartu Jadwal */
        .schedule-card {
            transition: all 0.3s ease;
            cursor: default;
        }
        .schedule-card:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.2);
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
            background-color: #3b82f6;
            border: 2px solid white;
            z-index: 10;
        }
        .timeline-line {
            position: absolute;
            left: 3px;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #bfdbfe; /* Blue 200 */
        }
    </style>
</head>
<body>


    
    <!-- JUDUL DAN SUB-JUDUL (Konten utama) -->
    <main class="pt-8">
        <header class="bg-indigo-50 py-12 border-b-4 border-indigo-200">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-indigo-800 mb-3">
                    <i class="fa-solid fa-handshake-angle mr-3 text-yellow-500"></i> Layanan Kunjungan Napi
                </h1>
                <p class="text-xl text-slate-600">
                    Informasi Resmi Mengenai Jadwal, Persyaratan, dan Prosedur Kunjungan Tahanan/Warga Binaan di Rutan Kelas IIB Situbondo.
                </p>
            </div>
        </header>

        <!-- BAGIAN 1: JADWAL KUNJUNGAN (HARUS JELAS) -->
        <section id="jadwal" class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Jadwal Kunjungan Tatap Muka
                </h2>

                <div class="grid md:grid-cols-3 gap-8 text-center" id="schedule-cards">
                    
                    <!-- Hari Kerja (Tahanan) -->
                    <div class="schedule-card animated-card bg-blue-50 p-6 rounded-xl shadow-lg border-t-4 border-blue-500">
                        <i class="fa-solid fa-calendar-day text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-blue-800">Senin & Selasa</h3>
                        <p class="text-sm font-semibold text-slate-700">UNTUK TAHANAN (Titipan APH)</p>
                        <p class="text-3xl font-extrabold text-slate-900 mt-3">09:00 - 12:00 WIB</p>
                        <p class="text-xs text-red-500 mt-2 italic">Durasi kunjungan maksimum 15 menit.</p>
                    </div>

                    <!-- Hari Kerja (Narapidana) -->
                    <div class="schedule-card animated-card bg-green-50 p-6 rounded-xl shadow-lg border-t-4 border-green-500" style="transition-delay: 0.1s;">
                        <i class="fa-solid fa-user-check text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-green-800">Rabu & Kamis</h3>
                        <p class="text-sm font-semibold text-slate-700">UNTUK NARAPIDANA (WBP)</p>
                        <p class="text-3xl font-extrabold text-slate-900 mt-3">09:00 - 12:00 WIB</p>
                        <p class="text-xs text-red-500 mt-2 italic">Durasi kunjungan maksimum 20 menit.</p>
                    </div>

                    <!-- Hari Libur -->
                    <div class="schedule-card animated-card bg-red-50 p-6 rounded-xl shadow-lg border-t-4 border-red-500" style="transition-delay: 0.2s;">
                        <i class="fa-solid fa-ban text-4xl text-red-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-red-800">Jum'at, Sabtu, Minggu & Libur Nasional</h3>
                        <p class="text-sm font-semibold text-slate-700">KEGIATAN KEROHANIAN & LAYANAN ONLINE</p>
                        <p class="text-3xl font-extrabold text-slate-900 mt-3">TUTUP</p>
                        <p class="text-xs text-slate-500 mt-2 italic">Kunjungan tatap muka ditiadakan.</p>
                    </div>
                </div>
                
                <div class="mt-12 text-center text-lg max-w-4xl mx-auto p-4 bg-yellow-100 border-l-4 border-yellow-500 rounded-lg animated-card" style="transition-delay: 0.3s;" id="info-reminder">
                    <i class="fa-solid fa-clock text-yellow-600 mr-2"></i> **WAKTU PENDAFTARAN:** Pendaftaran ditutup 30 menit sebelum jam kunjungan berakhir atau jika kuota harian telah terpenuhi.
                </div>
            </div>
        </section>

        <!-- BAGIAN 2: PERSYARATAN KUNJUNGAN (PROSEDUR) -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Prosedur dan Persyaratan Wajib
                </h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    
                    <!-- Kolom Persyaratan Pengunjung -->
                    <div class="animated-card" style="transition-delay: 0.4s;" id="requirements-col">
                        <h3 class="text-2xl font-semibold text-indigo-700 mb-6 border-b pb-2">
                            <i class="fa-solid fa-user-group mr-2 text-indigo-500"></i> Persyaratan Umum Pengunjung
                        </h3>
                        <ol class="space-y-4 text-slate-700 list-decimal pl-5">
                            <li class="timeline-item">
                                <span class="font-bold">Kartu Identitas (KTP/SIM/Paspor) Asli</span> yang sah dan masih berlaku.
                            </li>
                            <li class="timeline-item">
                                <span class="font-bold">Kartu Keluarga (KK) Asli/Fotokopi</span> untuk membuktikan hubungan kekerabatan (hanya keluarga inti: suami/istri, anak, orang tua, kakek/nenek).
                            </li>
                            <li class="timeline-item">
                                <span class="font-bold">Wajib Mendaftar di Sistem Pendaftaran Online/LTSA (Layanan Terpadu Satu Atap)</span> Rutan Situbondo.
                            </li>
                            <li class="timeline-item">
                                <span class="font-bold">Surat Izin Kunjungan</span> (Khusus Tahanan dari Kepolisian/Kejaksaan/Pengadilan). Narapidana tidak memerlukan surat izin.
                            </li>
                            <li class="timeline-item">
                                Pengunjung dilarang membawa alat komunikasi (HP), senjata tajam, obat-obatan terlarang, atau benda-benda yang membahayakan keamanan.
                            </li>
                        </ol>
                    </div>
                    
                    <!-- Kolom Prosedur Kunjungan -->
                    <div class="animated-card" style="transition-delay: 0.5s;" id="procedure-col">
                        <h3 class="text-2xl font-semibold text-indigo-700 mb-6 border-b pb-2">
                            <i class="fa-solid fa-clipboard-list mr-2 text-indigo-500"></i> Tahapan Pelaksanaan Kunjungan
                        </h3>
                        <div class="relative pl-3">
                            <div class="timeline-line"></div>
                            <div class="space-y-6">
                                
                                <div class="timeline-item bg-white p-3 rounded-lg shadow-sm">
                                    <span class="text-lg font-bold text-blue-700">Langkah 1: Verifikasi Dokumen</span>
                                    <p class="text-sm">Serahkan dokumen persyaratan (KTP, KK, Surat Izin jika Tahanan) di loket pendaftaran.</p>
                                </div>
                                
                                <div class="timeline-item bg-white p-3 rounded-lg shadow-sm">
                                    <span class="text-lg font-bold text-blue-700">Langkah 2: Penggeledahan Badan & Barang</span>
                                    <p class="text-sm">Pengunjung dan barang bawaan diperiksa oleh petugas P2U (Penjaga Pintu Utama) dan petugas KPR.</p>
                                </div>
                                
                                <div class="timeline-item bg-white p-3 rounded-lg shadow-sm">
                                    <span class="text-lg font-bold text-blue-700">Langkah 3: Menuju Ruang Kunjungan</span>
                                    <p class="text-sm">Setelah lolos pemeriksaan, pengunjung diarahkan ke ruang kunjungan yang telah ditentukan.</p>
                                </div>
                                
                                <div class="timeline-item bg-white p-3 rounded-lg shadow-sm">
                                    <span class="text-lg font-bold text-blue-700">Langkah 4: Pelaksanaan Kunjungan</span>
                                    <p class="text-sm">Kunjungan dilakukan sesuai durasi waktu yang ditetapkan (15 atau 20 menit).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: ATURAN TAMBAHAN (PENTING) -->
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Informasi Tambahan & Kebijakan
                </h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    
                    <div class="p-6 border-l-4 border-red-500 bg-red-50 rounded-lg animated-card" style="transition-delay: 0.6s;">
                        <i class="fa-solid fa-triangle-exclamation text-3xl text-red-600 mb-3"></i>
                        <h4 class="font-bold text-xl mb-2 text-red-800">Larangan Pungli</h4>
                        <p class="text-sm text-slate-700">Pelayanan kunjungan adalah GRATIS. Laporkan segera kepada Kepala Rutan atau aparat penegak hukum jika ada petugas yang meminta pungutan liar (Pungli).</p>
                    </div>
                    
                    <div class="p-6 border-l-4 border-yellow-500 bg-yellow-50 rounded-lg animated-card" style="transition-delay: 0.7s;">
                        <i class="fa-solid fa-box-open text-3xl text-yellow-600 mb-3"></i>
                        <h4 class="font-bold text-xl mb-2 text-yellow-800">Titipan Barang/Makanan</h4>
                        <p class="text-sm text-slate-700">Titipan hanya diizinkan pada hari kerja sesuai jadwal dan harus melalui prosedur pemeriksaan ketat. Barang yang dilarang akan disita.</p>
                    </div>
                    
                    <div class="p-6 border-l-4 border-indigo-500 bg-indigo-50 rounded-lg animated-card" style="transition-delay: 0.8s;">
                        <i class="fa-solid fa-video text-3xl text-indigo-600 mb-3"></i>
                        <h4 class="font-bold text-xl mb-2 text-indigo-800">Kunjungan Virtual (Video Call)</h4>
                        <p class="text-sm text-slate-700">Layanan kunjungan virtual tersedia untuk memfasilitasi keluarga yang berjarak jauh. Silakan hubungi petugas melalui nomor layanan informasi untuk pendaftaran.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Hubungi nomor kontak resmi untuk informasi lebih lanjut.</p>
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
        const animatedElements = document.querySelectorAll('.animated-card');
        
        // Mulai mengamati setiap elemen
        animatedElements.forEach(el => observer.observe(el));
    </script>

</body>
</html>


@include('scripts')