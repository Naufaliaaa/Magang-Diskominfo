<x-layout>
    <section class="max-w-7xl mx-auto px-4 md:px-6 py-8">
        <!-- Artikel Sekolah Terbaru -->
        <h2 class="text-2xl font-bold mb-4 text-center">Artikel Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Artikel utama -->
            <div class="md:col-span-2 relative rounded-lg overflow-hidden">
                <img src="{{ asset('img/artikel1.jpg') }}" alt="Artikel Utama" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                    <h3 class="text-white text-lg font-semibold">Pentingnya Pendidikan Karakter Sejak Dini di SMPN 1 CIMAUNG</h3>
                </div>
            </div>

            <!-- Daftar artikel terbaru -->
            <div class="space-y-4 overflow-y-auto max-h-[350px] pr-2">
                @foreach ([
                    ['title' => 'Kegiatan Pramuka Membentuk Kemandirian Siswa', 'img' => 'img/artikel2.jpg', 'date' => '05 Juli 2025'],
                    ['title' => 'Juara Lomba Kebersihan Sekolah Kabupaten Bandung', 'img' => 'img/artikel3.jpg', 'date' => '02 Juli 2025'],
                    ['title' => 'Workshop Digital untuk Guru dan Staf SMPN 1 CIMAUNG', 'img' => 'img/artikel4.jpeg', 'date' => '30 Juni 2025'],
                    ['title' => 'Sosialisasi Bahaya Narkoba untuk Siswa Kelas 9', 'img' => 'img/artikel1.jpg', 'date' => '29 Juni 2025'],
                    ['title' => 'Simulasi Ujian CBT Dilaksanakan Serentak di Lab Komputer', 'img' => 'img/artikel2.jpg', 'date' => '27 Juni 2025'],
                    ['title' => 'Kegiatan Jumat Bersih Rutin Setiap Minggu', 'img' => 'img/artikel3.jpg', 'date' => '24 Juni 2025'],
                    ['title' => 'Pelatihan Kewirausahaan untuk Siswa Kelas 8 dan 9', 'img' => 'img/artikel4.jpeg', 'date' => '21 Juni 2025'],
                ] as $artikel)
                <div class="flex items-start gap-3">
                    <img src="{{ asset($artikel['img']) }}" alt="thumb" class="w-16 h-16 rounded object-cover">
                    <div class="text-sm">
                        <p class="font-semibold text-gray-800 leading-snug">{{ $artikel['title'] }}</p>
                        <span class="text-gray-400 text-xs">{{ $artikel['date'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Artikel lainya -->
        <h2 class="text-2xl font-bold mt-10 mb-4 text-center">Artikel lainya</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                ['title' => 'Upacara Bendera: Melatih Disiplin Sejak Dini', 'img' => 'img/artikel1.jpg', 'desc' => 'Kegiatan rutin upacara bendera setiap hari Senin diikuti seluruh siswa...'],
                ['title' => 'SMPN 1 CIMAUNG Adakan Sosialisasi Anti Bullying', 'img' => 'img/artikel2.jpg', 'desc' => 'Guru dan orang tua bekerja sama untuk menciptakan lingkungan yang aman...'],
                ['title' => 'Ekstrakurikuler Musik: Wadah Kreativitas Siswa', 'img' => 'img/artikel3.jpg', 'desc' => 'Kegiatan musik memberi ruang bagi siswa untuk mengekspresikan diri...'],
                ['title' => 'Gerakan Menanam Pohon oleh Siswa dan Guru', 'img' => 'img/artikel4.jpeg', 'desc' => 'Kegiatan penghijauan dilakukan di halaman dan taman sekolah...'],
                ['title' => 'Kegiatan Literasi Membaca Buku Setiap Hari Jumat', 'img' => 'img/artikel1.jpg', 'desc' => 'Literasi sangat penting dalam menunjang kemampuan akademik siswa...'],
                ['title' => 'Pelatihan Pembuatan Kompos dari Sampah Organik', 'img' => 'img/artikel2.jpg', 'desc' => 'Siswa belajar cara membuat kompos secara mandiri dari sampah kantin...'],
                ['title' => 'Kunjungan Industri Kelas 9 ke PT Dirgantara Indonesia', 'img' => 'img/artikel3.jpg', 'desc' => 'Siswa mendapatkan wawasan dunia kerja dan teknologi pesawat terbang...'],
                ['title' => 'Lomba Poster Hari Lingkungan Hidup', 'img' => 'img/artikel4.jpeg', 'desc' => 'Para siswa menunjukkan kreativitas dalam kampanye lingkungan...'],
            ] as $artikel)
            <div class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden flex flex-col justify-between">
                <div>
                    <img src="{{ asset($artikel['img']) }}" alt="artikel" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-md font-semibold text-gray-800 leading-tight mb-2">{{ $artikel['title'] }}</h3>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $artikel['desc'] }}</p>
                    </div>
                </div>
                <div class="px-4 pb-4">
                    <a href="#" class="inline-block bg-[#4263eb] text-white text-sm font-medium py-2 px-4 rounded hover:bg-blue-700 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Navigasi Halaman Artikel -->
        <div class="flex justify-center mt-8">
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

                <!-- Titik-titik sebelum halaman aktif -->
                @if ($currentPage > 4)
                    <span class="text-gray-400">...</span>
                @endif

                <!-- Halaman sekitar halaman aktif -->
                @for ($i = max(2, $currentPage - 2); $i <= min($totalPages - 1, $currentPage + 2); $i++)
                    <a href="?page={{ $i }}" class="w-9 h-9 flex items-center justify-center rounded-full border 
                        {{ $currentPage == $i ? 'bg-[#4263eb] text-white' : 'text-gray-700 border-gray-300 hover:bg-[#4263eb] hover:text-white' }}">
                        {{ $i }}
                    </a>
                @endfor

                <!-- Titik-titik setelah halaman aktif -->
                @if ($currentPage < $totalPages - 3)
                    <span class="text-gray-400">...</span>
                @endif

                <!-- Tombol halaman terakhir -->
                <a href="?page={{ $totalPages }}" class="w-9 h-9 flex items-center justify-center rounded-full border 
                {{ $currentPage == $totalPages ? 'bg-[#4263eb] text-white' : 'text-gray-700 border-gray-300 hover:bg-[#4263eb] hover:text-white' }}">
                    {{ $totalPages }}
                </a>
            </div>
        </div>

    </section>
</x-layout>
