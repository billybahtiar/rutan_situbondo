@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKJIP | Laporan Kinerja Instansi Pemerintah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Poppins:wght@700;800;900&display=swap" rel="stylesheet">

    <style>
        /* Custom Styles for Professional Look */
        body { font-family: 'Inter', sans-serif; background-color: #f0f4f8; }

        /* Header Styling */
        .lkjip-header {
            background-image: linear-gradient(135deg, #9fddffff 0%, #1d4ed8 100%); /* Navy to Blue Gradient */
            padding: 80px 0 60px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: #ffffff;
        }
        .lkjip-header h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 900;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* Card Animation and Shadows */
        .metric-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            border-left: 5px solid;
            animation: fadeIn 1s ease-out;
        }
        .metric-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(29, 78, 216, 0.2);
        }

        /* Table Styling */
        .performance-table th {
            background-color: #1d4ed8;
            color: #ffffff;
            font-weight: 700;
            text-align: left;
            padding: 12px 16px;
            border-bottom: 2px solid #3b82f6;
            transition: background-color 0.3s;
        }
        .performance-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
        }
        .performance-table tr:nth-child(even) {
            background-color: #f9fafb;
        }
        .performance-table tr:hover {
            background-color: #eff6ff;
            transition: background-color 0.3s;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="min-h-screen">

    <!-- LKJIP HEADER -->
    <section class="lkjip-header text-center">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-5xl mb-2">Laporan Kinerja Instansi Pemerintah</h1>
            <span class="text-xl text-blue-200">Rutan Kelas IIB Situbondo - Tahun 2025-2026</span>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4">

            <!-- 1. METRIK RINGKASAN KINERJA -->
            <h2 class="text-3xl font-extrabold text-gray-800 mb-8 border-b-4 border-blue-500 pb-2 flex items-center">
                <i class="fa-solid fa-chart-line text-blue-600 mr-3"></i> Ringkasan Capaian Kinerja
            </h2>

            <div id="metric-cards" class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <!-- Data cards will be populated by JavaScript -->
            </div>

            <!-- 2. TABEL TARGET DAN REALISASI -->
            <h2 class="text-3xl font-extrabold text-gray-800 mb-6 border-b-4 border-blue-500 pb-2 flex items-center">
                <i class="fa-solid fa-table text-blue-600 mr-3"></i> Realisasi Program dan Kegiatan
            </h2>

            <div class="bg-white rounded-xl shadow-2xl overflow-x-auto">
                <table class="min-w-full performance-table">
                    <thead>
                        <tr>
                            <th class="w-1/12 rounded-tl-xl">No.</th>
                            <th class="w-5/12">Indikator Kinerja Utama</th>
                            <th class="w-2/12 text-center">Target (A)</th>
                            <th class="w-2/12 text-center">Realisasi (B)</th>
                            <th class="w-2/12 text-center rounded-tr-xl">Capaian (B/A)</th>
                        </tr>
                    </thead>
                    <tbody id="performance-body">
                        <!-- Table rows will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
            
       

<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4">

        <div class="text-center mb-10">
            <h2 class="text-4xl font-extrabold text-slate-800">
                <i class="fa-solid fa-file-pdf text-cyan-600 mr-2"></i>
                Arsip Dokumen LKJIP
            </h2>
            <p class="text-slate-500 mt-3 max-w-2xl mx-auto">
                Berikut adalah daftar laporan kinerja resmi yang telah dipublikasikan.
                Dokumen dapat diunduh dalam format PDF.
            </p>
        </div>

        @if($lkjip->isEmpty())
            <div class="bg-white p-6 rounded-xl shadow text-center border-l-4 border-red-400">
                <p class="text-slate-500 font-medium">Belum ada dokumen LKJIP tersedia.</p>
            </div>
        @else

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @foreach($lkjip as $row)
            <div class="bg-white p-5 rounded-xl shadow-md border-l-4 border-cyan-500 hover:shadow-lg transition">

                <div class="flex items-start justify-between">
                    <h3 class="text-lg font-bold text-slate-800 leading-tight">
                        {{ $row->judul }}
                    </h3>

                    <span class="text-sm px-2 py-1 rounded bg-cyan-100 text-cyan-700 font-semibold">
                        {{ $row->tahun }}
                    </span>
                </div>

                <p class="mt-3 text-sm text-slate-500">
                    Dokumen laporan kinerja untuk tahun {{ $row->tahun }}.
                </p>

                <a href="{{ asset('lkjip_files/' . $row->file) }}" target="_blank">
                    <button class="mt-4 inline-flex items-center px-4 py-2 bg-cyan-600 text-white text-sm font-medium rounded hover:bg-cyan-700 transition">
                    <i class="fa-solid fa-download mr-2"></i> Download PDF
                </a>

            </div>
            @endforeach
        </div>

        @endif

    </div>

 

    <script>
        // Data Mockup LKJIP untuk demonstrasi
        const performanceMetrics = [
            {
                no: 1,
                indicator: "Tingkat Akuntabilitas Kinerja (Nilai SAKIP)",
                target: 80.0,
                realization: 83.5,
                unit: "%",
            },
            {
                no: 2,
                indicator: "Persentase Penyerapan Anggaran Pelaksanaan Program",
                target: 95.0,
                realization: 98.2,
                unit: "%",
            },
            {
                no: 3,
                indicator: "Indeks Kepuasan Masyarakat terhadap Pelayanan",
                target: 4.0,
                realization: 4.35,
                unit: "/5",
            },
            {
                no: 4,
                indicator: "Efektivitas Pelaksanaan Program Pembinaan Warga Binaan",
                target: 85,
                realization: 91,
                unit: "%",
            }
        ];

        const summaryMetrics = [
            {
                title: "Nilai SAKIP (A)",
                value: "83.50",
                unit: "Predikat B",
                icon: "fa-trophy",
                color: "green",
                description: "Peningkatan 2.5 poin dari tahun sebelumnya."
            },
            {
                title: "Realisasi Anggaran",
                value: "98.2",
                unit: "%",
                icon: "fa-money-bill-wave",
                color: "blue",
                description: "Penyerapan yang sangat efisien dan optimal."
            },
            {
                title: "Capaian Output Program",
                value: "100",
                unit: "%",
                icon: "fa-check-circle",
                color: "cyan",
                description: "Seluruh target output kegiatan tercapai."
            },
            {
                title: "Indeks Kepuasan Masyarakat",
                value: "4.35",
                unit: "/5",
                icon: "fa-users",
                color: "yellow",
                description: "Kategori Sangat Baik (Predikat A)."
            }
        ];

        // Function to calculate achievement and render the status tag
        const getAchievementStatus = (target, realization) => {
            const achievement = (realization / target) * 100;
            const formattedAchievement = achievement.toFixed(2) + '%';
            
            let colorClass, statusText;
            if (achievement >= 100) {
                colorClass = 'bg-green-100 text-green-700 font-bold';
                statusText = 'Melebihi Target';
            } else if (achievement >= 90) {
                colorClass = 'bg-blue-100 text-blue-700 font-bold';
                statusText = 'Sesuai Target';
            } else {
                colorClass = 'bg-yellow-100 text-yellow-700 font-bold';
                statusText = 'Perlu Peningkatan';
            }

            return {
                value: formattedAchievement,
                tag: `<span class="inline-block px-3 py-1 text-xs rounded-full ${colorClass}">${statusText}</span>`
            };
        };

        // Function to render Summary Cards
        const renderSummaryCards = () => {
            const container = document.getElementById('metric-cards');
            const colorMap = {
                green: 'border-green-500',
                blue: 'border-blue-500',
                cyan: 'border-cyan-500',
                yellow: 'border-yellow-500',
            };

            summaryMetrics.forEach((metric, index) => {
                const card = document.createElement('div');
                card.className = `metric-card bg-white p-6 ${colorMap[metric.color]}`;
                card.style.animationDelay = `${index * 0.1}s`;

                card.innerHTML = `
                    <div class="flex items-center justify-between">
                        <div class="text-2xl font-semibold text-gray-600">${metric.title}</div>
                        <i class="fa-solid ${metric.icon} text-3xl text-${metric.color}-500 opacity-70"></i>
                    </div>
                    <div class="mt-2">
                        <span class="text-4xl font-extrabold text-gray-900">${metric.value}</span>
                        <span class="text-xl font-medium text-gray-500 ml-1">${metric.unit}</span>
                    </div>
                    <p class="text-xs text-gray-400 mt-2">${metric.description}</p>
                `;
                container.appendChild(card);
            });
        };

        // Function to render Performance Table
        const renderPerformanceTable = () => {
            const tbody = document.getElementById('performance-body');
            tbody.innerHTML = '';

            performanceMetrics.forEach(item => {
                const { value, tag } = getAchievementStatus(item.target, item.realization);
                
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="font-semibold text-gray-600">${item.no}</td>
                    <td>
                        <div class="font-medium text-gray-800">${item.indicator}</div>
                        <div class="mt-1">${tag}</div>
                    </td>
                    <td class="text-center font-mono text-lg text-blue-600">${item.target}${item.unit}</td>
                    <td class="text-center font-mono text-lg text-gray-800">${item.realization}${item.unit}</td>
                    <td class="text-center font-bold text-lg text-gray-700">${value}</td>
                `;
                tbody.appendChild(row);
            });
        };

        // Initialize rendering when the document is ready
        document.addEventListener('DOMContentLoaded', () => {
            renderSummaryCards();
            renderPerformanceTable();
        });
    </script>
</body>
</html>