<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kos - RumahKita</title>
    <link rel="stylesheet" href="/css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->


    <nav
        class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-500">Omahku</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{}}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none cursor-pointer font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Mulai Sekarang</a>
            </div>

        </div>
    </nav>





    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h1>Selamat Datang Sistem Pencarian Kos</h1>
                <h2>Temukan Kos Impian Anda</h2>
                <p>Platform terbaik untuk mencari kos dengan fasilitas lengkap, lokasi strategis yang dekat dengan pusat
                    aktivitas, serta harga terjangkau sesuai dengan kebutuhan mahasiswa atau pekerja.</p>
                <a href="#features" class="cta-btn" data-aos="fade-right" data-aos-delay="100"
                    data-aos-duration="1000">Apa Yang Ditawarkan?</a>
                <a href="/login" class="cta-btn" data-aos="fade-left" data-aos-delay="100"
                    data-aos-duration="1000">Coba Sekarang</a>
            </div>
            <div class="hero-image" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                <img src="/images/forSaleIcon.png" alt="Ilustrasi Kos" />
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2>Apa yang Kami Tawarkan?</h2>
            <div class="features-grid" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/option.png" alt="Beragam Pilihan">
                    <h3>Beragam Pilihan</h3>
                    <p>Temukan kos dengan berbagai fasilitas sesuai kebutuhan Anda.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Search.png" alt="Beragam Pilihan">
                    <h3>Fitur Pencarian yang Mudah</h3>
                    <p>Filter berdasarkan lokasi, harga, fasilitas, tipe kos.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Contact.png" alt="Beragam Pilihan">
                    <h3>Informasi yang Detail</h3>
                    <p>Foto kos yang lengkap dan Deskripsi fasilitas (kamar mandi dalam, AC, Wi-Fi, dapur).</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Security.png" alt="Beragam Pilihan">
                    <h3>Keamanan dan Privasi</h3>
                    <p>Verifikasi identitas penyewa dan pemilik kos.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Service.png" alt="Beragam Pilihan">
                    <h3>Layanan Pelanggan 24/7</h3>
                    <p>Dukungan melalui fitur kontak dapat diakses dengan mudah dan gampang.</p>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
