@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pejabat Struktural Premium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #e0e7ff; /* Lavender background */
            background-image: linear-gradient(to bottom, #f0f4f8, #e0e7ff);
            color: #1f2937;
        }
        h1, h2 {
            font-family: 'Playfair Display', serif;
        }

        /* --- KARTU KARUTAN KHUSUS --- */
        .karutan-premium-card {
            background: #1f2937; /* Dark Grey */
            color: white;
            border-radius: 1.5rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            border: 5px solid #fbbf24;
            transition: all 0.5s ease;
        }
        .karutan-premium-card:hover {
            transform: scale(1.02);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.7);
        }
        .karutan-photo {
            border: 6px solid #4f46e5; /* Indigo ring */
            object-fit: cover;
        }
        .karutan-title {
            color: #fbbf24;
            letter-spacing: 2px;
        }
        .karutan-name {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 700;
        }

        /* --- KARTU SUBSI UMUM --- */
        .subsi-card {
            background-color: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .subsi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(59, 130, 246, 0.3);
            border: 1px solid #3b82f6;
        }
        .subsi-photo {
            border: 3px solid #6366f1; /* Indigo light ring */
        }
        .subsi-detail-icon {
            color: #4f46e5; /* Indigo 600 */
        }
    </style>
</head>
<body>

    <div class="py-20 px-4">
        <header class="text-center mb-16">
            <div class="inline-block px-5 py-2 rounded-full bg-indigo-100 text-indigo-700 font-bold text-sm tracking-wider mb-3 shadow-md">
                PEMASYARAKATAN | RUTAN KELAS IIB SITUBONDO
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 mb-4 leading-tight">
                Kepemimpinan Struktural
            </h1>
            <p class="text-xl text-slate-600 max-w-5xl mx-auto">
                Mengenal lebih dekat para Pejabat Eselon IV yang memimpin Rutan Situbondo.
            </p>
        </header>

        <!-- 1. KEPALA RUTAN (POSISI TERTINGGI DAN TERPUSAT) -->
        <div class="max-w-4xl mx-auto mb-20">
            <div class="karutan-premium-card p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-10">
                    <img src="https://placehold.co/200x200/1f2937/fbbf24?text=FOTO+KARUTAN" alt="Foto Kepala Rutan" class="karutan-photo w-40 h-40 rounded-full">
                    <div class="text-center md:text-left">
                        <h2 class="text-5xl font-extrabold karutan-name mt-3 md:mt-0">
                            Nama Lengkap Kepala Rutan
                        </h2>
                        <p class="text-xl font-medium karutan-title mt-1 mb-4">
                            KEPALA RUTAN KELAS IIB SITUBONDO
                        </p>
                        
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center justify-center md:justify-start">
                                <i class="fa-solid fa-id-card-clip text-xl mr-3 text-yellow-300"></i> 
                                <span>**NIP/NRK:** <span class="font-semibold">197805152000121001</span></span>
                            </div>
                            <div class="flex items-center justify-center md:justify-start">
                                <i class="fa-solid fa-briefcase text-xl mr-3 text-yellow-300"></i> 
                                <span>**Pengalaman:** <span class="font-semibold">20+ Tahun di Pemasyarakatan</span></span>
                            </div>
                        </div>

                        <p class="text-sm italic mt-4 max-w-lg text-slate-300">
                            "Menegakkan integritas, memberikan pembinaan terbaik, dan memastikan keamanan adalah prioritas utama kami."
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. KARTU PEJABAT DI BAWAHNYA (GRID) -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- KASUBSI PENGELOLAAN -->
            <div class="subsi-card">
                <div class="flex items-center justify-center mb-4">
                    <img src="https://placehold.co/100x100/6366f1/ffffff?text=FOTO+SUBSI+1" alt="Foto Kasubsi Pengelolaan" class="subsi-photo w-24 h-24 rounded-full mx-auto">
                </div>
                
                <p class="text-sm font-semibold text-center text-indigo-600 uppercase">Kasubsi Pengelolaan</p>
                <h3 class="text-2xl font-bold text-slate-800 text-center mb-4">Nama Pejabat Pengelolaan</h3>
                
                <div class="space-y-3 pt-4 border-t border-slate-100">
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">NIP:</span>
                        <span class="text-slate-600">198501012005012001</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">Bidang:</span>
                        <span class="text-slate-600">Administrasi & Keuangan</span>
                    </div>
                </div>
                
                <p class="text-xs italic text-slate-500 mt-4">
                    Bertanggung jawab atas tata usaha, kepegawaian, dan manajemen aset rutan.
                </p>
            </div>

            <!-- KASUBSI PELAYANAN TAHANAN -->
            <div class="subsi-card">
                <div class="flex items-center justify-center mb-4">
                    <img src="https://placehold.co/100x100/6366f1/ffffff?text=FOTO+SUBSI+2" alt="Foto Kasubsi Pelayanan" class="subsi-photo w-24 h-24 rounded-full mx-auto">
                </div>
                
                <p class="text-sm font-semibold text-center text-indigo-600 uppercase">Kasubsi Pelayanan Tahanan</p>
                <h3 class="text-2xl font-bold text-slate-800 text-center mb-4">Nama Pejabat Pelayanan</h3>
                
                <div class="space-y-3 pt-4 border-t border-slate-100">
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">NIP:</span>
                        <span class="text-slate-600">198804202010011002</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">Bidang:</span>
                        <span class="text-slate-600">Pembinaan & Kesehatan</span>
                    </div>
                </div>
                
                <p class="text-xs italic text-slate-500 mt-4">
                    Mengelola registrasi, hak-hak, perawatan, dan program pembinaan bagi tahanan.
                </p>
            </div>

            <!-- KEPALA KPR (PENGAMANAN) -->
            <div class="subsi-card">
                <div class="flex items-center justify-center mb-4">
                    <img src="https://placehold.co/100x100/6366f1/ffffff?text=FOTO+KPR" alt="Foto Kepala KPR" class="subsi-photo w-24 h-24 rounded-full mx-auto">
                </div>
                
                <p class="text-sm font-semibold text-center text-indigo-600 uppercase">Kepala Kesatuan Pengamanan Rutan (KPR)</p>
                <h3 class="text-2xl font-bold text-slate-800 text-center mb-4">Nama Pejabat Pengamanan</h3>
                
                <div class="space-y-3 pt-4 border-t border-slate-100">
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">NIP:</span>
                        <span class="text-slate-600">198211052002011003</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">Bidang:</span>
                        <span class="text-slate-600">Keamanan & Ketertiban</span>
                    </div>
                </div>
                
                <p class="text-xs italic text-slate-500 mt-4">
                    Memastikan ketertiban, keamanan 24 jam, dan mengawasi setiap pergerakan di dalam rutan.
                </p>
            </div>

        </div>

        

    </div>

</body>
</html>

@include('footer')

@include('scripts')