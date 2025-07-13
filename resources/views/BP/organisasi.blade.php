<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struktur Organisasi</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <x-sidebar></x-sidebar>

        <main class="flex-1 p-6 relative">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                <h1 class="text-3xl font-bold text-blue-800">Struktur Organisasi</h1>
                <select class="border border-gray-300 rounded px-4 py-2 text-sm focus:outline-none">
                    <option>2024/2025</option>
                    <option>2023/2024</option>
                    <option>2022/2023</option>
                </select>
            </div>

            <!-- Gambar Struktur -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/struktur-organisasi.jpg') }}" alt="Struktur Organisasi"
                     class="w-full max-w-6xl rounded shadow-md object-contain">
            </div>

             <!-- Tombol Tambah (+) -->
             <a href="{{ route('tambah-organisasi') }}"
             class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
             title="Tambah Artikel">
                <i class="fas fa-plus text-xl"></i>
            </a>
            </a>
        </main>
    </div>
</body>
</html>
