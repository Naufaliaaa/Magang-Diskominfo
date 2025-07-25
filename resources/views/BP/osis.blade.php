<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard OSIS</title>
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
            <h1 class="text-3xl font-bold text-blue-800">Manajemen OSIS</h1>
            <select class="border border-gray-300 rounded px-4 py-2 text-sm focus:outline-none">
                <option>Angkatan 2024/2025</option>
                <option>Angkatan 2023/2024</option>
                <option>Angkatan 2022/2023</option>
            </select>
        </div>

        <!-- Grid OSIS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center min-h-[70vh] pb-16">
            <!-- OSIS Kiri -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Ketua OSIS" class="w-40 h-40 object-cover rounded-full mb-4">
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-gray-900">Umar Abdurrahman</h2>
                        <p class="text-blue-700 font-semibold">Ketua OSIS</p>
                        <p class="text-sm text-gray-600 mb-4">Periode 2024 - 2025</p>
                        <div class="text-sm text-gray-800 text-left mb-4">
                            <p class="font-semibold">Biodata:</p>
                            <ul class="list-disc pl-5 mb-2">
                                <li>Kelas: IX-A</li>
                                <li>Hobi: Basket & Menulis</li>
                                <li>Moto: Hidup tiada arti jika tanpa shalat</li>
                            </ul>
                            <p class="font-semibold">Visi & Misi:</p>
                            <p><strong>Visi:</strong> Menjadikan OSIS sebagai wadah kreativitas, solidaritas, dan kepemimpinan siswa.</p>
                            <p><strong>Misi:</strong> Mengadakan kegiatan positif, meningkatkan semangat kolaborasi, dan menciptakan lingkungan sekolah yang inklusif.</p>
                        </div>
                        <div class="flex justify-center gap-2">
                            <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                                <i class="fas fa-edit"></i><span>Edit</span>
                            </a>
                            <button onclick="showModal('hapusKetua')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                                <i class="fas fa-trash-alt"></i><span>Hapus</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OSIS Kanan -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Wakil Ketua OSIS" class="w-40 h-40 object-cover rounded-full mb-4">
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-gray-900">Alya Nurhaliza</h2>
                        <p class="text-blue-700 font-semibold">Wakil Ketua OSIS</p>
                        <p class="text-sm text-gray-600 mb-4">Periode 2024 - 2025</p>
                        <div class="text-sm text-gray-800 text-left mb-4">
                            <p class="font-semibold">Biodata:</p>
                            <ul class="list-disc pl-5 mb-2">
                                <li>Kelas: IX-C</li>
                                <li>Hobi: Membaca & Public Speaking</li>
                                <li>Moto: Hidup Seperti Larry</li>
                            </ul>
                            <p class="font-semibold">Visi & Misi:</p>
                            <p><strong>Visi:</strong> Menjadi pemimpin muda yang mampu menginspirasi dan menyatukan siswa.</p>
                            <p><strong>Misi:</strong> Menjembatani aspirasi siswa, mendukung program OSIS, dan aktif dalam kegiatan sosial sekolah.</p>
                        </div>
                        <div class="flex justify-center gap-2">
                            <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                                <i class="fas fa-edit"></i><span>Edit</span>
                            </a>
                            <button onclick="showModal('hapusWakil')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                                <i class="fas fa-trash-alt"></i><span>Hapus</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Tambah (+) -->
        <a href="{{ route('tambah-osis') }}"
           class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
           title="Tambah Artikel">
            <i class="fas fa-plus text-xl"></i>
        </a>
    </main>
</div>

<!-- Modal Konfirmasi -->
<div id="hapusKetua" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
        <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus data Ketua OSIS?</h2>
        <div class="flex justify-center gap-4">
            <button onclick="hideModal('hapusKetua')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
            <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
        </div>
    </div>
</div>

<div id="hapusWakil" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
        <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus data Wakil Ketua OSIS?</h2>
        <div class="flex justify-center gap-4">
            <button onclick="hideModal('hapusWakil')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
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
