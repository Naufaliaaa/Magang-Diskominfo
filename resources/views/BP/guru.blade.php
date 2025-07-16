<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Guru</title>
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
            <h1 class="text-2xl font-bold text-blue-800 mb-6">Manajemen Guru</h1>

            <!-- Guru Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Guru Items -->
                <!-- Gunakan data dummy -->
                @foreach ([
                    ['nama' => 'Ibu Siti Rahmawati', 'mapel' => 'Guru Matematika', 'email' => 'siti.rahma@smpn1cimaung.sch.id'],
                    ['nama' => 'Bapak Agus Setiawan', 'mapel' => 'Guru Bahasa Indonesia', 'email' => 'agus.setiawan@smpn1cimaung.sch.id'],
                    ['nama' => 'Ibu Dewi Kartika', 'mapel' => 'Guru IPA', 'email' => 'dewi.kartika@smpn1cimaung.sch.id'],
                    ['nama' => 'Bapak Fajar Prasetyo', 'mapel' => 'Guru Penjaskes', 'email' => 'fajar.prasetyo@smpn1cimaung.sch.id'],
                    ['nama' => 'Ibu Nurhayati', 'mapel' => 'Guru Agama Islam', 'email' => 'nurhayati@smpn1cimaung.sch.id'],
                ] as $index => $guru)
                    <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition flex items-start space-x-4 relative">
                        <img src="{{ asset('img/foto.jpg') }}" alt="Foto Guru" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-blue-700">{{ $guru['nama'] }}</h2>
                            <p class="text-gray-600 text-sm">{{ $guru['mapel'] }}</p>
                            <p class="text-gray-500 text-sm mb-4">{{ $guru['email'] }}</p>
                            <div class="flex space-x-2">
                                <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                                    <i class="fas fa-edit"></i><span>Edit</span>
                                </a>
                                <button onclick="showModal('modal-guru{{ $index }}')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded flex items-center space-x-1">
                                    <i class="fas fa-trash-alt"></i><span>Hapus</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tombol Tambah (+) -->
            <a href="{{ route('tambah-guru') }}"
             class="fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg transition transform hover:scale-105 z-50"
             title="Tambah Guru">
             <i class="fas fa-plus text-xl"></i>
            </a>
        </main>
    </div>

    <!-- Modal Konfirmasi -->
    @for ($i = 0; $i < 5; $i++)
    <div id="modal-guru{{ $i }}" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-80 p-6 text-center">
            <h2 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus data guru ini?</h2>
            <div class="flex justify-center gap-4">
                <button onclick="hideModal('modal-guru{{ $i }}')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">Tidak</button>
                <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">Ya</button>
            </div>
        </div>
    </div>
    @endfor

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