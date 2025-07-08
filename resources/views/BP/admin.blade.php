<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-800 text-white flex flex-col">
            <div class="px-6 py-4 text-2xl font-bold border-b border-blue-700">
                Admin Panel
            </div>
            <nav class="flex-1 px-4 py-6 space-y-4">
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fas fa-users"></i> Data Siswa
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fas fa-bullhorn"></i> Informasi
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fas fa-cog"></i> Pengaturan
                </a>
            </nav>
            <div class="px-4 py-4 border-t border-blue-700">
                <a href="#" class="flex items-center gap-2 text-sm hover:text-blue-300">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-white p-6 overflow-auto">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-blue-800">Dashboard Admin</h1>
                <p class="text-gray-600 mt-2">Selamat datang di panel administrasi.</p>
            </div>

            <!-- Konten kotak info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-100 border-l-4 border-blue-600 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold text-blue-800">Total Siswa</h3>
                    <p class="text-2xl font-bold text-blue-700">230</p>
                </div>
                <div class="bg-blue-100 border-l-4 border-blue-600 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold text-blue-800">Pengumuman Aktif</h3>
                    <p class="text-2xl font-bold text-blue-700">12</p>
                </div>
                <div class="bg-blue-100 border-l-4 border-blue-600 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold text-blue-800">Admin Aktif</h3>
                    <p class="text-2xl font-bold text-blue-700">3</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
