@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pemasyarakatan Non-Inti Rutan Kelas IIB Situbondo</title>
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
            background-color: #fffbeb; /* Yellow 50 - Tema netral/informasi umum */
            border-bottom: 5px solid #d97706; /* Amber 700 */
        }
        
        .sticky-nav {
            background-color: #44403c; /* Stone 800 - Tema Netral */
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
            background-color: #d97706; /* Amber 700 */
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


    
    <!-- JUDUL DAN SUB-JUDUL LAYANAN LAINNYA -->
    <main class="pt-8"> 
        <header class="header-section py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-stone-800 mb-3">
                    <i class="fa-solid fa-layer-group mr-3 text-amber-600"></i> Layanan Tambahan WBP
                </h1>
                <p class="text-xl text-slate-700">
                    Informasi mengenai Pembebasan Murni, Remisi, Cuti Mengunjungi Keluarga, dan Layanan Bantuan Hukum.
                </p>
            </div>
        </header>

        <!-- BAGIAN 1: PEMBEBASAN MURNI & CMK -->
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Layanan Pembebasan dan Cuti
                </h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    
                    <!-- Kartu Pembebasan Murni -->
                    <div class="bg-amber-50 p-6 rounded-xl shadow-lg border-t-4 border-amber-500 card-animation">
                        <i class="fa-solid fa-door-open text-4xl text-amber-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-amber-800">Pembebasan Murni (BEBAS)</h3>
                        <p class="text-base font-semibold text-slate-700 mb-4">
                            Pembebasan tanpa syarat bagi WBP yang telah menjalani seluruh masa pidana sesuai Putusan Pengadilan, termasuk pengurangan masa hukuman (Remisi).
                        </p>
                        <h4 class="font-bold text-slate-800">Persyaratan Utama:</h4>
                        <ul class="list-disc space-y-1 text-sm text-slate-600 ml-5">
                            <li>SK Remisi (jika ada) dan perhitungan akhir masa pidana.</li>
                            <li>Telah diverifikasi oleh BAPAS (untuk proses akhir).</li>
                        </ul>
                    </div>

                    <!-- Kartu Cuti Mengunjungi Keluarga (CMK) -->
                    <div class="bg-stone-50 p-6 rounded-xl shadow-lg border-t-4 border-stone-500 card-animation" style="transition-delay: 0.1s;">
                        <i class="fa-solid fa-suitcase-rolling text-4xl text-stone-600 mb-3"></i>
                        <h3 class="text-2xl font-bold mb-2 text-stone-800">Cuti Mengunjungi Keluarga (CMK)</h3>
                        <p class="text-base font-semibold text-slate-700 mb-4">
                            Izin keluar Rutan untuk mengunjungi keluarga inti di kediamannya, diberikan selama 2 hari (48 jam) dan dihitung dari sisa masa pidana.
                        </p>
                        <h4 class="font-bold text-slate-800">Syarat Khusus:</h4>
                        <ul class="list-disc space-y-1 text-sm text-slate-600 ml-5">
                            <li>Telah menjalani minimal 1/2 masa pidana.</li>
                            <li>Sisa pidana maksimal 6 bulan.</li>
                            <li>Surat Jaminan dari keluarga.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 2: BANTUAN HUKUM & REMISI -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Layanan Bantuan Hukum & Remisi
                </h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    
                    <!-- Kolom Bantuan Hukum -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-l-4 border-blue-600" style="transition-delay: 0.2s;">
                        <h3 class="text-2xl font-extrabold text-blue-700 mb-4">
                            <i class="fa-solid fa-gavel mr-2"></i> Bantuan Hukum (PROBONO)
                        </h3>
                        <p class="mb-4 text-slate-600 font-bold">
                            Rutan memfasilitasi WBP yang tidak mampu untuk mendapatkan pendampingan hukum gratis dari LBH/Advokat yang bekerja sama.
                        </p>
                        <h4 class="font-bold text-slate-800">Prosedur Mendapatkan Bantuan:</h4>
                        <ul class="list-disc space-y-2 text-slate-700 ml-5">
                            <li>Mengajukan permohonan tertulis ke Petugas Registrasi.</li>
                            <li>Menyertakan Surat Keterangan Tidak Mampu (SKTM).</li>
                            <li>Petugas akan mengubungi LBH/Advokat yang tersedia.</li>
                        </ul>
                    </div>
                    
                    <!-- Kolom Remisi -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-l-4 border-red-600" style="transition-delay: 0.3s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-4">
                            <i class="fa-solid fa-calendar-minus mr-2"></i> Remisi (Pengurangan Masa Pidana)
                        </h3>
                        <p class="mb-4 text-slate-600 font-bold">
                            Pengurangan masa pidana yang diberikan kepada Narapidana yang telah memenuhi syarat sesuai peraturan perundang-undangan (Remisi Umum dan Khusus).
                        </p>
                        <h4 class="font-bold text-slate-800">Syarat Wajib:</h4>
                        <ol class="space-y-2 text-slate-700 list-decimal pl-5">
                            <li>Telah menjalani minimal 6 bulan masa pidana.</li>
                            <li>Berkelakuan baik dan aktif mengikuti program pembinaan.</li>
                            <li>Melengkapi dokumen tuntutan denda (jika ada) dan telah membayar.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: ALUR REMISI & CMK -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Alur Proses Layanan (Contoh: Remisi)
                </h2>
                
                <div class="relative pl-3">
                    <div class="timeline-line"></div>
                    <div class="space-y-6">
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.4s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 1: Verifikasi Data & Syarat</span>
                            <p class="text-sm">Petugas Registrasi Rutan memeriksa kelengkapan syarat (substansif, administratif, berkelakuan baik) WBP.</p>
                        </div>
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.5s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 2: Sidang TPP Rutan</span>
                            <p class="text-sm">Data WBP yang memenuhi syarat Remisi disidangkan dalam Tim Pengamat Pemasyarakatan (TPP) Rutan.</p>
                        </div>
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.6s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 3: Pengajuan ke Direktorat Jenderal</span>
                            <p class="text-sm">Berkas diajukan secara online melalui Sistem Database Pemasyarakatan (SDP) ke Ditjen Pemasyarakatan/Kanwil Kemenkumham.</p>
                        </div>
                        
                        <div class="timeline-item bg-amber-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.7s;">
                            <span class="text-lg font-bold text-amber-700">Langkah 4: Penerbitan dan Pelaksanaan SK</span>
                            <p class="text-sm">SK Remisi diterbitkan dan diserahkan kepada WBP pada tanggal yang telah ditetapkan (misalnya, Hari Kemerdekaan untuk Remisi Umum).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Layanan Tambahan WBP.</p>
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