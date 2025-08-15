<x-layout>
    <section class="max-w-7xl mx-auto px-4 md:px-6 py-8">
        <style>
            @keyframes fadeUp {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .fade-up {
                animation: fadeUp 0.6s ease-out forwards;
            }
            .fade-delay-1 { animation-delay: 0.1s; }
            .fade-delay-2 { animation-delay: 0.2s; }
            .fade-delay-3 { animation-delay: 0.3s; }
            .fade-delay-4 { animation-delay: 0.4s; }
            .fade-delay-5 { animation-delay: 0.5s; }
            .fade-delay-6 { animation-delay: 0.6s; }
            .fade-delay-7 { animation-delay: 0.7s; }
            .fade-delay-8 { animation-delay: 0.8s; }
            img.hover-zoom {
                transition: transform 0.4s ease;
            }
            img.hover-zoom:hover {
                transform: scale(1.05);
            }
        </style>

        <!-- Artikel Sekolah Terbaru -->
        <h2 class="text-2xl font-bold mb-4 text-center fade-up">Artikel Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Artikel utama -->
            <div class="md:col-span-2 relative rounded-lg overflow-hidden fade-up fade-delay-1">
                <img src="{{ asset('img/artikel1.jpg') }}" alt="Artikel Utama" class="w-full h-80 object-cover hover-zoom">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                    <h3 class="text-white text-lg font-semibold">Pentingnya Pendidikan Karakter Sejak Dini di SMPN 1 CIMAUNG</h3>
                </div>
            </div>

            <!-- Daftar artikel terbaru -->
            <div class="bg-white border rounded-lg shadow p-4 space-y-4 overflow-y-auto max-h-[350px] pr-2 fade-up fade-delay-2">
                @foreach ([
                    ['title' => 'Kegiatan Pramuka Membentuk Kemandirian Siswa', 'img' => 'img/artikel2.jpg', 'date' => '05 Juli 2025'],
                    ['title' => 'Juara Lomba Kebersihan Sekolah Kabupaten Bandung', 'img' => 'img/artikel3.jpg', 'date' => '02 Juli 2025'],
                    ['title' => 'Workshop Digital untuk Guru dan Staf SMPN 1 CIMAUNG', 'img' => 'img/artikel4.jpeg', 'date' => '30 Juni 2025'],
                    ['title' => 'Sosialisasi Bahaya Narkoba untuk Siswa Kelas 9', 'img' => 'img/artikel1.jpg', 'date' => '29 Juni 2025'],
                    ['title' => 'Simulasi Ujian CBT Dilaksanakan Serentak di Lab Komputer', 'img' => 'img/artikel2.jpg', 'date' => '27 Juni 2025'],
                    ['title' => 'Kegiatan Jumat Bersih Rutin Setiap Minggu', 'img' => 'img/artikel3.jpg', 'date' => '24 Juni 2025'],
                    ['title' => 'Pelatihan Kewirausahaan untuk Siswa Kelas 8 dan 9', 'img' => 'img/artikel4.jpeg', 'date' => '21 Juni 2025'],
                ] as $artikel)
                <div class="flex items-start gap-3 fade-up fade-delay-{{ $loop->iteration }}">
                    <img src="{{ asset($artikel['img']) }}" alt="thumb" class="w-16 h-16 rounded object-cover hover-zoom">
                    <div class="text-sm">
                        <p class="font-semibold text-gray-800 leading-snug">{{ $artikel['title'] }}</p>
                        <span class="text-gray-400 text-xs">{{ $artikel['date'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Artikel lainnya -->
        <h2 class="text-2xl font-bold mt-10 mb-4 text-center fade-up fade-delay-1">Artikel lainnya</h2>
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
            <div class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden flex flex-col justify-between fade-up fade-delay-{{ $loop->iteration }}">
                <div>
                    <img src="{{ asset($artikel['img']) }}" alt="artikel" class="w-full h-40 object-cover hover-zoom">
                    <div class="p-4">
                        <h3 class="text-md font-semibold text-gray-800 leading-tight mb-2">{{ $artikel['title'] }}</h3>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $artikel['desc'] }}</p>
                    </div>
                </div>
                <div class="px-4 pb-4">
                    <a href="/deepartikel" class="inline-block bg-[#4263eb] text-white text-sm font-medium py-2 px-4 rounded hover:bg-blue-700 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Navigasi Halaman Artikel -->
        <div class="flex justify-center mt-8 fade-up fade-delay-2">
            <div class="flex gap-2 items-center flex-wrap">
                ...
            </div>
        </div>
    </section>
</x-layout>
