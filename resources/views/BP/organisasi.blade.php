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
            <div class="flex flex-col justify-center items-center gap-4">
                <img src="{{ asset('img/struktur-organisasi.jpg') }}" alt="Struktur Organisasi"
                     class="w-full max-w-6xl rounded shadow-md object-contain">

                <!-- Tombol Edit & Hapus -->
                <div class="flex justify-center gap-3">
                    <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 text-sm rounded flex items-center space-x-1">
                        <i class="fas fa-edit"></i><span>Edit</span>
                    </a>
                    <button onclick="showModal('hapusStruktur')" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 text-sm rounded flex items-center space-x-1">
                        <i class="fas fa-trash-alt"></i><span>Hapus</span>
                    </button>
                </div>
            </div>

            <!-- Tombol Tambah (+) -->
            <a href="{{ route('tambah-organisasi') }}"
             class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
             title="Tambah Artikel">
                <i class="fas fa-plus text-xl"></i>
            </a>
        </main>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="hapusStruktur" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus struktur organisasi ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('hapusStruktur')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
                <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
            </div>
        </div>
    </div>

    <script>
        function showModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.getElementById(id).classList.add('flex');
        }
        function hideModal(id) {
            document.getElementById(id).classList.remove('flex');
            document.getElementById(id).classList.add('hidden');
        }
    </script>
</body>
</html>