@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi DIPA dan Anggaran Rutan Kelas IIB Situbondo</title>
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
            background-color: #eef2ff; /* Indigo 50 - Tema biru/ungu untuk finansial */
            border-bottom: 5px solid #4f46e5; /* Indigo 600 */
        }
        
        .sticky-nav {
            background-color: #3730a3; /* Indigo 700 - Tema kuat untuk integritas finansial */
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
            background-color: #4f46e5; /* Indigo 600 */
            border: 2px solid white;
            z-index: 10;
        }
        .timeline-line {
            position: absolute;
            left: 3px;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #a5b4fc; /* Indigo 300 */
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
                <span class="text-indigo-300 text-sm font-medium">Informasi DIPA & Akuntabilitas Anggaran</span>
            </div>
        </div>
    </nav>
    
    <!-- JUDUL DAN SUB-JUDUL LAYANAN DIPA -->
    <main class="pt-8"> 
        <header class="header-section py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-indigo-800 mb-3">
                    <i class="fa-solid fa-file-invoice-dollar mr-3 text-indigo-600"></i> DIPA & Laporan Anggaran
                </h1>
                <p class="text-xl text-slate-700 font-semibold max-w-2xl mx-auto">
                    Keterbukaan informasi publik mengenai Daftar Isian Pelaksanaan Anggaran (DIPA) Rutan Kelas IIB Situbondo.
                </p>
            </div>
        </header>

        <!-- BAGIAN 1: APA ITU DIPA? -->
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-6">
                    Mengenal DIPA (Daftar Isian Pelaksanaan Anggaran)
                </h2>
                <div class="max-w-4xl mx-auto bg-indigo-50 p-6 rounded-xl shadow-lg border-l-4 border-indigo-500 card-animation">
                    <i class="fa-solid fa-money-check-dollar text-4xl text-indigo-600 float-right ml-4"></i>
                    <p class="text-lg text-slate-700">
                        DIPA adalah dokumen pelaksanaan anggaran yang disusun oleh Kementerian/Lembaga dan disahkan oleh Direktorat Jenderal Perbendaharaan (DJPB) Kementerian Keuangan. DIPA berfungsi sebagai dasar bagi Rutan Kelas IIB Situbondo untuk melaksanakan kegiatan dan mencairkan dana. 
                    </p>
                    <p class="mt-3 text-sm italic text-slate-500">
                        Ini adalah dokumen utama yang memuat rincian alokasi dana dan rencana penggunaan anggaran selama satu tahun fiskal.
                    </p>
                </div>
                
                <div class="text-center mt-8">
                    
                </div>
            </div>
        </section>

        <!-- BAGIAN 2: KOMPONEN UTAMA DIPA -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Tiga Kategori Belanja Utama
                </h2>
                
                <div class="grid md:grid-cols-3 gap-8">
                    
                    <!-- Belanja Pegawai -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-600" style="transition-delay: 0.1s;">
                        <h3 class="text-2xl font-extrabold text-red-700 mb-3">
                            <i class="fa-solid fa-users-gear mr-2"></i> Belanja Pegawai (Akun 51)
                        </h3>
                        <p class="text-sm text-slate-700">
                            Digunakan untuk membiayai kompensasi dalam bentuk gaji, tunjangan, dan honorarium yang dibayarkan kepada pegawai Rutan.
                        </p>
                    </div>
                    
                    <!-- Belanja Barang -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-t-4 border-yellow-600" style="transition-delay: 0.2s;">
                        <h3 class="text-2xl font-extrabold text-yellow-700 mb-3">
                            <i class="fa-solid fa-cart-shopping mr-2"></i> Belanja Barang (Akun 52)
                        </h3>
                        <p class="text-sm text-slate-700">
                            Digunakan untuk membiayai kebutuhan operasional sehari-hari, termasuk pembelian ATK, makan narapidana, pemeliharaan rutin, dan perjalanan dinas.
                        </p>
                    </div>
                    
                    <!-- Belanja Modal -->
                    <div class="card-animation bg-white p-6 rounded-xl shadow-lg border-t-4 border-green-600" style="transition-delay: 0.3s;">
                        <h3 class="text-2xl font-extrabold text-green-700 mb-3">
                            <i class="fa-solid fa-building-lock mr-2"></i> Belanja Modal (Akun 53)
                        </h3>
                        <p class="text-sm text-slate-700">
                            Digunakan untuk pengeluaran yang menghasilkan aset tetap atau penambahan nilai aset tetap, seperti renovasi bangunan dan pembelian peralatan besar.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN 3: TRANSPARANSI DAN AKSES DOKUMEN -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                    Komitmen Transparansi
                </h2>
                
                <div class="relative pl-3">
                    <div class="timeline-line"></div>
                    <div class="space-y-6">
                        
                        <div class="timeline-item bg-indigo-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.4s;">
                            <span class="text-lg font-bold text-indigo-700">Penyampaian Rincian DIPA</span>
                            <p class="text-sm">Rangkuman DIPA tahun berjalan dipublikasikan di papan informasi publik Rutan dan dapat diakses melalui website resmi (jika tersedia).</p>
                        </div>
                        
                        <div class="timeline-item bg-indigo-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.5s;">
                            <span class="text-lg font-bold text-indigo-700">Laporan Realisasi Anggaran (LRA)</span>
                            <p class="text-sm">Realisasi penggunaan anggaran dilaporkan secara berkala per triwulan dan diumumkan kepada publik untuk menjamin akuntabilitas.</p>
                        </div>
                        
                        <div class="timeline-item bg-indigo-50 p-4 rounded-lg shadow-md card-animation" style="transition-delay: 0.6s;">
                            <span class="text-lg font-bold text-indigo-700">Akses Dokumen Detail</span>
                            <p class="text-sm">Untuk permintaan dokumen DIPA atau LRA yang lebih rinci, pemohon dapat mengajukan permohonan informasi publik resmi melalui PPID Rutan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="bg-slate-800 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">Pusat Informasi Layanan Rutan Kelas IIB Situbondo. Anggaran yang Akuntabel dan Transparan.</p>
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