@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi Rutan Situbondo Final</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f7f9fb; 
            color: #1f2937;
        }

        /* --- STYLING KHUSUS UNTUK DIAGRAM --- */
        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* KARUTAN BOX (Header Safe Zone) */
        .karutan-box {
            background-color: #0b1a30; /* Deep Navy Blue */
            color: white;
            padding: 2rem 2.5rem; 
            border-radius: 1.5rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 380px;
            text-align: center;
            border: 6px solid #fbbf24; /* Amber 400 Accent Border */
        }
        .karutan-photo {
            border: 4px solid #3b82f6; 
        }

        .name-placeholder {
            font-size: 1rem;
            font-weight: 600;
            margin-top: 0.5rem;
            padding: 0.5rem 0;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 0.5rem;
        }

        /* KONEKTOR SUPER TEGAS */
        .connector-v {
            width: 5px; 
            height: 50px;
            background-color: #3b82f6; 
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1); 
            position: relative;
        }
        .connector-h {
            width: 90%;
            max-width: 1100px;
            height: 5px; 
            background-color: #3b82f6; 
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            position: relative;
        }

        /* Titik tengah Karutan ke Garis H (Joint Point) */
        .connector-v::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #1a202c; 
            border: 4px solid #3b82f6;
            z-index: 10;
        }

        /* SUBSI CONTAINER */
        .subsi-container {
            display: flex;
            justify-content: center;
            gap: 3rem; 
            width: 100%;
            max-width: 1100px;
            padding: 0 1rem;
            flex-wrap: wrap; 
        }
        
        /* SUBSI BOX */
        .subsi-box {
            flex: 1 1 calc(33.33% - 3rem); 
            min-width: 300px;
            background-color: white;
            border: 1px solid #d1d5db; 
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .subsi-box:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(59, 130, 246, 0.3);
            border-color: #3b82f6;
        }

        /* Connector drop dari garis H ke Subsi Box */
        .subsi-box::before {
            content: '';
            position: absolute;
            top: -34px; 
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 34px;
            background-color: #3b82f6;
            z-index: 1;
        }
        /* Titik pertemuan garis V ke Subsi Box (Joint Point) */
        .subsi-box::after {
            content: '';
            position: absolute;
            top: -8px; 
            left: 50%;
            transform: translateX(-50%);
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #1a202c; 
            border: 4px solid #3b82f6;
            z-index: 2;
        }


        /* UNIT KERJA DI BAWAH SUBSI */
        .unit-kerja {
            border-top: 2px dashed #e2e8f0;
            padding-top: 1.25rem;
            margin-top: 1.5rem;
        }
        .unit-card {
            background-color: #eef4ff; /* Lighter Blue 50 */
            border-left: 5px solid #3b82f6;
            padding: 0.65rem;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            font-size: 0.95rem; 
        }
        
        /* Mobile adjustments */
        @media (max-width: 1024px) {
            .subsi-container {
                flex-direction: column;
                align-items: center;
                gap: 4rem; 
            }
            .subsi-box {
                flex: 1 1 95%; 
                max-width: 95%;
            }
            .connector-h {
                display: none;
            }
            .subsi-box::before, .subsi-box::after {
                display: none;
            }
            
            /* Connectors vertikal antar Subsi saat mobile */
            .subsi-box:not(:last-child)::after {
                content: '';
                position: absolute;
                bottom: -40px;
                left: 50%;
                transform: translateX(-50%);
                width: 5px;
                height: 40px;
                background-color: #3b82f6;
            }
        }
    </style>
</head>
<body>

    <div class="py-20 px-4"> 
        <header class="text-center mb-16">
            <div class="inline-block px-5 py-2 rounded-full bg-blue-100 text-blue-700 font-bold text-sm tracking-wider mb-3 shadow-md">
                STRUKTUR RESMI PEMASYARAKATAN
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 mb-4 leading-tight">
                Struktur Organisasi Rutan Situbondo
            </h1>
            <p class="text-xl text-slate-600 max-w-5xl mx-auto">
                Diagram Hierarki Utama dan Unit Kerja Fungsional dengan Alur Komando yang Jelas.
            </p>
        </header>

        <!-- DIAGRAM STRUKTUR ORGANISASI -->
        <div class="org-chart">
            
            <!-- 1. KEPALA RUTAN (KARUTAN) -->
            <div class="karutan-box">
                <i class="fa-solid fa-user-tie text-3xl mb-2 text-yellow-300"></i>
                <img src="images/rutan.jpg" alt="Foto Kepala Rutan" class="karutan-photo w-32 h-32 rounded-full mx-auto mb-4 object-cover shadow-2xl">
                <div class="font-extrabold text-3xl tracking-wide">KEPALA RUTAN</div>
                <div class="text-base font-medium mt-1 text-yellow-300">Penanggung Jawab Tertinggi</div>
                <!-- Tempat Nama -->
                <div class="name-placeholder text-yellow-100">
                    Nama Pejabat (NIP/NRK)
                </div>
            </div>

            <div class="connector-v"></div>
            <div class="connector-h md:block hidden"></div>

            <!-- KONEKTOR DAN SUB SEKSI -->
            <div class="subsi-container mt-0 md:mt-[-30px]">
                
                <!-- 2. KASUBSI PENGELOLAAN (Struktur Pengelolaan) -->
                <div class="subsi-box">
                    <img src="https://placehold.co/120x120/3b82f6/ffffff?text=FOTO+SUBSI+1" alt="Foto Kasubsi Pengelolaan" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-300 shadow-md">
                    <span class="font-extrabold text-2xl text-slate-900 block">Kasubsi Pengelolaan</span>
                    <p class="text-sm text-slate-600 font-semibold uppercase mb-3 mt-1">Administrasi & Umum</p>
                    <!-- Tempat Nama -->
                    <div class="name-placeholder text-slate-800 bg-slate-100 border border-slate-200">
                        Nama Pejabat (NIP/NRK)
                    </div>

                    <!-- UNIT KERJA PENGELOLAAN -->
                    <div class="unit-kerja">
                        <h4 class="text-sm font-bold text-blue-800 mb-3 flex items-center justify-center">
                            <i class="fa-solid fa-gears text-lg mr-2 text-indigo-600"></i> UNIT OPERASIONAL PUSAT
                        </h4>
                        <div class="space-y-2">
                            <div class="unit-card">Urusan Kepegawaian & Umum</div>
                            <div class="unit-card">Urusan Keuangan & Pelaporan</div>
                            <div class="unit-card">Urusan Perlengkapan & Inventaris</div>
                        </div>
                    </div>
                </div>

                <!-- 3. KASUBSI PELAYANAN TAHANAN (Struktur Pelayanan) -->
                <div class="subsi-box">
                    <img src="https://placehold.co/120x120/3b82f6/ffffff?text=FOTO+SUBSI+2" alt="Foto Kasubsi Pelayanan Tahanan" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-300 shadow-md">
                    <span class="font-extrabold text-2xl text-slate-900 block">Kasubsi Pelayanan Tahanan</span>
                    <p class="text-sm text-slate-600 font-semibold uppercase mb-3 mt-1">Registrasi, Perawatan, & Pembinaan</p>
                    <!-- Tempat Nama -->
                    <div class="name-placeholder text-slate-800 bg-slate-100 border border-slate-200">
                        Nama Pejabat (NIP/NRK)
                    </div>

                    <!-- UNIT KERJA PELAYANAN -->
                    <div class="unit-kerja">
                        <h4 class="text-sm font-bold text-blue-800 mb-3 flex items-center justify-center">
                            <i class="fa-solid fa-users-line text-lg mr-2 text-indigo-600"></i> UNIT FUNGSI PEMASYARAKATAN
                        </h4>
                        <div class="space-y-2">
                            <div class="unit-card">Urusan Registrasi & Statistik</div>
                            <div class="unit-card">Urusan Perawatan & Kesehatan</div>
                            <div class="unit-card">Urusan Pembinaan & Bimbingan</div>
                        </div>
                    </div>
                </div>

                <!-- 4. KEPALA KPR (Struktur Pengamanan) -->
                <div class="subsi-box">
                    <img src="https://placehold.co/120x120/3b82f6/ffffff?text=FOTO+KPR" alt="Foto Kepala KPR" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-300 shadow-md">
                    <span class="font-extrabold text-2xl text-slate-900 block">Kepala KPR</span>
                    <p class="text-sm text-slate-600 font-semibold uppercase mb-3 mt-1">Keamanan, Ketertiban, & Penjagaan</p>
                    <!-- Tempat Nama -->
                    <div class="name-placeholder text-slate-800 bg-slate-100 border border-slate-200">
                        Nama Pejabat (NIP/NRK)
                    </div>

                    <!-- UNIT KERJA PENGAMANAN -->
                    <div class="unit-kerja">
                        <h4 class="text-sm font-bold text-blue-800 mb-3 flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved text-lg mr-2 text-indigo-600"></i> UNIT PENGAMANAN & JAGA
                        </h4>
                        <div class="space-y-2">
                            <div class="unit-card">Komandan Regu Jaga (Shift A)</div>
                            <div class="unit-card">Komandan Regu Jaga (Shift B)</div>
                            <div class="unit-card">Pelayanan Pintu Utama (P2U)</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staf Pelaksana -->
            <div class="connector-v mt-12"></div>
            <div class="karutan-box bg-slate-200 text-slate-600 w-full mt-0" style="padding: 1rem 2rem; max-width: 450px; box-shadow: none; border: 1px solid #cbd5e1; border-radius: 1rem;">
                <div class="text-lg font-bold">Staf Pelaksana & Anggota Jaga</div>
                <p class="text-sm mt-1 italic text-slate-500">Ditempatkan dan dikoordinasikan langsung oleh Kepala Seksi atau Kepala KPR.</p>
            </div>

        </div>

        <div class="text-center pt-10 mt-12 border-t border-slate-300">
             <p class="text-sm text-slate-500 italic">
                Struktur ini mengikuti hierarki standar Rutan Kelas IIB.
             </p>
        </div>

    </div>

</body>
</html>
@include('footer')

@include('scripts')