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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-white sticky w-full z-20 top-0 start-0 border-b border-gray-200 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-500">Omahku</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg md:gap-3 text-sm px-5 py-2.5 text-center inline-flex items-center ">Masuk
                    Sebagai
                    <i class="ri-arrow-drop-down-line text-base"></i>
                </button>
            </div>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="/login"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pencari Kos</a>
                    </li>
                    <li>
                        <a href="admin/login"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pemilik Kos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class=" mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Selamat Datang di Sistem Reservasi Kos</h1>
                <p class=" mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                    payment stack.</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a>
            </div>
            <div class=" lg:mt-0 lg:col-span-5 lg:flex">
                <img src="images/hero_image.png" alt="mockup">
            </div>
        </div>
    </section>





    <!-- Hero Section -->
    {{-- <section class="hero">
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
    </section> --}}

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
