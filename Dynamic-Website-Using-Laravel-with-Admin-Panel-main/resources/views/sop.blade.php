@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOP Rutan Kelas IIB Situbondo</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Lucide Icons untuk estetika modern -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Konfigurasi Font, Warna Kustom, dan Style -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light Gray Background */
        }
        /* Definisikan warna tema baru: Biru Navy dan Oranye */
        .primary-color { color: #1e3a8a; } /* Dark Blue (Navy) */
        .primary-bg { background-color: #1e3a8a; }
        .accent-color { color: #f97316; } /* Bright Orange */
        .accent-bg { background-color: #f97316; }
        
        /* Style untuk Kartu SOP */
        .sop-card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .sop-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased">

 

    <!-- Bagian Utama: Hero Section (Judul Halaman) -->
    <main class="flex-grow">
        <div class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16 sm:py-20 lg:py-24 shadow-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <i data-lucide="book-open-check" class="w-12 h-12 mx-auto mb-4 text-orange-400"></i>
                <h2 class="text-5xl sm:text-6xl font-extrabold leading-tight tracking-tight drop-shadow-lg">
                    Standar Operasional Prosedur
                </h2>
                <p class="mt-4 text-xl text-gray-200 max-w-3xl mx-auto">
                    Panduan resmi bagi WBP, keluarga, mitra, dan petugas Rutan Kelas IIB Situbondo.
                </p>
            </div>
        </div>

        <!-- Bagian Konten: Daftar SOP -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h3 class="text-3xl font-extrabold text-center mb-12 primary-color">Prosedur Inti Pelayanan Publik</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                <!-- SOP 1: Prosedur Kunjungan Tatap Muka -->
                <div class="bg-white p-8 rounded-2xl sop-card border-l-8 border-orange-500 hover:border-blue-800">
                    <div class="flex items-center mb-6">
                        <div class="p-3 rounded-full accent-bg text-white mr-4">
                            <i data-lucide="users" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-2xl font-bold primary-color">1. Prosedur Kunjungan</h4>
                    </div>
                    <ul class="list-none space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <i data-lucide="clock" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Waktu Layanan:</strong> Senin - Kamis (08:00-11:00).
                                <div>    Minggu, dan Hari Libur Nasional tutup.   </div> 
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-square" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Persyaratan Utama:</strong> Wajib KTP/KK asli, terdaftar di sistem kunjungan (online/loket), dan barang bawaan diperiksa petugas.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="shield-check" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Aturan Kunjungan:</strong> Maksimal 2 orang dewasa per WBP, dilarang membawa HP dan uang tunai.
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- SOP 2: Prosedur Penerimaan WBP Baru -->
                <div class="bg-white p-8 rounded-2xl sop-card border-l-8 border-orange-500 hover:border-blue-800">
                    <div class="flex items-center mb-6">
                        <div class="p-3 rounded-full accent-bg text-white mr-4">
                            <i data-lucide="user-plus" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-2xl font-bold primary-color">2. Penerimaan WBP Baru</h4>
                    </div>
                    <ul class="list-none space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <i data-lucide="file-text" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Verifikasi Dokumen:</strong> Petugas memeriksa BA.7, Surat Penetapan, dan riwayat kesehatan dari instansi pengirim.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="heart-pulse" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Pemeriksaan Awal:</strong> Meliputi pemeriksaan kesehatan fisik dan identifikasi sidik jari/biometrik.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="bed-double" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Orientasi & Penempatan:</strong> WBP menerima pengarahan, penggeledahan barang, dan penempatan sementara di kamar mapenaling (masa pengenalan lingkungan).
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- SOP 3: Prosedur Pelayanan Pengaduan -->
                <div class="bg-white p-8 rounded-2xl sop-card border-l-8 border-orange-500 hover:border-blue-800">
                    <div class="flex items-center mb-6">
                        <div class="p-3 rounded-full accent-bg text-white mr-4">
                            <i data-lucide="message-square-text" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-2xl font-bold primary-color">3. Pelayanan Pengaduan</h4>
                    </div>
                    <ul class="list-none space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <i data-lucide="send" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Saluran Resmi:</strong> Kotak Pengaduan, Layanan WA/Telp (disediakan di papan informasi), atau Laporkan langsung ke Petugas P2U.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="search-check" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Tindak Lanjut:</strong> Pengaduan diverifikasi oleh Tim Pengaduan dan dicatat. Identitas pelapor dirahasiakan.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="trending-up" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Waktu Penyelesaian:</strong> Respon awal diberikan maksimal 2x24 jam. Penyelesaian tuntas diupayakan dalam 7 hari kerja, tergantung kompleksitas.
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- SOP 4: Prosedur Pemberian Makanan -->
                <div class="bg-white p-8 rounded-2xl sop-card border-l-8 border-orange-500 hover:border-blue-800">
                    <div class="flex items-center mb-6">
                        <div class="p-3 rounded-full accent-bg text-white mr-4">
                            <i data-lucide="soup" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-2xl font-bold primary-color">4. Pemberian Makanan</h4>
                    </div>
                    <ul class="list-none space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <i data-lucide="calendar-check" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Jadwal Tetap:</strong> Pagi (07:00 WIB), Siang (12:00 WIB), dan Sore (17:00 WIB).
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="hand-metal" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Standar Kualitas:</strong> Dikelola oleh Tim Dapur, dipastikan higienis, dan sesuai standar Angka Kecukupan Gizi (AKG) yang ditetapkan.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="chef-hat" class="w-5 h-5 text-blue-700 mt-1 mr-3 flex-shrink-0"></i>
                            <div>
                                <strong class="text-gray-900">Pengawasan:</strong> Petugas P2U dan Petugas Kesehatan wajib melakukan kontrol kualitas dan distribusi makanan.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Catatan Penting -->
            <div class="mt-16 bg-orange-50 border-l-4 border-orange-500 p-6 rounded-lg shadow-inner">
                <p class="font-semibold text-xl text-orange-800 flex items-center">
                    <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i>
                    Penting untuk Diketahui
                </p>
                <p class="mt-2 text-gray-700">
                    Seluruh SOP ini tunduk pada Peraturan Menteri Hukum dan HAM dan dapat disesuaikan sewaktu-waktu sesuai dengan kondisi keamanan dan ketertiban di dalam Rutan. Mohon hubungi petugas resmi untuk informasi terbaru.
                </p>
            </div>
        </div>
    </main>

 
    <!-- Script untuk Ikon -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>


@include('scripts')