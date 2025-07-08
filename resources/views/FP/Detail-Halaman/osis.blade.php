<x-layout>
<section class="max-w-6xl mx-auto px-4 md:px-6 py-12">
    <!-- Dropdown Pilih Angkatan -->
    <div class="mb-12">
        <label for="angkatan" class="block text-sm font-medium text-gray-700 mb-1">Pilih Angkatan</label>
        <select id="angkatan" name="angkatan" class="block w-60 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            @for ($i = date('Y'); $i >= date('Y') - 4; $i--)
                <option value="{{ $i }}">Angkatan {{ $i }}</option>
            @endfor
        </select>
    </div>

    <!-- Ketua OSIS -->
    <div class="mb-16">
        <h2 class="text-xl font-bold text-gray-700 mb-6 text-center">Ketua OSIS</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <!-- Foto -->
            <div class="text-center">
                <div class="w-72 h-96 bg-gray-200 rounded-lg mx-auto shadow-lg overflow-hidden">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Ketua OSIS" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mt-4">Ghifar Ahmad Darda</h3>
                <p class="text-blue-600 font-medium">Ketua Osis</p>
            </div>

            <!-- Biodata & Visi Misi -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Biodata:</h4>
                <ul class="list-disc list-inside text-gray-700 mb-6">
                    <li>Kelas: IX-A</li>
                    <li>Hobi: Basket & Menulis</li>
                    <li>Moto: Hidup tiada arti jika tanpa shalat</li>
                </ul>

                <h4 class="text-lg font-semibold text-gray-800 mb-2">Visi & Misi:</h4>
                <p class="text-gray-700 mb-2"><strong>Visi:</strong> Menjadikan OSIS sebagai wadah kreativitas, solidaritas, dan kepemimpinan siswa.</p>
                <p class="text-gray-700"><strong>Misi:</strong> Mengadakan kegiatan positif, meningkatkan semangat kolaborasi, dan menciptakan lingkungan sekolah yang inklusif.</p>
            </div>
        </div>
    </div>

    <!-- Wakil Ketua OSIS -->
    <div>
        <h2 class="text-xl font-bold text-gray-700 mb-6 text-center">Wakil Ketua OSIS</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <!-- Foto -->
            <div class="text-center">
                <div class="w-72 h-96 bg-gray-200 rounded-lg mx-auto shadow-lg overflow-hidden">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Wakil Ketua OSIS" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold mt-4">Alya Nurhaliza</h3>
                <p class="text-blue-600 font-medium">Wakil Ketua Osis</p>
            </div>

            <!-- Biodata & Visi Misi -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Biodata:</h4>
                <ul class="list-disc list-inside text-gray-700 mb-6">
                    <li>Kelas: IX-C</li>
                    <li>Hobi: Membaca & Public Speaking</li>
                    <li>Moto: Hidup Seperti Larry</li>
                </ul>

                <h4 class="text-lg font-semibold text-gray-800 mb-2">Visi & Misi:</h4>
                <p class="text-gray-700 mb-2"><strong>Visi:</strong> Menjadi pemimpin muda yang mampu menginspirasi dan menyatukan siswa.</p>
                <p class="text-gray-700"><strong>Misi:</strong> Menjembatani aspirasi siswa, mendukung program OSIS, dan aktif dalam kegiatan sosial sekolah.</p>
            </div>
        </div>
    </div>
</section>
</x-layout>
