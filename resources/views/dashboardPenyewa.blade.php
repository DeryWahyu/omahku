<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Omahku - Reservasi Kos Jadi Mudah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <nav class="bg-white sticky w-full z-20 top-0 start-0 border-b border-gray-200 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Omahku Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-500">Omahku</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @auth
                    <!-- Jika user sudah login -->
                    <div class="relative">
                        <button id="dropdownUserButton" data-dropdown-toggle="dropdownUser" type="button"
                            class="text-white gap-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                            {{ Auth::user()->name }}
                            <i class="ri-arrow-drop-down-line text-base"></i>
                        </button>

                        <div id="dropdownUser"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 mt-2">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownUserButton">
                                <li>
                                    <a href=""
                                        class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-500">Invoice</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 hover:bg-gray-100 hover:text-red-500">
                                            Keluar
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!-- Jika user belum login -->
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" type="button"
                        class="text-white gap-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Masuk Sebagai
                        <i class="ri-arrow-drop-down-line text-base"></i>
                    </button>

                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 mt-2">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/login" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-500">Pencari
                                    Kos</a>
                            </li>
                            <li>
                                <a href="/admin/login" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-500">Pemilik
                                    Kos</a>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
