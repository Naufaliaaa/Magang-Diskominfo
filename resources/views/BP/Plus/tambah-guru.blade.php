<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Guru</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <x-sidebar></x-sidebar>

        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Tambah Guru Baru</h1>

            <form id="formGuru" onsubmit="event.preventDefault(); konfirmasiRilis();" enctype="multipart/form-data">
                <!-- Nama Guru -->
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Guru</label>
                    <input type="text" name="nama" id="nama" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Mata Pelajaran -->
                <div class="mb-4">
                    <label for="mapel" class="block text-gray-700 font-semibold mb-2">Mata Pelajaran</label>
                    <input type="text" name="mapel" id="mapel" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Guru</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Foto Guru -->
                <div class="mb-6">
                    <label for="foto" class="block text-gray-700 font-semibold mb-2">Upload Foto Guru</label>
                    <input type="file" name="foto" id="foto" accept="image/*"
                        class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-4">
                    <a href="{{ url('/guru') }}"
                       class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">Batal</a>
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Tambahkan</button>
                </div>
            </form>
        </main>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="konfirmasiModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 shadow-lg w-full max-w-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Apakah anda yakin menambahkan guru ini?</h2>
            <div class="flex justify-end space-x-4">
                <button onclick="tutupModal()"
                    class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Tidak</button>
                <a href="{{ url('/guru') }}"
                   class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Ya</a>
            </div>
        </div>
    </div>

    <script>
        function konfirmasiRilis() {
            document.getElementById('konfirmasiModal').classList.remove('hidden');
        }

        function tutupModal() {
            document.getElementById('konfirmasiModal').classList.add('hidden');
        }
    </script>
</body>
</html>
