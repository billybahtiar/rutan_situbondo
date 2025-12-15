@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Produk & Program Kemandirian WBP Rutan Situbondo</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Konfigurasi Font dan Warna Kustom -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8; /* Latar belakang lebih terang */
        }
        /* Definisikan warna tema: Biru Navy (Primary) dan Oranye (Accent) */
        .primary-color { color: #1e3a8a; } /* Dark Blue (Navy) */
        .primary-bg { background-color: #1e3a8a; }
        .accent-color { color: #f97316; } /* Bright Orange */
        .accent-bg { background-color: #f97316; }
        
        /* Gaya Kustom untuk Kartu Produk (Desain Bersih & Terpadu) */
        .product-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            /* Border kecil di atas sebagai aksen */
            border-top: 4px solid #f97316; /* Aksen Oranye di atas */
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        }
        .product-card:hover {
            transform: translateY(-5px); /* Efek melayang halus */
            box-shadow: 0 20px 25px -5px rgba(30, 58, 138, 0.15), 0 8px 10px -6px rgba(30, 58, 138, 0.1);
            border-top-color: #1e3a8a; /* Ubah warna aksen saat hover */
        }

        /* Gaya Kustom untuk Tombol Tab */
        .tab-button {
            border: 2px solid transparent;
            min-width: 150px;
            text-align: center;
        }
        .tab-button.active-tab {
            border-color: #f97316;
            background-color: #1e3a8a;
            color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }
        .tab-button.inactive-tab {
            background-color: #e5e7eb;
            color: #4b5563;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased">

   

    <!-- Bagian Utama: Hero Section -->
    <main class="flex-grow">
        <div class="primary-bg text-white py-20 sm:py-24 lg:py-32 shadow-2xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <i data-lucide="handshake" class="w-16 h-16 mx-auto mb-4 accent-color"></i>
                <h1 class="text-5xl sm:text-6xl font-extrabold leading-tight tracking-tight drop-shadow-lg">
                    Galeri Pembinaan & Karya Rutan Situbondo
                </h1>
                <p class="mt-4 text-xl text-gray-200 max-w-4xl mx-auto">
                    Dukungan Anda pada setiap produk dan layanan adalah wujud nyata apresiasi bagi semangat kemandirian Warga Binaan Pemasyarakatan Rutan Situbondo.
                </p>
            </div>
        </div>

        <!-- Deskripsi Program Kemandirian -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 class="text-4xl font-extrabold text-center mb-10 primary-color">
                Visi Program Kemandirian
            </h2>
            <div class="bg-white p-8 md:p-12 rounded-2xl shadow-2xl border-t-4 border-orange-500">
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Program Kemandirian Rumah Tahanan Negara Kelas IIB Situbondo memberikan bekal keterampilan vokasional yang mendalam dan terukur. Tujuannya adalah memastikan WBP memiliki modal keahlian, siap kembali ke masyarakat sebagai individu yang produktif, mandiri, dan berdaya saing. Kami fokus pada kualitas produk dan layanan yang kompetitif.
                </p>
                <div class="grid md:grid-cols-3 gap-8 text-center">
                    <div class="p-4 bg-blue-50 rounded-xl shadow-inner">
                        <i data-lucide="award" class="w-8 h-8 mx-auto primary-color mb-3"></i>
                        <p class="font-bold text-gray-800">Kualitas Berstandar</p>
                        <p class="text-sm text-gray-600">Pelatihan dan produksi dengan standar kualitas pasar.</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded-xl shadow-inner">
                        <i data-lucide="hammer" class="w-8 h-8 mx-auto primary-color mb-3"></i>
                        <p class="font-bold text-gray-800">Keterampilan Nyata</p>
                        <p class="text-sm text-gray-600">Penguasaan skill teknis (Kerajinan, Kuliner, Jasa).</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded-xl shadow-inner">
                        <i data-lucide="briefcase" class="w-8 h-8 mx-auto primary-color mb-3"></i>
                        <p class="font-bold text-gray-800">Peluang Kerja</p>
                        <p class="text-sm text-gray-600">Menciptakan bekal kemandirian ekonomi pasca-pemasyarakatan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Konten: Galeri Produk & Layanan (Menggunakan Tabs) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Navigasi Tab -->
            <div class="flex justify-center space-x-4 mb-12">
                <button id="tab-barang" data-target="barang" class="tab-button px-6 py-3 text-lg font-semibold rounded-full transition-all duration-300 active-tab">
                    <i data-lucide="package" class="w-5 h-5 mr-2"></i>
                    Produk Barang (Beli)
                </button>
                <button id="tab-jasa" data-target="jasa" class="tab-button px-6 py-3 text-lg font-semibold rounded-full transition-all duration-300 inactive-tab">
                    <i data-lucide="hand-metal" class="w-5 h-5 mr-2"></i>
                    Layanan Jasa (Pesan)
                </button>
            </div>

            <!-- GRID DIBATASI MAKSIMAL 3 KOLOM -->
            <div id="productGallery" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Kartu Produk/Layanan akan di-render di sini oleh JavaScript -->
            </div>
        </div>

        <!-- Bagian Call to Action -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 pt-8 text-center">
            <div class="bg-white border-4 border-dashed border-orange-300 p-8 rounded-2xl shadow-xl">
                <h3 class="text-3xl font-bold primary-color mb-3">Mari Dukung Karya WBP</h3>
                <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
                    Setiap pembelian dan pemesanan layanan Anda berkontribusi langsung pada program pembinaan dan perubahan diri Warga Binaan Pemasyarakatan.
                </p>
                <a href="https://wa.me/6281234567890?text=Halo%20Rutan%20Situbondo,%20saya%20tertarik%20dengan%20Program%20Kemandirian%20dan%20ingin%20bertanya%20mengenai%20pemesanan%20produk%20atau%20layanan%20secara%20umum." 
                   target="_blank"
                   class="inline-flex items-center px-8 py-3 bg-green-600 text-white font-extrabold text-lg rounded-full shadow-2xl hover:bg-green-700 transition duration-300 transform hover:scale-105">
                    <i data-lucide="message-square" class="w-5 h-5 mr-3"></i>
                    Chat WhatsApp Resmi
                </a>
            </div>
        </div>
    </main>


    <!-- Script JavaScript untuk Logika Aplikasi dan Tab -->
    <script>
        // Data Produk Barang
        const productsBarang = [
            {
                id: 1,
                name: "Miniatur Kapal Pinisi",
                price: 350000,
                description: "Kerajinan kayu premium, detail tinggi, cocok untuk hiasan meja kerja atau hadiah koleksi.",
                imageUrl: "https://placehold.co/400x250/1e3a8a/f97316?text=Kerajinan+Tangan",
                category: "Kerajinan Tangan",
                type: "barang",
                icon: "sparkles"
            },
            {
                id: 2,
                name: "Roti Tawar Gandum",
                price: 25000,
                description: "Produk andalan Rusibon Bakery. Roti tawar sehat, lembut, dari gandum utuh. Dipanggang harian.",
                imageUrl: "https://placehold.co/400x250/f97316/1e3a8a?text=Rusibon+Bakery",
                category: "Rusibon Bakery",
                type: "barang",
                icon: "cake"
            },
            {
                id: 6,
                name: "Kue Kering Khas Lebaran",
                price: 65000,
                description: "Berbagai pilihan kue kering premium (Nastar, Kastengel, Putri Salju) yang dibuat dengan resep spesial Rusibon Bakery.",
                imageUrl: "https://placehold.co/400x250/1e3a8a/f97316?text=Kue+Kering+Spesial",
                category: "Rusibon Bakery",
                type: "barang",
                icon: "cookie"
            },
            {
                id: 3,
                name: "Fresh Mint Tea (Pack)",
                price: 35000,
                description: "Daun mint segar pilihan yang dikeringkan dan dikemas. Ideal untuk teh relaksasi dan kesehatan.",
                imageUrl: "https://placehold.co/400x250/1e3a8a/f97316?text=Fresh+Mint+Tea",
                category: "Pertanian",
                type: "barang",
                icon: "leaf"
            },
            {
                id: 4,
                name: "Sayuran Hidroponik",
                price: 15000,
                description: "Sayuran segar bebas pestisida (Sawi/Selada), panen harian dengan sistem tanam hidroponik.",
                imageUrl: "https://placehold.co/400x250/f97316/1e3a8a?text=Sayuran+Hidroponik",
                category: "Pertanian",
                type: "barang",
                icon: "carrot"
            },
            {
                id: 5,
                name: "Ikan Lele Segar",
                price: 28000,
                description: "Ikan lele hasil budidaya Rutan, kualitas terjamin, bebas bau tanah, siap diolah (per kg).",
                imageUrl: "https://placehold.co/400x250/1e3a8a/f97316?text=Budidaya+Lele",
                category: "Perikanan",
                type: "barang",
                icon: "fish"
            }
        ];

        // Data Program Layanan Jasa
        const productsJasa = [
            {
                id: 101,
                name: "Jasa Cuci Mobil (Car Wash)",
                price: 50000,
                description: "Layanan cuci mobil lengkap (eksterior & interior), dikerjakan oleh WBP terlatih di lokasi Rutan.",
                imageUrl: "https://placehold.co/400x250/1e3a8a/f97316?text=Layanan+Car+Wash",
                category: "Jasa Otomotif",
                type: "jasa",
                icon: "car-wash"
            },
            {
                id: 102,
                name: "Kue Custom (Rusibon Bakery)",
                price: 150000,
                description: "Pemesanan kue spesial untuk ulang tahun, pernikahan, atau acara lainnya. Kualitas rasa premium.",
                imageUrl: "https://placehold.co/400x250/f97316/1e3a8a?text=Kue+Custom",
                category: "Rusibon Bakery",
                type: "jasa",
                icon: "cookie"
            },
            {
                id: 103,
                name: "Jasa Perawatan Kebun/Taman",
                price: 100000,
                description: "Layanan penataan, pemangkasan, dan pemeliharaan tanaman serta kebun untuk rumah atau kantor.",
                imageUrl: "https://placehold.co/400x250/1e3a8a/f97316?text=Perawatan+Taman",
                category: "Layanan Pertanian",
                type: "jasa",
                icon: "shovel"
            }
        ];

        let currentTab = 'barang'; // Tab default
        const whatsappNumber = "6281234567890"; // Ganti dengan nomor WhatsApp Rutan Situbondo

        const formatRupiah = (number) => {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(number);
        };

        // Fungsi untuk membuat URL WhatsApp dengan pesan terisi
        function createWhatsappLink(productName, productPrice, productType) {
            const priceText = formatRupiah(productPrice);
            let messageTemplate = "";

            if (productType === 'barang') {
                messageTemplate = `Halo Tim Kemandirian Rutan Situbondo. 👋\n\nSaya tertarik untuk *membeli* produk:\n*${productName}* (${priceText}).\n\nMohon informasikan ketersediaan barang dan detail pemesanan. Terima kasih!`;
            } else if (productType === 'jasa') {
                messageTemplate = `Halo Tim Kemandirian Rutan Situbondo. 👋\n\nSaya ingin *memesan* layanan:\n*${productName}* (Mulai dari ${priceText}).\n\nMohon informasikan prosedur pemesanan dan detail waktu/lokasi layanan. Terima kasih!`;
            }
            
            // URL encoding untuk pesan WhatsApp
            return `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(messageTemplate)}`;
        }

        // Fungsi utama untuk merender kartu produk
        function renderProducts(type) {
            const gallery = document.getElementById('productGallery');
            gallery.innerHTML = ''; // Bersihkan galeri
            
            const selectedProducts = type === 'barang' ? productsBarang : productsJasa;

            selectedProducts.forEach(product => {
                const whatsappLink = createWhatsappLink(product.name, product.price, product.type);
                const buttonText = product.type === 'barang' ? 'Beli Sekarang' : 'Pesan Layanan';
                const priceLabel = product.type === 'barang' ? formatRupiah(product.price) : `Mulai ${formatRupiah(product.price)}`;

                // Kartu produk dengan desain terpadu (Unified Card Design)
                const card = document.createElement('div');
                card.className = 'bg-white product-card';
                card.innerHTML = `
                    <!-- Bagian Gambar -->
                    <div class="h-48 overflow-hidden relative border-b border-gray-100">
                        <img src="${product.imageUrl}" alt="${product.name}" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <!-- Category Badge di Sudut -->
                        <div class="absolute top-0 right-0 primary-bg text-white text-xs font-semibold px-4 py-2 rounded-bl-xl flex items-center shadow-lg">
                            <i data-lucide="${product.icon}" class="w-4 h-4 mr-1 accent-color"></i>
                            ${product.category}
                        </div>
                    </div>
                    
                    <!-- Bagian Konten & Aksi -->
                    <div class="p-6">
                        <h3 class="mt-1 text-xl font-extrabold primary-color h-14 overflow-hidden" title="${product.name}">${product.name}</h3>
                        <p class="mt-2 text-gray-600 text-sm h-10 overflow-hidden">${product.description}</p>
                        
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                            <!-- Harga -->
                            <div>
                                <span class="text-xs font-semibold text-gray-500 block">Harga:</span>
                                <span class="text-2xl font-extrabold accent-color">${priceLabel}</span>
                            </div>

                            <!-- Tombol Aksi -->
                            <a href="${whatsappLink}" target="_blank" class="flex items-center justify-center px-4 py-2 bg-green-500 text-white font-bold rounded-full text-sm hover:bg-green-600 transition duration-300 shadow-md transform hover:scale-[1.05]">
                                <i data-lucide="whatsapp" class="w-4 h-4 mr-2"></i>
                                ${buttonText}
                            </a>
                        </div>
                    </div>
                `;
                gallery.appendChild(card);
            });
            // Re-render ikon Lucide setelah elemen baru dimasukkan
            lucide.createIcons(); 
        }

        // Fungsi untuk menangani pergantian tab
        function setupTabs() {
            const tabButtons = document.querySelectorAll('.tab-button');

            const setActiveTab = (targetType) => {
                tabButtons.forEach(button => {
                    if (button.dataset.target === targetType) {
                        button.classList.add('active-tab');
                        button.classList.remove('inactive-tab');
                    } else {
                        button.classList.add('inactive-tab');
                        button.classList.remove('active-tab');
                    }
                });
                currentTab = targetType;
                renderProducts(currentTab);
            }

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    setActiveTab(button.dataset.target);
                });
            });

            // Set tab awal (default 'barang')
            setActiveTab('barang'); 
        }

        // Inisialisasi
        document.addEventListener('DOMContentLoaded', () => {
            setupTabs(); // Menginisialisasi tabs dan merender produk pertama kali
            lucide.createIcons();
        });

    </script>
</body>
</html>

@include('scripts')
@include('footer')