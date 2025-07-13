<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Informasi</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <x-sidebar></x-sidebar>

        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Tambah Informasi Baru</h1>

            <form id="formInformasi" onsubmit="event.preventDefault(); konfirmasiRilis();" enctype="multipart/form-data">
                <!-- Judul -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-semibold mb-2">Informasi Tentang</label>
                    <input type="text" name="judul" id="judul" required
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Isi -->
                <div class="mb-4">
                    <label for="isi" class="block text-gray-700 font-semibold mb-2">Isi Informasi</label>
                    <textarea name="isi" id="isi" rows="8" required
                              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Gambar -->
                <div class="mb-6">
                    <label for="gambar" class="block text-gray-700 font-semibold mb-2">Upload Gambar Informasi</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                </div>

                <!-- Tombol -->
                <div class="flex justify-end space-x-4">
                    <a href="{{ url('/dbinformasi') }}"
                       class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">Batal</a>
                    <button type="submit"
                            class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Tambahkan
                    </button>
                </div>
            </form>
        </main>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="konfirmasiModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 shadow-lg w-full max-w-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Apakah anda yakin merilis ini?</h2>
            <div class="flex justify-end space-x-4">
                <button onclick="tutupModal()"
                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Tidak</button>
                <a href="{{ url('/dbinformasi') }}"
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
