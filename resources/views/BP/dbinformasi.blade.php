<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Informasi</title>
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
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Manajemen Informasi</h1>

            <!-- Informasi History List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Pengumuman Libur Sekolah</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 15 Juni 2024</p>
                    <p class="text-gray-700">Sekolah akan diliburkan selama Hari Raya Idul Adha dan akan kembali aktif pada 20 Juni 2024.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Pendaftaran Ekstrakurikuler</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 5 Juli 2024</p>
                    <p class="text-gray-700">Seluruh siswa diwajibkan memilih minimal satu kegiatan ekstrakurikuler melalui form online sekolah.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Lomba Hari Kemerdekaan</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 1 Agustus 2024</p>
                    <p class="text-gray-700">Akan diadakan lomba per kelas untuk memperingati Hari Kemerdekaan RI ke-79, semua siswa wajib ikut.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Perubahan Jadwal Ujian</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 20 November 2024</p>
                    <p class="text-gray-700">Jadwal ujian semester ganjil diubah menjadi 25 November 2024 - 2 Desember 2024.</p>
                </div>
            </div>

            <!-- Tombol Tambah (+) -->
           <a href="{{ route('tambah-informasi') }}"
             class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
             title="Tambah Artikel">
                <i class="fas fa-plus text-xl"></i>
            </a>
    </div>
</body>
</html>
