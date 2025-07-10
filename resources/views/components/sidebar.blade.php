<aside class="w-64 bg-blue-800 text-white flex flex-col">
    <div class="flex items-center justify-center h-20 border-b border-blue-700">
        <img src="{{ asset('img/logo.png') }}" alt="Logo SMPN 1 CIMAUNG" class="h-12 mr-2">
        <span class="font-bold text-lg">SMPN 1 CIMAUNG</span>
    </div>
    <nav class="flex-1 p-4 space-y-2">
        <a href="{{ url('/dbartikel') }}" class="flex items-center space-x-2 hover:bg-blue-700 px-4 py-2 rounded">
            <i class="fas fa-newspaper"></i>
            <span>Artikel</span>
        </a>
        <a href="{{ url('/dbinformasi') }}" class="flex items-center space-x-2 hover:bg-blue-700 px-4 py-2 rounded">
            <i class="fas fa-bullhorn"></i>
            <span>Informasi</span>
        </a>
        <a href="{{ url('/guru') }}" class="flex items-center space-x-2 hover:bg-blue-700 px-4 py-2 rounded">
            <i class="fas fa-user-graduate"></i>
            <span>Guru</span>
        </a>
        <a href="{{ url('/osis') }}" class="flex items-center space-x-2 hover:bg-blue-700 px-4 py-2 rounded">
            <i class="fas fa-users"></i>
            <span>OSIS</span>
        </a>
        <a href="{{ url('/organisasi') }}" class="flex items-center space-x-2 hover:bg-blue-700 px-4 py-2 rounded">
            <i class="fas fa-sitemap"></i>
            <span>Struktur Organisasi</span>
        </a>
    </nav>
    <div class="p-4 border-t border-blue-700">
        <button onclick="confirmLogout()" class="w-full flex items-center justify-center bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </button>
    </div>
</aside>

<!-- Logout Modal -->
<div id="logoutModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Apakah anda yakin ingin Logout?</h2>
        <div class="flex justify-end space-x-4">
            <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Tidak</button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Ya</button>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmLogout() {
        document.getElementById('logoutModal').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('logoutModal').classList.add('hidden');
    }
</script>
