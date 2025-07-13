<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah OSIS</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
    <x-sidebar></x-sidebar>

    <main class="flex-1 p-6">
        <h1 class="text-2xl font-bold text-blue-800 mb-6">Tambah Data OSIS</h1>

        <form id="formOsis" onsubmit="event.preventDefault(); konfirmasiRilis();" enctype="multipart/form-data">
            <!-- Ketua OSIS -->
            <div class="mb-8 bg-white p-4 rounded-lg shadow">
                <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('ketuaContent', 'iconKetua')">
                    <h2 class="text-lg font-semibold text-blue-700">Ketua OSIS</h2>
                    <i id="iconKetua" class="fas fa-chevron-down transition-transform duration-300"></i>
                </div>
                <div id="ketuaContent" class="mt-4 space-y-4">
                    <div>
                        <label class="block text-gray-700 mb-1">Nama</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Nama Ketua" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Kelas</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Kelas Ketua" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Hobi</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Hobi Ketua" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Moto</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Moto Ketua" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Visi</label>
                        <textarea class="w-full border px-4 py-2 rounded" rows="3" placeholder="Visi Ketua OSIS" required></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Misi</label>
                        <textarea class="w-full border px-4 py-2 rounded" rows="3" placeholder="Misi Ketua OSIS" required></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Foto Ketua</label>
                        <input type="file" accept="image/*" class="w-full px-4 py-2 border rounded bg-white" required>
                    </div>
                </div>
            </div>

            <!-- Wakil Ketua OSIS -->
            <div class="mb-8 bg-white p-4 rounded-lg shadow">
                <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('wakilContent', 'iconWakil')">
                    <h2 class="text-lg font-semibold text-blue-700">Wakil Ketua OSIS</h2>
                    <i id="iconWakil" class="fas fa-chevron-down transition-transform duration-300"></i>
                </div>
                <div id="wakilContent" class="mt-4 space-y-4">
                    <div>
                        <label class="block text-gray-700 mb-1">Nama</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Nama Wakil" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Kelas</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Kelas Wakil" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Hobi</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Hobi Wakil" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Moto</label>
                        <input type="text" class="w-full border px-4 py-2 rounded" placeholder="Moto Wakil" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Visi</label>
                        <textarea class="w-full border px-4 py-2 rounded" rows="3" placeholder="Visi Wakil OSIS" required></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Misi</label>
                        <textarea class="w-full border px-4 py-2 rounded" rows="3" placeholder="Misi Wakil OSIS" required></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Foto Wakil</label>
                        <input type="file" accept="image/*" class="w-full px-4 py-2 border rounded bg-white" required>
                    </div>
                </div>
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-4">
                <a href="{{ url('/osis') }}"
                   class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">Batal</a>
                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Tambahkan</button>
            </div>
        </form>
    </main>
</div>

<!-- Modal Konfirmasi -->
<div id="konfirmasiModal"
     class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg p-6 shadow-lg w-full max-w-sm">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Apakah anda yakin menyimpan data OSIS ini?</h2>
        <div class="flex justify-end space-x-4">
            <button onclick="tutupModal()"
                    class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Tidak</button>
            <a href="{{ url('/osis') }}"
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

    function toggleSection(contentId, iconId) {
        const content = document.getElementById(contentId);
        const icon = document.getElementById(iconId);

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.classList.remove('fa-chevron-right');
            icon.classList.add('fa-chevron-down');
        } else {
            content.classList.add('hidden');
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-right');
        }
    }
</script>
</body>
</html>
