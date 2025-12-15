@include('header')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rencana Strategis (Renstra)</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Konfigurasi Font dan Warna Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'primary-blue': '#1e40af', // Warna Biru Gelap
                        'secondary-gold': '#f59e0b', // Warna Emas/Kuning
                    }
                }
            }
        }
    </script>
    <style>
        /* Mengatur font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb; /* Latar belakang abu-abu muda */
            /* Mengurangi padding atas karena header fixed sudah dihapus dan kita menggunakan margin pada <main> */
            padding-top: 1rem; 
        }
        /* Mengatur padding horizontal dan bawah agar tetap rapi */
        .page-container {
            padding-left: 1rem;
            padding-right: 1rem;
            padding-bottom: 3rem;
        }

        /* Style untuk efek hover pada item Renstra */
        .renstra-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .renstra-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 25px -5px rgba(0, 0, 0, 0.15), 0 5px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Styling khusus untuk tabel agar border lebih tegas */
        #sasaran-table-body tr {
            border-bottom: 1px solid #e5e7eb;
        }
        #sasaran-table-body tr:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body class="page-container">

    <!-- Kontainer Utama Renstra -->
    <!-- Margin atas mt-16 untuk memberikan jarak yang cukup dari header eksternal -->
    <main class="max-w-6xl mx-auto mt-16"> 
        
        <!-- Judul Dokumen (DIREVISI: Lebih Besar, Gradien Biru, dan Aksen Emas) -->
        <div class="bg-gradient-to-r from-primary-blue to-blue-700 p-6 md:p-10 mb-10 rounded-2xl shadow-2xl text-center transform transition duration-500 hover:scale-[1.01] border-b-8 border-secondary-gold">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white tracking-wider mb-2 drop-shadow-lg">
                Rencana Strategis
            </h1>
            <p class="text-xl md:text-2xl font-semibold text-secondary-gold mt-2">
                (Renstra) | Periode 2025 - 2030
            </p>
        </div>

        <!-- Bagian 1: Visi -->
        <section class="bg-white p-6 md:p-10 rounded-xl shadow-lg mb-10 renstra-item">
            <h2 class="text-3xl font-bold text-secondary-gold mb-4 flex items-center">
                <svg class="w-8 h-8 mr-3 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                1. Visi
            </h2>
            <blockquote class="text-xl md:text-2xl italic font-medium text-gray-800 border-l-4 border-primary-blue pl-4 py-3 bg-gray-50 rounded-lg">
                "Menjadi lembaga percontohan yang inovatif, berdaya saing global, dan berlandaskan nilai-nilai integritas pada tahun 2030."
            </blockquote>
        </section>

        <!-- Bagian 2: Misi -->
        <section class="bg-white p-6 md:p-10 rounded-xl shadow-lg mb-10 renstra-item">
            <h2 class="text-3xl font-bold text-secondary-gold mb-6 flex items-center">
                <svg class="w-8 h-8 mr-3 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                2. Misi
            </h2>
            <ul class="space-y-4 text-gray-700">
                <li class="p-4 border-l-4 border-secondary-gold bg-blue-50 rounded-md shadow-sm">
                    <span class="font-semibold text-primary-blue mr-2">Misi 1:</span> Meningkatkan kualitas layanan publik melalui digitalisasi dan tata kelola yang baik.
                </li>
                <li class="p-4 border-l-4 border-secondary-gold bg-blue-50 rounded-md shadow-sm">
                    <span class="font-semibold text-primary-blue mr-2">Misi 2:</span> Mengembangkan sumber daya manusia yang kompeten, profesional, dan beretika.
                </li>
                <li class="p-4 border-l-4 border-secondary-gold bg-blue-50 rounded-md shadow-sm">
                    <span class="font-semibold text-primary-blue mr-2">Misi 3:</span> Mendorong inovasi dan riset terapan untuk solusi permasalahan bangsa.
                </li>
            </ul>
        </section>

        <!-- Bagian 3: Tujuan Strategis -->
        <section class="bg-white p-6 md:p-10 rounded-xl shadow-lg mb-10 renstra-item">
            <h2 class="text-3xl font-bold text-secondary-gold mb-6 flex items-center">
                <svg class="w-8 h-8 mr-3 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                3. Tujuan Strategis
            </h2>
            <div id="tujuan-list" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Data akan dimuat di sini oleh JavaScript -->
            </div>
        </section>

        <!-- Bagian 4: Sasaran dan Indikator Kinerja Utama (IKU) -->
        <section class="bg-white p-6 md:p-10 rounded-xl shadow-lg renstra-item">
            <h2 class="text-3xl font-bold text-secondary-gold mb-6 flex items-center">
                <svg class="w-8 h-8 mr-3 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                4. Sasaran dan IKU
            </h2>

            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-primary-blue text-white">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-sm font-medium uppercase tracking-wider rounded-tl-lg">Sasaran Strategis</th>
                            <th scope="col" class="px-6 py-4 text-left text-sm font-medium uppercase tracking-wider">Indikator Kinerja Utama (IKU)</th>
                            <th scope="col" class="px-6 py-4 text-left text-sm font-medium uppercase tracking-wider rounded-tr-lg">Target (2030)</th>
                        </tr>
                    </thead>
                    <tbody id="sasaran-table-body" class="bg-white divide-y divide-gray-200">
                        <!-- Data akan dimuat di sini oleh JavaScript -->
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <!-- JavaScript untuk memuat data dan merender Renstra -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Data Renstra dalam format JavaScript Object
            const renstraData = {
                tujuan: [
                    {
                        title: "Peningkatan Kualitas Layanan",
                        description: "Memastikan semua layanan yang diberikan memenuhi standar kualitas internasional dan dapat diakses secara digital 24/7.",
                        icon: `<svg class="w-6 h-6 text-secondary-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-0.75-3M3 17h18M5 13h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2z"></path></svg>`
                    },
                    {
                        title: "Penguatan Kapasitas SDM",
                        description: "Menciptakan budaya belajar berkelanjutan dan meningkatkan rasio pegawai bersertifikasi profesional.",
                        icon: `<svg class="w-6 h-6 text-secondary-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>`
                    },
                    {
                        title: "Optimalisasi Tata Kelola",
                        description: "Menerapkan sistem manajemen risiko dan mencapai opini Wajar Tanpa Pengecualian (WTP) secara berkelanjutan.",
                        icon: `<svg class="w-6 h-6 text-secondary-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>`
                    },
                    {
                        title: "Pengembangan Inovasi",
                        description: "Menciptakan minimal 5 produk/prototipe inovasi baru yang diakui secara nasional setiap tahunnya.",
                        icon: `<svg class="w-6 h-6 text-secondary-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>`
                    }
                ],
                sasaran: [
                    {
                        sasaran: "Tingkat kepuasan pengguna layanan mencapai sangat baik.",
                        iku: "Indeks Kepuasan Masyarakat (IKM).",
                        target: "≥ 4.50 (Skala 5)"
                    },
                    {
                        sasaran: "Persentase digitalisasi proses bisnis utama (end-to-end) mencapai 90%.",
                        iku: "Persentase proses bisnis yang terintegrasi secara digital.",
                        target: "90%"
                    },
                    {
                        sasaran: "Peningkatan kompetensi SDM sesuai kebutuhan strategis.",
                        iku: "Rasio pegawai yang memiliki sertifikasi profesional relevan.",
                        target: "80%"
                    },
                    {
                        sasaran: "Kepatuhan terhadap regulasi dan efisiensi anggaran meningkat.",
                        iku: "Nilai Sistem Akuntabilitas Kinerja Instansi Pemerintah (SAKIP).",
                        target: "A"
                    }
                ]
            };

            const tujuanList = document.getElementById('tujuan-list');
            const sasaranTableBody = document.getElementById('sasaran-table-body');

            // Fungsi untuk merender Tujuan Strategis
            renstraData.tujuan.forEach(tujuan => {
                const tujuanHtml = `
                    <div class="p-6 bg-blue-50 border border-primary-blue/30 rounded-lg shadow-inner">
                        <div class="flex items-center space-x-3 mb-3">
                            ${tujuan.icon}
                            <h3 class="text-xl font-bold text-primary-blue">${tujuan.title}</h3>
                        </div>
                        <p class="text-gray-600">${tujuan.description}</p>
                    </div>
                `;
                tujuanList.innerHTML += tujuanHtml;
            });

            // Fungsi untuk merender Sasaran dan IKU
            renstraData.sasaran.forEach((item, index) => {
                const rowClass = index % 2 === 0 ? 'bg-white' : 'bg-gray-50';
                const sasaranHtml = `
                    <tr class="${rowClass}">
                        <td class="px-6 py-4 whitespace-normal text-sm font-medium text-gray-900">${item.sasaran}</td>
                        <td class="px-6 py-4 whitespace-normal text-sm text-gray-600">${item.iku}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-extrabold text-primary-blue">${item.target}</td>
                    </tr>
                `;
                sasaranTableBody.innerHTML += sasaranHtml;
            });
        });
    </script>

</body>
</html>

@include('scripts')