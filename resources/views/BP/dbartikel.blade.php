<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Artikel</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- TailwindCSS CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <x-sidebar></x-sidebar>

        <main class="flex-1 p-6 relative">
            <!-- Header -->
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Manajemen Artikel</h1>

            <!-- Artikel History List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Hari Pahlawan 2024</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 10 November 2024</p>
                    <p class="text-gray-700">Artikel ini membahas semangat perjuangan pahlawan dalam konteks pendidikan modern.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Kegiatan MPLS</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 20 Juli 2024</p>
                    <p class="text-gray-700">Masa Pengenalan Lingkungan Sekolah berjalan lancar dan penuh semangat siswa baru.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Upacara Hari Senin</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 1 Juli 2024</p>
                    <p class="text-gray-700">Kedisiplinan siswa saat upacara merupakan bentuk implementasi nilai-nilai Pancasila.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Pelatihan Guru</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 15 Mei 2024</p>
                    <p class="text-gray-700">Guru-guru mengikuti pelatihan teknologi pembelajaran digital selama 3 hari.</p>
                </div>
            </div>

            <!-- Tombol Tambah (+) -->
           <a href="{{ route('tambah-artikel') }}"
             class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
             title="Tambah Artikel">
                <i class="fas fa-plus text-xl"></i>
            </a>

        </main>
    </div>
</body>
</html>
