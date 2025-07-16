<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Informasi</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <x-sidebar></x-sidebar>

        <main class="flex-1 p-6 relative">
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Manajemen Informasi</h1>

            <!-- Informasi History List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Informasi 1 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Pengumuman Libur Sekolah</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 15 Juni 2024</p>
                    <p class="text-gray-700 mb-5">Sekolah akan diliburkan selama Hari Raya Idul Adha dan akan kembali aktif pada 20 Juni 2024.</p>
                    <div class="flex justify-end space-x-2">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-info1')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>

                <!-- Informasi 2 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Pendaftaran Ekstrakurikuler</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 5 Juli 2024</p>
                    <p class="text-gray-700 mb-5">Seluruh siswa diwajibkan memilih minimal satu kegiatan ekstrakurikuler melalui form online sekolah.</p>
                    <div class="flex justify-end space-x-2">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-info2')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>

                <!-- Informasi 3 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Lomba Hari Kemerdekaan</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 1 Agustus 2024</p>
                    <p class="text-gray-700 mb-5">Akan diadakan lomba per kelas untuk memperingati Hari Kemerdekaan RI ke-79, semua siswa wajib ikut.</p>
                    <div class="flex justify-end space-x-2">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-info3')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>

                <!-- Informasi 4 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Perubahan Jadwal Ujian</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 20 November 2024</p>
                    <p class="text-gray-700 mb-5">Jadwal ujian semester ganjil diubah menjadi 25 November 2024 - 2 Desember 2024.</p>
                    <div class="flex justify-end space-x-2">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-info4')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tombol Tambah -->
            <a href="{{ route('tambah-informasi') }}"
                class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
                title="Tambah Informasi">
                <i class="fas fa-plus text-xl"></i>
            </a>
        </main>
    </div>

    <!-- Modal Konfirmasi Hapus (Contoh) -->
    <div id="modal-info1" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus informasi ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('modal-info1')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
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
