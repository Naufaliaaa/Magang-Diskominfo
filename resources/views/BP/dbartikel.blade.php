<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Artikel</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <x-sidebar></x-sidebar>

        <main class="flex-1 p-6 relative">
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Manajemen Artikel</h1>

            <!-- Grid Artikel -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Artikel 1 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition relative">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Hari Pahlawan 2024</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 10 November 2024</p>
                    <p class="text-gray-700 mb-5">Artikel ini membahas semangat perjuangan pahlawan dalam konteks pendidikan modern.</p>
                    <div class="flex justify-end space-x-2 mt-4">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-artikel1')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>

                <!-- Artikel 2 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition relative">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Peringatan Hari Kartini</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 21 April 2024</p>
                    <p class="text-gray-700 mb-5">Kegiatan siswa dalam memperingati Hari Kartini dengan mengenakan pakaian adat dan lomba puisi.</p>
                    <div class="flex justify-end space-x-2 mt-4">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-artikel2')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>

                <!-- Artikel 3 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition relative">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Pelatihan Digital untuk Guru</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 3 Maret 2024</p>
                    <p class="text-gray-700 mb-5">Guru-guru mengikuti pelatihan teknologi pembelajaran menggunakan aplikasi dan platform digital.</p>
                    <div class="flex justify-end space-x-2 mt-4">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-artikel3')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>

                <!-- Artikel 4 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition relative">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Kegiatan Bakti Sosial</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 15 Februari 2024</p>
                    <p class="text-gray-700 mb-5">Siswa dan guru mengadakan kegiatan bakti sosial dengan membagikan sembako kepada warga sekitar sekolah.</p>
                    <div class="flex justify-end space-x-2 mt-4">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-artikel4')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>

                <!-- Artikel 5 -->
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition relative">
                    <h2 class="text-lg font-semibold text-blue-700 mb-2">Lomba Kebersihan Kelas</h2>
                    <p class="text-gray-600 text-sm mb-3">Dipublikasikan: 28 Januari 2024</p>
                    <p class="text-gray-700 mb-5">Lomba kebersihan kelas diadakan untuk meningkatkan kesadaran siswa akan pentingnya menjaga lingkungan sekolah.</p>
                    <div class="flex justify-end space-x-2 mt-4">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-edit"></i><span>Edit</span>
                        </a>
                        <button onclick="showModal('modal-artikel5')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded shadow flex items-center space-x-1">
                            <i class="fas fa-trash-alt"></i><span>Hapus</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tombol Tambah Artikel -->
            <a href="{{ route('tambah-artikel') }}"
               class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
               title="Tambah Artikel">
                <i class="fas fa-plus text-xl"></i>
            </a>
        </main>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="modal-artikel1" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus artikel ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('modal-artikel1')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
                <form action="#" method="POST">
                    <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-artikel2" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus artikel ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('modal-artikel2')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
                <form action="#" method="POST">
                    <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-artikel3" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus artikel ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('modal-artikel3')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
                <form action="#" method="POST">
                    <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-artikel4" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus artikel ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('modal-artikel4')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
                <form action="#" method="POST">
                    <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-artikel5" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus artikel ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('modal-artikel5')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
                <form action="#" method="POST">
                    <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }
        }

        function hideModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }
        }
    </script>
</body>
</html>