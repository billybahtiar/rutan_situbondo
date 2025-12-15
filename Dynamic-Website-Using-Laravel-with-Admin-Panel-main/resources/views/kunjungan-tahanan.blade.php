@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunjungan Khusus Tahanan Rutan Kelas IIB Situbondo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f7f9fb;
            color: #1f2937;
            /* TAMBAHKAN KEMBALI PADDING ATAS UNTUK MENGAKOMODASI HEADER */
            padding-top: 64px; 
        }
        
        .header-section {
            background-color: #fefce8; /* Yellow 50 - Menonjolkan kekhususan */
            border-bottom: 5px solid #f59e0b; /* Amber 500 */
        }
        
        .sticky-nav {
            background-color: #ca8a04; /* Amber 600 */
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
            background-color: #f59e0b;
            border: 2px solid white;
            z-index: 10;
        }
        .timeline-line {
            position: absolute;
            left: 3px;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #fcd34d; /* Amber 300 */
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


    
    <!-- JUDUL DAN SUB-JUDUL KHUSUS TAHANAN -->
    <main class="pt-8"> 
        <header class="header-section py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-amber-800 mb-3">
                    <i class="fa-solid fa-file-invoice mr-3 text-red-600"></i> Kunjungan Tahanan 
                </h1>
                <p class="text-xl text-slate-700">
                    Informasi penting dan persyaratan wajib bagi keluarga yang akan mengunjungi Tahanan (Tersangka atau Terdakwa) di Rutan Kelas IIB Situbondo.
                </p>
            </div>
        </header>

        <!-- BAGIAN 1: JADWAL KUNJUNGAN KHUSUS TAHANAN -->
        <section id="jadwal" class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-slate-800 mb-6">
                    Jadwal Kunjungan Tahanan
                </h2>
                
                <div class="bg-amber-100 p-8 rounded-xl shadow-lg border-b-4 border-amber-600 card-animation" id="schedule-card">
                    <i class="fa-solid fa-calendar-alt text-5xl text-amber-600 mb-4"></i>
                    <h3 class="text-2xl font-extrabold mb-2 text-amber-800">Senin & Kamis</h3>
                    <p class="text-xl font-bold text-slate-700 mb-4">Waktu Pelayanan (Tatap Muka):</p>
                    <p class="text-4xl font-extrabold text-slate-900">08:00 - 11:00 WIB</p>
                    <p class="text-md text-red-600 mt-4 italic">Durasi Kunjungan Maksimum: 15 Menit</p>
                </div>

                <div class="mt-8 text-center text-lg max-w-2xl mx-auto p-4 bg-red-100 border-l-4 border-red-500 rounded-lg card-animation" style="transition-delay: 0.1s;">
                    <i class="fa-solid fa-exclamation-triangle text-red-600 mr-2"></i> Kunjungan Tahanan diluar jadwal atau diluar jam kerja HANYA dapat dilakukan atas seizin Kepala Rutan dan APH terkait.
                </div>
            </div>
        </section>

        <!-- BAGIAN 2: PERSYARATAN WAJIB (FOKUS IZIN APH) -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Persyaratan Kunjungan Tahanan
                </h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    
                    <!-- Kolom Fokus: Surat Izin APH -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-600" style="transition-delay: 0.2s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-4">
                            <i class="fa-solid fa-scroll mr-2"></i> Poin Krusial: Surat Izin Kunjungan
                        </h3>
                        <p class="mb-4 text-slate-600">
                            Karena Tahanan masih berada di bawah wewenang Aparat Penegak Hukum (Polisi, Jaksa, atau Hakim), izin kunjungan wajib disiapkan:
                        </p>
                        <ul class="list-disc space-y-2 text-slate-700 ml-5">
                            <li><span class="font-bold">Tahanan Polisi/Kejaksaan:</span> Surat Izin Kunjungan dari **Penyidik/Penuntut Umum** yang bersangkutan.</li>
                            <li><span class="font-bold">Tahanan Pengadilan:</span> Surat Izin Kunjungan dari **Ketua Majelis Hakim** yang menangani perkara.</li>
                        </ul>
                    </div>
                    
                    <!-- Kolom Persyaratan Lain -->
                    <div class="card-animation" style="transition-delay: 0.3s;">
                        <h3 class="text-2xl font-semibold text-amber-700 mb-6 border-b pb-2">
                            <i class="fa-solid fa-list-check mr-2 text-amber-500"></i> Dokumen Pendukung Lain
                        </h3>
                        <ol class="space-y-4 text-slate-700 list-decimal pl-5">
                            <li class="timeline-item">
                                <span class="font-bold">Kartu Identitas (KTP/SIM/Paspor) Asli</span> pengunjung.
                            </li>
                            <li class="timeline-item">
                                <span class="font-bold">Kartu Keluarga (KK) Asli/Fotokopi</span> untuk bukti hubungan.
                            </li>
                            <li class="timeline-item">
                                Wajib Mendaftar melalui **Sistem Pendaftaran Online (LTSA)** Rutan.
                            </li>
                            <li class="timeline-item">
                                Pembatasan: Maksimum 4 orang per Kunjungan.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: ALUR PROSEDUR -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Alur Kunjungan Tahanan
                </h2>
                
                <div class="relative pl-3">
                    <div class="timeline-line"></div>
                    <div class="space-y-6">
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.4s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 1: Siapkan Izin Kunjungan APH</span>
                            <p class="text-sm">Pastikan Anda telah memperoleh Surat Izin Kunjungan resmi dari otoritas penyidik/penuntut/hakim.</p>
                        </div>
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.5s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 2: Pendaftaran di Loket LTSA</span>
                            <p class="text-sm">Tunjukkan KTP, KK, dan Surat Izin APH untuk diverifikasi oleh petugas Rutan.</p>
                        </div>
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.6s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 3: Penggeledahan & Penitipan Barang</span>
                            <p class="text-sm">Ikuti prosedur penggeledahan badan. Titip barang bawaan (kecuali yang diizinkan) di tempat penitipan.</p>
                        </div>
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.7s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 4: Pelaksanaan Kunjungan (Maks. 15 Menit)</span>
                            <p class="text-sm">Lakukan kunjungan di ruang yang telah disediakan. Jaga ketertiban dan patuhi protokol kesehatan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Informasi Khusus Tahanan.</p>
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