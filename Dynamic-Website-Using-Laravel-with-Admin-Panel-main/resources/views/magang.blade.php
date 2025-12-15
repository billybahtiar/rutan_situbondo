@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Informasi Magang Rutan Kelas IIB Situbondo</title>
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
            background-color: #ecfdf5; /* Green 50 - Tema Hijau untuk Pendidikan/Magang */
            border-bottom: 5px solid #10b981; /* Emerald 500 */
        }
        
        .sticky-nav {
            background-color: #065f46; /* Dark Green */
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
                <span class="text-emerald-400 text-sm font-medium">Layanan Informasi Magang/Praktek Kerja</span>
            </div>
        </div>
    </nav>
    
    <!-- JUDUL DAN SUB-JUDUL LAYANAN MAGANG -->
    <main class="pt-8"> 
        <header class="header-section py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-green-800 mb-3">
                    <i class="fa-solid fa-briefcase mr-3 text-emerald-600"></i> Program Magang dan PKL
                </h1>
                <p class="text-xl text-slate-700">
                    Kesempatan bagi mahasiswa/siswa untuk mendapatkan pengalaman kerja di bidang Pemasyarakatan, Hukum, dan Administrasi.
                </p>
            </div>
        </header>

        <!-- BAGIAN 1: BIDANG MAGANG YANG TERSEDIA -->
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Bidang Penempatan Magang
                </h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    
                    <!-- Kartu Administrasi -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-gray-500 card-animation">
                        <i class="fa-solid fa-laptop-file text-4xl text-gray-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-gray-800">Administrasi & Tata Usaha</h3>
                        <p class="text-sm font-semibold text-slate-700">
                            Pencatatan surat masuk/keluar, pengarsipan dokumen kepegawaian, dan pengelolaan inventaris kantor.
                        </p>
                    </div>

                    <!-- Kartu Pembinaan -->
                    <div class="bg-yellow-50 p-6 rounded-xl shadow-lg border-t-4 border-yellow-500 card-animation" style="transition-delay: 0.1s;">
                        <i class="fa-solid fa-person-shelter text-4xl text-yellow-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-yellow-800">Pelayanan & Pembinaan WBP</h3>
                        <p class="text-sm font-semibold text-slate-700">
                            Membantu proses Layanan Terpadu Satu Atap (LTSA), dan asistensi program pembinaan kemandirian/kepribadian.
                        </p>
                    </div>

                    <!-- Kartu Hukum -->
                    <div class="bg-blue-50 p-6 rounded-xl shadow-lg border-t-4 border-blue-500 card-animation" style="transition-delay: 0.2s;">
                        <i class="fa-solid fa-scale-balanced text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-blue-800">Hukum & Registrasi</h3>
                        <p class="text-sm font-semibold text-slate-700">
                            Membantu proses registrasi dan pencatatan WBP, serta mempelajari alur pengajuan Integrasi dan Remisi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 2: PERSYARATAN WAJIB -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Persyaratan Pengajuan Magang
                </h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    
                    <!-- Kolom Persyaratan Institusi -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-l-4 border-emerald-600" style="transition-delay: 0.3s;">
                        <h3 class="text-2xl font-extrabold text-emerald-700 mb-4">
                            <i class="fa-solid fa-university mr-2"></i> Dokumen dari Sekolah/Kampus
                        </h3>
                        <ol class="space-y-3 text-slate-700 list-decimal pl-5">
                            <li><span class="font-bold">Surat Permohonan Resmi</span> dari Institusi Pendidikan (Ditujukan kepada Kepala Rutan).</li>
                            <li><span class="font-bold">Proposal Kegiatan Magang/PKL</span> (mencakup tujuan, waktu pelaksanaan, dan bidang yang diminati).</li>
                            <li>Daftar nama dan identitas (KTP/KTM) peserta magang.</li>
                            <li>Surat Pengantar dari Fakultas/Jurusan.</li>
                        </ol>
                    </div>
                    
                    <!-- Kolom Persyaratan Individu -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-l-4 border-red-600" style="transition-delay: 0.4s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-4">
                            <i class="fa-solid fa-user-gear mr-2"></i> Persyaratan Tambahan Individu
                        </h3>
                        <ul class="list-disc space-y-3 text-slate-700 ml-5">
                            <li>Curriculum Vitae (CV) singkat peserta.</li>
                            <li>Pas Foto berwarna terbaru (4x6).</li>
                            <li>Surat Pernyataan Kesanggupan untuk mematuhi seluruh tata tertib Rutan (disediakan oleh Rutan).</li>
                            <li>Wajib memiliki Asuransi Kecelakaan (BPJS atau sejenisnya) yang masih berlaku.</li>
                            <li>Wajib menaati Protokol Kesehatan dan Keamanan Rutan secara ketat.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: ALUR PROSEDUR PENGAJUAN -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Alur Pendaftaran dan Seleksi Magang
                </h2>
                
                <div class="relative pl-3">
                    <div class="timeline-line"></div>
                    <div class="space-y-6">
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.5s;">
                            <span class="text-lg font-bold text-emerald-700">Langkah 1: Pengiriman Berkas</span>
                            <p class="text-sm">Institusi mengirimkan surat permohonan resmi dan proposal Magang/PKL ke Rutan Situbondo (via pos/diantar langsung ke Bagian Tata Usaha).</p>
                        </div>
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.6s;">
                            <span class="text-lg font-bold text-emerald-700">Langkah 2: Verifikasi dan Disposisi</span>
                            <p class="text-sm">Berkas diperiksa kelengkapannya dan didisposisikan kepada Kepala Rutan untuk penentuan diterima/tidaknya permohonan.</p>
                        </div>
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.7s;">
                            <span class="text-lg font-bold text-emerald-700">Langkah 3: Pemberitahuan Hasil</span>
                            <p class="text-sm">Rutan akan mengirimkan Surat Balasan/Persetujuan kepada institusi yang mengajukan. (Waktu tunggu dapat bervariasi).</p>
                        </div>
                        
                        <div class="timeline-item bg-emerald-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.8s;">
                            <span class="text-lg font-bold text-emerald-700">Langkah 4: Pelaksanaan Magang</span>
                            <p class="text-sm">Peserta wajib melapor ke Bagian Tata Usaha pada hari pertama dan mengikuti orientasi singkat mengenai keamanan dan tata tertib.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 text-center text-lg max-w-4xl mx-auto p-4 bg-yellow-100 border-l-4 border-yellow-500 rounded-lg card-animation" style="transition-delay: 0.9s;">
                    <i class="fa-solid fa-circle-info text-yellow-600 mr-2"></i> **PENTING:** Kuota penerimaan Magang/PKL terbatas dan diprioritaskan berdasarkan bidang keilmuan yang relevan dengan tugas dan fungsi Rutan.
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Program Magang/PKL.</p>
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