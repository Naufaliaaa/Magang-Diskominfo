<x-layout>
    <!-- Header Beranda -->
    <div class="relative bg-gradient-to-br from-blue-400 to-blue-600 text-white w-full overflow-hidden">
        <div class="max-w-screen-2xl mx-auto px-6 md:px-20 py-4 md:py-8 relative z-10 flex flex-col md:flex-row items-center justify-between h-full animate-fade-in-down">
            <!-- Kiri: Teks -->
            <div class="text-center md:text-left md:w-1/2 flex flex-col justify-center animate-slide-in-left">
                <h1 class="text-3xl md:text-4xl font-bold uppercase">SMPN 1 CIMAUNG</h1>
                <p class="text-2xl md:text-3xl font-bold mt-2">
                    PANGGUNG <span class="text-[#C8102E]">PRESTASI</span><br>
                    RUANG <span class="text-[#C8102E]">KREASI</span>
                </p>
                <p class="mt-4 italic text-sm md:text-base max-w-md mx-auto md:mx-0">
                    “Pendidikan tidak hanya dengan pikiran namun juga harus memperkuat tekad dan semangat juang.”
                </p>
                <p>*Tan Malaka*</p>
            </div>

            <!-- Kanan: Gambar -->
            <div class="mt-8 md:mt-0 md:w-1/2 flex justify-center md:justify-end items-end animate-slide-in-right">
                <img src="{{ asset('img/siswa0.png') }}" alt="Siswa Berprestasi"
                     class="w-[300px] md:w-[450px] lg:w-[550px] object-contain" />
            </div>
        </div>
    </div>

    <!-- Artikel & Berita -->
    <div class="bg-gray-100 py-10 px-4 md:px-12 animate-fade-in-up">
        <div class="mb-8">
            <div class="flex flex-col items-center mb-2">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 flex items-center gap-2">
                    <i class="fas fa-newspaper text-orange-500"></i>
                    Artikel Sekolah
                </h2>
                <div class="border-t-2 w-16 mt-2 border-gray-300"></div>
            </div>
            <div class="flex justify-end">
                <a href="/artikel" class="text-blue-600 hover:underline text-sm font-semibold flex items-center">
                    Lihat Semua <i class="fas fa-chevron-right ml-1 text-xs"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['title' => '🌿🌟 Jumat Pagi yang Penuh Makna...', 'desc' => 'Hari ini, kami di SMAN 1 Banjaran bersama-sama melaksanakan Gerakan Memungut Sampah (GMS) sebagai wujud kepedulian...', 'img' => 'img/artikel1.jpg', 'date' => 'April 26, 2025'],
                ['title' => 'Pelatihan Kerelawanan dan Wawasan...', 'desc' => 'Pada Jumat, 14 Februari 2025 kemarin mengadakan pelatihan bagi siswa baru untuk menumbuhkan semangat gotong royong.', 'img' => 'img/artikel2.jpg', 'date' => 'April 25, 2025'],
                ['title' => '📚 Filosofi Memancing - Kumpulan...', 'desc' => 'Filosofi Memancing – Kumpulan Sudut Pandang, Pemikiran, dan Cerita Inspiratif dari siswa dan guru.', 'img' => 'img/artikel3.jpg', 'date' => 'December 24, 2024'],
                ['title' => 'Penandatanganan Pakta Integritas...', 'desc' => 'Penandatanganan pakta integritas wilayah bebas korupsi oleh jajaran sekolah dan komite. Dukumentasi terkait ada di berita.', 'img' => 'img/artikel4.jpeg', 'date' => 'December 24, 2024'],
            ] as $artikel)
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition hover:scale-[1.02] hover:shadow-lg">
                <img src="{{ asset($artikel['img']) }}" alt="Artikel" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-md font-semibold mt-2">{{ $artikel['title'] }}</h3>
                    <p class="text-sm text-gray-600 mt-1 line-clamp-3">{{ $artikel['desc'] }}</p>
                    <div class="mt-4 text-xs text-gray-500 border-t pt-3">
                        <i class="fas fa-calendar-alt mr-1 text-green-500"></i> {{ $artikel['date'] }}
                    </div>
                    <a href="#" class="mt-3 inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded font-semibold">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Profil Sekolah -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Profile Sekolah</h2>
            <div class="border-t-2 w-16 mx-auto mb-10 border-gray-300"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 text-gray-800">
                @foreach([
                    ['title' => 'Sejarah', 'desc' => 'Mengenal jauh lebih dekat dengan SMPN 1 Cimaung melalui dokumentasi sejarahnya.', 'icon' => 'sejarah.png', 'link' => '/profile/sejarah'],
                    ['title' => 'Visi dan Misi', 'desc' => 'Terwujudnya Peserta Didik yang Berakhlak Mulia, Mandiri, dan Berprestasi.', 'icon' => 'visidanmisi.png', 'link' => '/profile/visi-misi'],
                    ['title' => 'Struktur Organisasi', 'desc' => 'Informasi para pejabat dan pegawai di lingkungan SMPN 1 Cimaung.', 'icon' => 'organisasi.png', 'link' => '/profile/struktur-organisasi'],
                    ['title' => 'Sarana dan Prasarana', 'desc' => 'Informasi lengkap sarana prasarana sekolah kami.', 'icon' => 'sarana.png', 'link' => '/profile/sarana-prasarana'],
                    ['title' => 'Guru', 'desc' => 'Informasi daftar nama guru disertai dengan foto.', 'icon' => 'jomblo.png', 'link' => '/profile/guru'],
                    ['title' => 'Osis', 'desc' => 'Organisasi Siswa Intra Sekolah SMPN 1 Cimaung.', 'icon' => 'organisasi.png', 'link' => '/profile/osis'],
                ] as $item)
                <div class="flex flex-col items-center text-center animate-zoom-in">
                    <img src="{{ asset('img/' . $item['icon']) }}" class="w-14 mb-4" />
                    <h3 class="text-xl font-semibold mb-2">{{ $item['title'] }}</h3>
                    <p class="text-sm mb-4">{{ $item['desc'] }}</p>
                    <a href="{{ $item['link'] }}" class="text-sm font-semibold bg-blue-500 hover:bg-blue-600 text-white px-4 py-1.5 rounded-full">
                        SELENGKAPNYA <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

        <!-- Informasi Sekolah -->
        <div class="bg-white py-12 px-4 md:px-12 animate-fade-in-up">
            
            <!-- Judul Tengah -->
            <div class="text-center mb-4">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 flex justify-center items-center gap-2">
                    <i class="fas fa-bullhorn text-blue-500"></i> Informasi Sekolah
                </h2>
                <div class="border-t-2 w-16 mt-2 mx-auto border-gray-300"></div>
            </div>

            <!-- Tombol Kanan Atas -->
            <div class="flex justify-end mb-6">
                <a href="/informasi" class="text-blue-600 text-sm font-semibold hover:underline transition">
                    Lihat Semua Informasi
                </a>
            </div>

            <!-- Konten Informasi -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Penerimaan Siswa Baru 2025', 'desc' => 'PPDB SMPN 1 CIMAUNG dimulai 1 Juli 2025. Persiapkan berkas dan daftar secara online.', 'img' => 'img/artikel1.jpg'],
                    ['title' => 'Jadwal Ujian Semester Ganjil', 'desc' => 'Ujian dilaksanakan mulai 10 September 2025. Harap siswa mempersiapkan diri dengan baik.', 'img' => 'img/artikel2.jpg'],
                    ['title' => 'Daftar Ulang Siswa Baru', 'desc' => 'Jadwal daftar ulang untuk siswa baru: 15–17 Juli 2025, di ruang TU.', 'img' => 'img/artikel3.jpg'],
                ] as $info)
                <div class="bg-gray-50 border rounded-lg shadow hover:shadow-md transition overflow-hidden flex flex-col">
                    <img src="{{ asset($info['img']) }}" alt="informasi" class="w-full h-40 object-cover">
                    <div class="p-4 flex flex-col justify-between flex-grow">
                        <div>
                            <h3 class="text-md font-semibold text-gray-800 mb-2">{{ $info['title'] }}</h3>
                            <p class="text-sm text-gray-600">{{ $info['desc'] }}</p>
                        </div>
                        <div class="mt-4 flex justify-start">
                            <a href="/informasi" class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold px-4 py-2 rounded transition">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
