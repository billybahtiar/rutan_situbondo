@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutan Kelas IIB Situbondo - Profil Sederhana & Statistik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f7f9fb; /* Light background */
            color: #1f2937;
        }

        .hero {
            background-color: #0c4a6e; /* Dark Blue Gray */
            background-image: linear-gradient(135deg, #1e3a8a 0%, #0c4a6e 100%);
        }

        .stat-card {
            background-color: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.3);
        }

        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
            font-weight: 700;
        }
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50%;
            height: 4px;
            background-color: #3b82f6; /* Blue 500 */
            border-radius: 2px;
        }

        /* Styling untuk Struktur/Profil yang Simpel */
        .simple-profile-card {
            border: 2px solid #e5e7eb;
            background-color: white;
            padding: 1rem;
            border-radius: 0.75rem;
        }
    </style>
</head>
<body>

    <!-- HERO SECTION & QUICK STATS -->
    <header class="hero text-white py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <div class="inline-block px-4 py-1 rounded-full bg-yellow-400 text-slate-900 font-bold text-sm mb-3 tracking-wider shadow-md">
                KEMENTERIAN HUKUM DAN HAM RI
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                Rutan Kelas IIB Situbondo
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-10">
                Lembaga Pemasyarakatan yang Berintegritas, Profesional, Akuntabel, dan Melayani (PASTI).
            </p>

            <!-- QUICK STATS BAR - Tambahkan data-target untuk animasi angka -->
            <div id="quick-stats" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12 max-w-5xl mx-auto">
                
                <!-- Stat 1: Warga Binaan (Tahanan) -->
                <div class="stat-card">
                    <!-- Data Target: 245 -->
                    <div class="count-number text-4xl font-extrabold text-indigo-600" data-target="245">0</div>
                    <p class="text-sm text-slate-500 font-medium mt-1">Total Warga Binaan</p>
                    <i class="fa-solid fa-users text-2xl text-indigo-400 mt-2"></i>
                </div>

                <!-- Stat 2: Kapasitas -->
                <div class="stat-card">
                    <!-- Data Target: 100 -->
                    <div class="count-number text-4xl font-extrabold text-red-600" data-target="100">0</div>
                    <p class="text-sm text-slate-500 font-medium mt-1">Kapasitas Hunian</p>
                    <i class="fa-solid fa-house-chimney-crack text-2xl text-red-400 mt-2"></i>
                </div>

                <!-- Stat 3: Petugas (Pegawai) -->
                <div class="stat-card">
                    <!-- Data Target: 35 -->
                    <div class="count-number text-4xl font-extrabold text-green-600" data-target="35">0</div>
                    <p class="text-sm text-slate-500 font-medium mt-1">Jumlah Petugas/Pegawai</p>
                    <i class="fa-solid fa-user-shield text-2xl text-green-400 mt-2"></i>
                </div>
                
                 <!-- Stat 4: Zona Integritas (Tidak perlu animasi angka) -->
                <div class="stat-card">
                    <div class="text-4xl font-extrabold text-yellow-600">WBK</div>
                    <p class="text-sm text-slate-500 font-medium mt-1">Status Zona Integritas</p>
                    <i class="fa-solid fa-award text-2xl text-yellow-400 mt-2"></i>
                </div>
            </div>
            <p class="text-xs italic text-blue-200 mt-4">Data per Bulan Desember 2025</p>
        </div>
    </header>

    <!-- BAGIAN 2: TENTANG KAMI - RINGKASAN -->
    <section id="tentang" class="py-16 md:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl section-title mb-8">Tentang Institusi</h2>
            <p class="text-lg text-slate-700 leading-relaxed mb-6">
                Rutan Kelas IIB Situbondo berfungsi sebagai tempat penahanan sementara bagi tahanan yang masih dalam proses hukum. Tugas utama kami adalah memastikan pelaksanaan hukum yang adil, menjaga keamanan dan ketertiban Rutan, serta memastikan terpenuhinya hak-hak dasar dan pembinaan bagi seluruh warga binaan.
            </p>
            <div class="inline-block p-4 bg-indigo-50 rounded-lg">
                <p class="text-md font-semibold text-indigo-700">
                    <i class="fa-solid fa-gavel mr-2"></i> Melaksanakan Penegakan Hukum dan HAM.
                </p>
            </div>
        </div>
    </section>

    <!-- BAGIAN 3: PROFIL KEPALA RUTAN (Pimpinan Saja) -->
    <section id="pejabat" class="py-16 md:py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl section-title mb-10 text-center">Kepemimpinan</h2>
            
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-indigo-600">
                <div class="flex flex-col md:flex-row items-center md:space-x-6">
                    <img src="https://placehold.co/120x120/1e3a8a/ffffff?text=KARUTAN" alt="Foto Kepala Rutan" class="w-28 h-28 rounded-full border-4 border-yellow-500 mb-4 md:mb-0 object-cover">
                    <div class="text-center md:text-left">
                        <span class="text-xs font-bold text-indigo-600 uppercase tracking-widest">Kepala Rutan Kelas IIB Situbondo</span>
                        <h3 class="text-3xl font-extrabold text-slate-800 mt-1">
                            Nama Lengkap Kepala Rutan
                        </h3>
                        <p class="text-sm text-slate-500 mt-2">
                            <i class="fa-solid fa-id-card-clip mr-1"></i> NIP: **197805152000121001**
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Ringkasan Pejabat Lain -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                <div class="simple-profile-card">
                    <p class="text-lg font-bold text-indigo-700">Kasubsi Pengelolaan</p>
                    <p class="text-sm text-slate-600">Nama Pejabat 1</p>
                </div>
                 <div class="simple-profile-card">
                    <p class="text-lg font-bold text-indigo-700">Kasubsi Pelayanan Tahanan</p>
                    <p class="text-sm text-slate-600">Nama Pejabat 2</p>
                </div>
                 <div class="simple-profile-card">
                    <p class="text-lg font-bold text-indigo-700">Kepala KPR</p>
                    <p class="text-sm text-slate-600">Nama Pejabat 3</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BAGIAN 4: KONTAK & ALAMAT -->
    <section id="kontak" class="py-16 md:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl section-title mb-10">Hubungi Kami</h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                
                <!-- Alamat -->
                <div class="p-6 bg-indigo-50 rounded-xl shadow-md">
                    <i class="fa-solid fa-location-dot text-3xl text-indigo-600 mb-3"></i>
                    <h4 class="font-bold text-lg mb-2">Alamat Kantor</h4>
                    <p class="text-sm text-slate-600">Jl. Raya Situbondo No. XX, Kecamatan Kota, Situbondo, Jawa Timur 68311</p>
                </div>
                
                <!-- Telepon -->
                <div class="p-6 bg-indigo-50 rounded-xl shadow-md">
                    <i class="fa-solid fa-phone text-3xl text-indigo-600 mb-3"></i>
                    <h4 class="font-bold text-lg mb-2">Telepon Resmi</h4>
                    <p class="text-sm text-slate-600">
                        (0338) 123456 (Kantor Utama)
                        <br>
                        (0338) 987654 (Layanan Informasi)
                    </p>
                </div>
                
                <!-- Email -->
                <div class="p-6 bg-indigo-50 rounded-xl shadow-md">
                    <i class="fa-solid fa-envelope text-3xl text-indigo-600 mb-3"></i>
                    <h4 class="font-bold text-lg mb-2">Email</h4>
                    <p class="text-sm text-slate-600">
                        rutan_situbondo@kemenkumham.go.id
                        <br>
                        layanan.rtsitubondo@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="bg-slate-800 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-400">&copy; 2024. Rutan Kelas IIB Situbondo. <span class="font-bold">PASTI</span> Melayani.</p>
        </div>
    </footer>

    <!-- SCRIPT JAVASCRIPT UNTUK ANIMASI COUNT-UP -->
    <script>
        // Fungsi utama untuk animasi count-up
        function countUp(element) {
            const target = parseInt(element.getAttribute('data-target'));
            let current = 0;
            const duration = 2000; // Durasi animasi dalam milidetik (2 detik)
            const increment = target / (duration / 10); // Hitungan per interval (10ms)

            const timer = setInterval(() => {
                current += increment;
                if (current < target) {
                    element.textContent = Math.ceil(current); // Bulatkan ke atas
                } else {
                    element.textContent = target;
                    clearInterval(timer);
                }
            }, 10);
        }

        // Ambil semua elemen dengan kelas 'count-number'
        const countElements = document.querySelectorAll('.count-number');
        let hasCounted = false; // Flag untuk memastikan animasi hanya berjalan sekali

        // Observer untuk mendeteksi kapan elemen masuk ke viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Periksa apakah elemen terlihat dan animasi belum berjalan
                if (entry.isIntersecting && !hasCounted) {
                    // Jalankan fungsi countUp untuk setiap elemen
                    countElements.forEach(countUp);
                    hasCounted = true; // Set flag agar tidak dijalankan lagi
                    observer.unobserve(entry.target); // Hentikan observasi setelah selesai
                }
            });
        }, {
            threshold: 0.5 // Animasi dimulai ketika 50% elemen terlihat
        });

        // Target elemen yang akan diobservasi (ID div Quick Stats)
        const targetSection = document.getElementById('quick-stats');
        if (targetSection) {
             observer.observe(targetSection);
        }

    </script>

</body>
</html>

@include('footer')

@include('scripts')