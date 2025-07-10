<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <x-sidebar></x-sidebar>

        <main class="flex-1 p-6 relative">
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Manajemen Guru</h1>

            <!-- Guru Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Guru 1 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition flex items-center space-x-4">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Foto Guru" class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">Ibu Siti Rahmawati</h2>
                        <p class="text-gray-600 text-sm">Guru Matematika</p>
                        <p class="text-gray-500 text-sm">siti.rahma@smpn1cimaung.sch.id</p>
                    </div>
                </div>

                <!-- Guru 2 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition flex items-center space-x-4">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Foto Guru" class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">Bapak Agus Setiawan</h2>
                        <p class="text-gray-600 text-sm">Guru Bahasa Indonesia</p>
                        <p class="text-gray-500 text-sm">agus.setiawan@smpn1cimaung.sch.id</p>
                    </div>
                </div>

                <!-- Guru 3 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition flex items-center space-x-4">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Foto Guru" class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">Ibu Dewi Kartika</h2>
                        <p class="text-gray-600 text-sm">Guru IPA</p>
                        <p class="text-gray-500 text-sm">dewi.kartika@smpn1cimaung.sch.id</p>
                    </div>
                </div>

                <!-- Guru 4 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition flex items-center space-x-4">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Foto Guru" class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">Bapak Fajar Prasetyo</h2>
                        <p class="text-gray-600 text-sm">Guru Penjaskes</p>
                        <p class="text-gray-500 text-sm">fajar.prasetyo@smpn1cimaung.sch.id</p>
                    </div>
                </div>
            </div>

            <!-- Tombol Tambah (+) -->
            <a href="{{ url('/guru/tambah') }}"
               class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
               title="Tambah Guru">
                <i class="fas fa-plus text-xl"></i>
            </a>
        </main>
    </div>
</body>
</html>
