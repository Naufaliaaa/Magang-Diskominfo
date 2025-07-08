<x-layout>
    <section class="max-w-6xl mx-auto px-4 md:px-6 py-10">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <div class="flex justify-center items-center gap-4 mb-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo SMPN 1 CIMAUNG" class="w-16 h-16 object-contain">
                <h1 class="text-4xl font-bold text-gray-800">SMPN 1 CIMAUNG</h1>
            </div>
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">Informasi & Pengumuman Sekolah</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg">Tetap update dengan informasi terkini sekolah</p>
        </div>

        <!-- Pengumuman Utama -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 mb-8 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold mb-2">📢 Pengumuman Penting Seputar Sekolah SMPN 1 CIMAUNG Selalu Update Di Sini</h3>
                    <p class="text-lg">Terus pantengi pengumuman dan jadwal penting di sini</p>
                    <p class="text-sm opacity-90 mt-2">Informasi tercepat akurat</p>
                </div>
                <div class="hidden md:block">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <span class="text-2xl">📝</span>
                    </div>
                </div> 
            </div>
        </div>

        <!-- Informasi List -->
        <div class="space-y-6">
            @foreach([
                ['title' => 'Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2025/2026', 'date' => '01 Juli 2025', 'desc' => 'Pendaftaran PPDB akan dimulai pada tanggal 1 Juli 2025 hingga 14 Juli 2025. Segera persiapkan berkas dan dokumen yang dibutuhkan.', 'img' => 'img/artikel1.jpg'],
                ['title' => 'Jadwal Daftar Ulang Siswa Baru', 'date' => '15 Juli 2025', 'desc' => 'Siswa yang telah diterima wajib melakukan daftar ulang pada tanggal 15-17 Juli 2025 di ruang tata usaha.', 'img' => 'img/artikel2.jpg'],
                ['title' => 'Jadwal Ujian Tengah Semester (UTS) Ganjil', 'date' => '10 September 2025', 'desc' => 'UTS Ganjil akan dilaksanakan mulai 10 sampai 16 September 2025. Siswa diharapkan mempersiapkan diri dengan baik.', 'img' => 'img/artikel3.jpg'],
                ['title' => 'Libur Akhir Semester Ganjil', 'date' => '20 Desember 2025', 'desc' => 'Libur semester ganjil dimulai pada tanggal 20 Desember 2025 hingga 2 Januari 2026.', 'img' => 'img/artikel4.jpeg'],
                ['title' => 'Pengambilan Raport Semester Ganjil', 'date' => '19 Desember 2025', 'desc' => 'Raport akan dibagikan kepada orang tua/wali murid pada tanggal 19 Desember 2025 di ruang kelas masing-masing.', 'img' => 'img/artikel1.jpg'],
            ] as $index => $info)
            <div class="bg-white shadow-sm border rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 hover:transform hover:scale-[1.02]">
                <div class="flex items-start md:items-center gap-4 p-4">
                    <!-- Image Section -->
                    <div class="relative">
                        <img src="{{ asset($info['img']) }}" alt="Informasi Gambar" class="w-24 h-24 object-cover rounded-lg shadow-sm">
                    </div>

                    <!-- Content Section -->
                    <div class="flex-1">
                        <div class="flex justify-between items-start md:items-center mb-2">
                            <h3 class="text-md font-semibold text-gray-800 leading-tight">{{ $info['title'] }}</h3>
                            <span class="text-sm text-gray-500 whitespace-nowrap ml-2">{{ $info['date'] }}</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">{{ $info['desc'] }}</p>
                        
                        <!-- Action Button -->
                        <div class="flex justify-start">
                            <a href="{{ route('deepinformasi') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium hover:underline transition-colors">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Navigasi informasi -->
    <div class="flex justify-center mt-8 mb-16">
        <div class="flex gap-2 items-center flex-wrap">
            @php
                $currentPage = request('page', 1);
                $totalPages = 100;
            @endphp

            <!-- Tombol halaman awal -->
            <a href="?page=1" class="w-9 h-9 flex items-center justify-center rounded-full border 
            {{ $currentPage == 1 ? 'bg-[#4263eb] text-white' : 'text-gray-700 border-gray-300 hover:bg-[#4263eb] hover:text-white' }}">
                1
            </a>

            @if ($currentPage > 4)
                <span class="text-gray-400">...</span>
            @endif

            @for ($i = max(2, $currentPage - 2); $i <= min($totalPages - 1, $currentPage + 2); $i++)
                <a href="?page={{ $i }}" class="w-9 h-9 flex items-center justify-center rounded-full border 
                    {{ $currentPage == $i ? 'bg-[#4263eb] text-white' : 'text-gray-700 border-gray-300 hover:bg-[#4263eb] hover:text-white' }}">
                    {{ $i }}
                </a>
            @endfor

            @if ($currentPage < $totalPages - 3)
                <span class="text-gray-400">...</span>
            @endif

            <a href="?page={{ $totalPages }}" class="w-9 h-9 flex items-center justify-center rounded-full border 
            {{ $currentPage == $totalPages ? 'bg-[#4263eb] text-white' : 'text-gray-700 border-gray-300 hover:bg-[#4263eb] hover:text-white' }}">
                {{ $totalPages }}
            </a>
        </div>
    </div>
</x-layout>
