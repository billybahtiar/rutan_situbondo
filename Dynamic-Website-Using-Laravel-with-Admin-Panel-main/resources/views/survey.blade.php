@include('header')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survei Kepuasan Layanan - Google Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Poppins:wght@700;800;900&display=swap" rel="stylesheet">

    <style>
        /* Custom Styling for the Survey Page */
        body { font-family: 'Inter', sans-serif; background-color: #f0f4f8; }

        .survey-header {
            background-color: #0d9488; /* Teal Dark */
            background-image: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%); /* Teal Gradient */
            color: #ffffff;
            padding: 80px 0 60px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .survey-header h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .form-container {
            max-width: 900px;
            margin: 40px auto;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #ffffff;
            min-height: 800px; /* Memberikan tinggi minimum untuk tampilan */
        }
        
        .form-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            min-height: 800px; /* Pastikan iframe memiliki tinggi yang cukup */
        }

    </style>
</head>
<body>

    <!-- HEADER -->
    <header class="survey-header">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl mb-2">Survei Kepuasan Layanan</h1>
            <p class="text-lg text-teal-200">Dipersembahkan oleh Rutan Situbondo. (Menggunakan Google Forms)</p>
        </div>
    </header>

    <!-- PANDUAN PENGGUNA -->
    <section class="py-10">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded-lg shadow-md">
                <p class="text-sm font-semibold text-yellow-800">
                    <i class="fa-solid fa-info-circle mr-2"></i> PERHATIAN: Silakan isi formulir di bawah ini dengan lengkap.
                    Seluruh data Anda **dirahasiakan** dan digunakan untuk peningkatan kualitas pelayanan.
                </p>
            </div>
        </div>
    </section>

    <!-- GOOGLE FORM EMBED CONTAINER -->
    <main class="py-10">
        <div class="form-container">
            <!-- 
                ==========================================================
                *** GANTI URL INI DENGAN LINK EMBED GOOGLE FORM ANDA ***
                ========================================================== 
                
                Langkah:
                1. Buka Google Form Anda.
                2. Klik tombol "Kirim" (Send).
                3. Pilih tab "< > Embed HTML".
                4. Salin kode <iframe> dan ganti URL di bawah ini.
            -->
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdrw5rh_b8jxaPgQ93nERiW27EzGHOwPhPJnVBJXmqwM10Etg/viewform?embedded=true" width="640" height="4047" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>

@include('scripts')