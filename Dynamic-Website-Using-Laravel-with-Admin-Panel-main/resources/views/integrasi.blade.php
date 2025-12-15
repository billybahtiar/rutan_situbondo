@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Integrasi Pemasyarakatan Rutan Kelas IIB Situbondo</title>
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
            background-color: #e0f2fe; /* Sky 100 - Tema Biru untuk layanan WBP */
            border-bottom: 5px solid #06b6d4; /* Cyan 500 */
        }
        
        .sticky-nav {
            background-color: #0c4a6e; /* Dark Blue */
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
            background-color: #0ea5e9; /* Sky 500 */
            border: 2px solid white;
            z-index: 10;
        }
        .timeline-line {
            position: absolute;
            left: 3px;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #bae6fd; /* Sky 200 */
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

    
    <!-- JUDUL DAN SUB-JUDUL LAYANAN INTEGRASI -->
    <main class="pt-8"> 
        <header class="header-section py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-sky-800 mb-3">
                    <i class="fa-solid fa-graduation-cap mr-3 text-cyan-600"></i> Layanan Integrasi WBP
                </h1>
                <p class="text-xl text-slate-700">
                    Prosedur dan persyaratan untuk Pembebasan Bersyarat (PB), Cuti Menjelang Bebas (CMB), dan Cuti Bersyarat (CB).
                </p>
            </div>
        </header>

        <!-- BAGIAN 1: JENIS-JENIS INTEGRASI -->
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Tiga Jenis Program Integrasi
                </h2>
                <p class="text-center text-lg max-w-3xl mx-auto mb-8 text-slate-600">
                    Program Integrasi adalah hak bagi WBP yang telah memenuhi syarat substanstif dan administratif, memungkinkan mereka menjalani sisa masa pidana di luar lembaga dengan pengawasan.
                </p>

                

                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    
                    <!-- Kartu PB -->
                    <div class="bg-blue-50 p-6 rounded-xl shadow-lg border-t-4 border-blue-500 card-animation">
                        <i class="fa-solid fa-hand-holding-hand text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-blue-800">Pembebasan Bersyarat (PB)</h3>
                        <p class="text-sm font-semibold text-slate-700">
                            WBP dapat dibebaskan bersyarat setelah menjalani minimal **2/3** masa pidana, dengan minimal 9 bulan sisa pidana. PB adalah yang paling sering diajukan.
                        </p>
                    </div>

                    <!-- Kartu CB -->
                    <div class="bg-green-50 p-6 rounded-xl shadow-lg border-t-4 border-green-500 card-animation" style="transition-delay: 0.1s;">
                        <i class="fa-solid fa-house-chimney text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-green-800">Cuti Bersyarat (CB)</h3>
                        <p class="text-sm font-semibold text-slate-700">
                            Diberikan kepada WBP setelah menjalani minimal **2/3** masa pidana, sisa pidana tidak lebih dari 6 bulan.
                        </p>
                    </div>

                    <!-- Kartu CMB -->
                    <div class="bg-cyan-50 p-6 rounded-xl shadow-lg border-t-4 border-cyan-500 card-animation" style="transition-delay: 0.2s;">
                        <i class="fa-solid fa-walking text-4xl text-cyan-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-cyan-800">Cuti Menjelang Bebas (CMB)</h3>
                        <p class="text-sm font-semibold text-slate-700">
                            Diberikan kepada WBP yang telah menjalani minimal **2/3** masa pidana, sisa pidana tidak lebih dari 3 bulan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 2: PERSYARATAN WAJIB -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Persyaratan Administratif dan Substansif
                </h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    
                    <!-- Kolom Persyaratan Substansif -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-l-4 border-red-600" style="transition-delay: 0.3s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-4">
                            <i class="fa-solid fa-shield-halved mr-2"></i> Substansif (Tingkah Laku)
                        </h3>
                        <p class="mb-4 text-slate-600 font-bold">WBP harus:</p>
                        <ul class="list-disc space-y-2 text-slate-700 ml-5">
                            <li>Berkelakuan baik minimal 9 bulan terakhir.</li>
                            <li>Tidak pernah dicabut hak integrasinya.</li>
                            <li>Telah mengikuti Program Pembinaan dengan baik (dibuktikan dengan penilaian).</li>
                        </ul>
                    </div>
                    
                    <!-- Kolom Persyaratan Administratif -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-l-4 border-sky-600" style="transition-delay: 0.4s;">
                        <h3 class="text-2xl font-extrabold text-sky-700 mb-4">
                            <i class="fa-solid fa-file-lines mr-2"></i> Administratif (Kelengkapan Dokumen)
                        </h3>
                        <p class="mb-4 text-slate-600 font-bold">Dokumen wajib meliputi:</p>
                        <ol class="space-y-2 text-slate-700 list-decimal pl-5">
                            <li>Surat Permohonan dari WBP.</li>
                            <li>Salinan Putusan Pengadilan (Vonis).</li>
                            <li>Laporan Penelitian Kemasyarakatan (Litmas) dari Balai Pemasyarakatan (BAPAS).</li>
                            <li>Surat Jaminan dari Keluarga (Suami/Istri/Orang Tua/Wali) yang ditandatangani di atas materai.</li>
                            <li>Surat Pernyataan Kesanggupan dari WBP untuk mematuhi bimbingan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: ALUR PROSEDUR PENGAJUAN -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Alur Pengajuan dan Proses Integrasi
                </h2>
                
                <div class="relative pl-3">
                    <div class="timeline-line"></div>
                    <div class="space-y-6">
                        
                        <div class="timeline-item bg-sky-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.5s;">
                            <span class="text-lg font-bold text-sky-700">Langkah 1: Pemberkasan Internal</span>
                            <p class="text-sm">Petugas Rutan (Wali Pemasyarakatan) memastikan WBP memenuhi syarat substansif dan membantu kelengkapan dokumen administratif. </p>
                        </div>
                        
                        <div class="timeline-item bg-sky-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.6s;">
                            <span class="text-lg font-bold text-sky-700">Langkah 2: Litmas BAPAS</span>
                            <p class="text-sm">Rutan mengirim surat permintaan Litmas ke BAPAS (Balai Pemasyarakatan) untuk menilai kelayakan WBP kembali ke masyarakat.</p>
                        </div>
                        
                        <div class="timeline-item bg-sky-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.7s;">
                            <span class="text-lg font-bold text-sky-700">Langkah 3: Sidang TPP dan Pengajuan Kanwil</span>
                            <p class="text-sm">Hasil Litmas disidangkan di Tim Pengamat Pemasyarakatan (TPP) Rutan. Jika disetujui, berkas diajukan ke Kantor Wilayah (Kanwil Kemenkumham).</p>
                        </div>
                        
                        <div class="timeline-item bg-sky-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.8s;">
                            <span class="text-lg font-bold text-sky-700">Langkah 4: Keputusan dan Pelaksanaan Integrasi</span>
                            <p class="text-sm">Setelah SK Integrasi terbit dari Kanwil, WBP dibebaskan untuk menjalani bimbingan di BAPAS hingga masa pidana berakhir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Program Integrasi.</p>
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