<x-layout>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMPN 1 Cimaung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeInLeft { from { opacity: 0; transform: translateX(-30px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes fadeInRight { from { opacity: 0; transform: translateX(30px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes scaleIn { from { opacity: 0; transform: scale(0.8); } to { opacity: 1; transform: scale(1); } }
        @keyframes slideDown { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }

        .animate-fadeInUp { animation: fadeInUp 0.8s ease-out forwards; }
        .animate-fadeInLeft { animation: fadeInLeft 0.8s ease-out forwards; }
        .animate-fadeInRight { animation: fadeInRight 0.8s ease-out forwards; }
        .animate-scaleIn { animation: scaleIn 0.6s ease-out forwards; }
        .animate-slideDown { animation: slideDown 0.6s ease-out forwards; }

        .animate-delay-200 { animation-delay: 0.2s; }
        .animate-delay-400 { animation-delay: 0.4s; }
        .animate-delay-600 { animation-delay: 0.6s; }
        .animate-delay-800 { animation-delay: 0.8s; }
        .animate-delay-1000 { animation-delay: 1s; }
        .animate-delay-1200 { animation-delay: 1.2s; }

        .opacity-0 { opacity: 0; }

        .hover-scale { transition: transform 0.3s ease; }
        .hover-scale:hover { transform: scale(1.05); }

        .hover-shadow { transition: box-shadow 0.3s ease; }
        .hover-shadow:hover {
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Sejarah -->
<section id="sejarah" class="bg-white py-16 px-4 md:px-20">
    <div class="text-center mb-10 opacity-0 animate-slideDown">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Sejarah SMPN 1 CIMAUNG</h2>
        <div class="border-t-2 w-16 mt-3 mx-auto border-blue-500"></div>
    </div>

    <div class="max-w-5xl mx-auto text-gray-800 leading-relaxed text-justify space-y-6 text-base md:text-lg">
            <p class="opacity-0 animate-fadeInUp">
                <strong>SMP Negeri 1 Cimaung</strong> memiliki sejarah yang panjang dan inspiratif sebagai hasil gotong royong masyarakat dan pemerintah dalam membangun pendidikan di pelosok Kabupaten Bandung. 
                Cikal bakal sekolah ini dimulai pada tahun ajaran 1996/1997 dengan nama <em>SMP Kelas Jauh Banjaran 2</em>, yang saat itu menggunakan gedung SDN 1 Cipinang sebagai tempat belajar. Inisiatif ini digagas oleh tokoh masyarakat setempat, salah satunya adalah Bapak U. Ruswandi, dengan dukungan dari pihak SDN Cipinang dan SMPN 2 Banjaran.
            </p>

            <p class="opacity-0 animate-fadeInUp animate-delay-200">
                Tahun 1997, masyarakat mulai menggalang upaya untuk mendirikan sekolah mandiri dengan membentuk panitia pengadaan lahan yang diketuai oleh Bapak H. Moch. Toha. Setelah melalui berbagai proses, pemerintah Provinsi Jawa Barat memberikan bantuan sebesar Rp 32,5 juta pada tahun 1999 untuk pembelian lahan, yang akhirnya bersertifikat pada tahun 2002. 
                Namun, pembelian lahan itu belum lunas. Dengan semangat kebersamaan, masyarakat dan orang tua siswa berhasil mengumpulkan dana tambahan sekitar Rp 63,5 juta, sehingga total biaya pembelian tanah mencapai Rp 96 juta.
            </p>

            <p class="opacity-0 animate-fadeInUp animate-delay-400">
                Pada tahun 2004 hingga 2005, pemerintah daerah membantu proses pematangan lahan. Selanjutnya, pada 31 Juli 2005 dibentuklah Komite Pembangunan Unit Sekolah Baru (USB) yang dipimpin oleh Bapak Jamhur, S.Pd., yang kala itu menjabat sebagai Pelaksana Harian Kepala SMPN 2 Banjaran. 
                Pembangunan fisik sekolah dimulai pada 25 November 2005 dan selesai pada akhir Februari 2006. Gedung baru tersebut akhirnya diresmikan pada 23 Maret 2006 oleh Kepala Dinas Pendidikan Kabupaten Bandung, menandai lahirnya sekolah yang mandiri secara fasilitas.
            </p>

            <p class="opacity-0 animate-fadeInUp animate-delay-600">
                Secara resmi, SMPN 1 Cimaung berdiri pada 4 Januari 2007, berdasarkan SK No. 421.3/kep.07A-disdik/2007. Sejak saat itu, sekolah ini beroperasi penuh di bawah Pemerintah Kabupaten Bandung. 
                Akreditasi pertama berhasil diraih pada 31 Desember 2008 dengan peringkat B, yang menjadi pengakuan atas kualitas pendidikan dan tata kelola sekolah.
            </p>

            <p class="opacity-0 animate-fadeInUp animate-delay-800">
                Dalam perkembangannya, SMPN 1 Cimaung juga menunjukkan prestasi di bidang lingkungan. Sejak tahun 2010, sekolah ini aktif mengikuti program Adiwiyata dan secara konsisten meningkatkan kualitasnya hingga pada tahun 2017 berhasil meraih predikat <strong>Sekolah Adiwiyata Mandiri</strong>, 
                yaitu penghargaan tertinggi dalam bidang sekolah berwawasan lingkungan. Prestasi ini menjadikan SMPN 1 Cimaung sebagai sekolah rujukan bagi sekolah-sekolah lain di Kabupaten Bandung dan sekitarnya.
            </p>

            <p class="opacity-0 animate-fadeInUp animate-delay-1000">
                Perjalanan panjang SMPN 1 Cimaung adalah bukti nyata bahwa semangat gotong royong dan kepedulian terhadap pendidikan dapat mewujudkan lembaga yang unggul dan berdaya saing tinggi, meski dimulai dari kondisi yang sangat sederhana. 
                Kini, sekolah ini terus berkembang menjadi kebanggaan warga Cimaung dan menjadi pilar penting pendidikan di Kabupaten Bandung.
            </p>
    </div>
</section>

<!-- Visi & Misi -->
<section id="visi-misi" class="bg-gray-50 py-16 px-4 md:px-20">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-10 opacity-0 animate-slideDown animate-delay-200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Visi & Misi SMPN 1 CIMAUNG</h2>
            <div class="border-t-2 w-16 mt-3 mx-auto border-blue-500"></div>
        </div>

        <!-- Visi -->
        <div class="mb-10 opacity-0 animate-fadeInLeft animate-delay-400">
            <h3 class="text-xl font-semibold text-blue-600 mb-2">🎯 Visi</h3>
            <p class="text-gray-800 text-justify text-base md:text-lg leading-relaxed">
                <strong>SMPN 1 Cimaung</strong> bertujuan untuk mencetak peserta didik yang berprestasi, empati, religius, inovatif, dan mandiri—mengusung akronim <strong>"BERIMAN"</strong>.
            </p>
        </div>

        <!-- Misi -->
        <div class="opacity-0 animate-fadeInRight animate-delay-600">
            <h3 class="text-xl font-semibold text-blue-600 mb-4">🚀 Misi</h3>
             <ol class="list-decimal ml-6 space-y-3 text-gray-800 text-base md:text-lg leading-relaxed">
                    <li>Meningkatkan prestasi akademik dan non-akademik melalui pelayanan pembelajaran optimal.</li>
                    <li>Membiasakan warga sekolah peduli dalam ucapan dan perilaku terhadap orang lain.</li>
                    <li>Menanamkan dan mengamalkan nilai-nilai keagamaan secara rutin.</li>
                    <li>Melakukan pembaruan dengan kreatifitas dan inovasi warga sekolah.</li>
                    <li>Meningkatkan layanan pendidikan serta keterampilan bagi seluruh warga sekolah.</li>
                    <li>Membentuk warga sekolah yang mandiri, berkarakter, dan teguh dalam prinsip hidup.</li>
             </ol>
        </div>
    </div>
</section>

<!-- Struktur Organisasi -->
<section id="struktur-organisasi" class="bg-white py-16 px-4 md:px-20">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-10 opacity-0 animate-slideDown animate-delay-200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Struktur Organisasi SMPN 1 CIMAUNG</h2>
            <div class="border-t-2 w-16 mt-3 mx-auto border-blue-500"></div>
        </div>

        <div class="flex justify-center opacity-0 animate-scaleIn animate-delay-400">
            <div class="w-full max-w-4xl hover-scale hover-shadow">
                <img src="img/struktur-organisasi.jpg" alt="Struktur Organisasi SMPN 1 Cimaung" class="w-full h-auto rounded-lg shadow-lg" />
            </div>
        </div>
    </div>
</section>

<!-- Sarana & Prasarana -->
<section id="sarana-prasarana" class="bg-gray-50 py-16 px-4 md:px-20">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-10 opacity-0 animate-slideDown animate-delay-200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Sarana dan Prasarana SMPN 1 CIMAUNG</h2>
            <div class="border-t-2 w-16 mt-3 mx-auto border-blue-500"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
           <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale hover-shadow opacity-0 animate-fadeInUp animate-delay-400">
                    <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                        <span class="text-gray-600">Ruang Kelas</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ruang Kelas</h3>
                        <p class="text-gray-600 text-sm">18 ruang kelas dengan fasilitas pembelajaran modern.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale hover-shadow opacity-0 animate-fadeInUp animate-delay-600">
                    <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                        <span class="text-gray-600">Lab IPA</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Laboratorium IPA</h3>
                        <p class="text-gray-600 text-sm">Peralatan lengkap untuk praktikum fisika, kimia, dan biologi.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale hover-shadow opacity-0 animate-fadeInUp animate-delay-800">
                    <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                        <span class="text-gray-600">Lab Komputer</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Laboratorium Komputer</h3>
                        <p class="text-gray-600 text-sm">30 unit komputer dengan akses internet dan software pendukung.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale hover-shadow opacity-0 animate-fadeInUp animate-delay-1000">
                    <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                        <span class="text-gray-600">Perpustakaan</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Perpustakaan</h3>
                        <p class="text-gray-600 text-sm">Lebih dari 5.000 buku dan ruang baca nyaman untuk siswa.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale hover-shadow opacity-0 animate-fadeInUp animate-delay-1200">
                    <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                        <span class="text-gray-600">Aula</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Aula Serbaguna</h3>
                        <p class="text-gray-600 text-sm">Digunakan untuk rapat, acara sekolah, dan ekstrakurikuler.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale hover-shadow opacity-0 animate-fadeInUp animate-delay-1000">
                    <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                        <span class="text-gray-600">Lapangan</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Lapangan Olahraga</h3>
                        <p class="text-gray-600 text-sm">Fasilitas basket, voli, dan sepak bola untuk olahraga siswa.</p>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- Guru -->
<section id="guru" class="bg-white py-16 px-4 md:px-20">
    <div class="max-w-6xl mx-auto">
        <div class="relative mb-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Guru</h2>
            <div class="border-t-2 w-16 mt-2 mx-auto border-blue-500"></div>
            <a href="{{ url('/guru') }}" class="absolute right-0 top-0 text-blue-600 font-semibold hover:underline transition-colors duration-300">Guru lainnya</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mt-6">
<div class="text-center opacity-0 animate-scaleIn animate-delay-600 hover-scale">
                        <div class="w-32 h-32 bg-gray-400 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="img/foto.jpg" alt="Foto Guru" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Nama Guru</h3>
                        <p class="text-blue-600 text-sm mb-2">Mata Pelajaran</p>
                        <div class="flex items-center justify-center gap-2">
                            <span class="text-gray-500">✉️</span>
                            <span class="text-gray-600 text-sm">Guru@gmail.com</span>
                        </div>
                    </div>
                    <div class="text-center opacity-0 animate-scaleIn animate-delay-800 hover-scale">
                        <div class="w-32 h-32 bg-gray-400 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="img/foto.jpg" alt="Foto Guru" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Nama Guru</h3>
                        <p class="text-blue-600 text-sm mb-2">Mata Pelajaran</p>
                        <div class="flex items-center justify-center gap-2">
                            <span class="text-gray-500">✉️</span>
                            <span class="text-gray-600 text-sm">Guru@gmail.com</span>
                        </div>
                    </div>
                    <div class="text-center opacity-0 animate-scaleIn animate-delay-1000 hover-scale">
                        <div class="w-32 h-32 bg-gray-400 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="img/foto.jpg" alt="Foto Guru" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Nama Guru</h3>
                        <p class="text-blue-600 text-sm mb-2">Mata Pelajaran</p>
                        <div class="flex items-center justify-center gap-2">
                            <span class="text-gray-500">✉️</span>
                            <span class="text-gray-600 text-sm">Guru@gmail.com</span>
                        </div>
                    </div>
                    <div class="text-center opacity-0 animate-scaleIn animate-delay-1200 hover-scale">
                        <div class="w-32 h-32 bg-gray-400 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="img/foto.jpg" alt="Foto Guru" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Nama Guru</h3>
                        <p class="text-blue-600 text-sm mb-2">Mata Pelajaran</p>
                        <div class="flex items-center justify-center gap-2">
                            <span class="text-gray-500">✉️</span>
                            <span class="text-gray-600 text-sm">Guru@gmail.com</span>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- OSIS -->
<section id="osis" class="bg-gray-50 py-16 px-4 md:px-20">
    <div class="max-w-6xl mx-auto">
        <div class="relative mb-12 text-center">
            <h2 class="text-3xl font-bold text-gray-800">OSIS</h2>
            <div class="border-t-2 w-16 mt-2 mx-auto border-blue-500"></div>
            <!-- Tombol Angkatan Lainnya -->
            <a href="{{ route('osislainnya') }}" class="absolute right-0 top-0 text-blue-600 font-semibold hover:underline transition-colors duration-300">
                Angkatan Lainnya
            </a>
        </div>

        <!-- Ketua dan Wakil OSIS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start mb-16">
            <!-- Ketua OSIS -->
            <div class="text-center opacity-0 animate-fadeInLeft animate-delay-800 hover-scale">
                <div class="w-48 h-48 bg-gray-400 rounded-lg mx-auto shadow-lg overflow-hidden">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Foto Ketua OSIS" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold mt-4">Umar Abdurrahman</h3>
                <p class="text-blue-600">Ketua OSIS</p>
                <p class="text-sm text-gray-500">Periode 2024 - 2025</p>
            </div>
            <!-- Info Ketua -->
            <div class="opacity-0 animate-fadeInRight animate-delay-1000">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <!-- Wakil OSIS -->
            <div class="text-center opacity-0 animate-fadeInLeft animate-delay-1200 hover-scale">
                <div class="w-48 h-48 bg-gray-400 rounded-lg mx-auto shadow-lg overflow-hidden">
                    <img src="{{ asset('img/foto.jpg') }}" alt="Foto Wakil Ketua OSIS" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold mt-4">Alya Nurhaliza</h3>
                <p class="text-blue-600">Wakil Ketua OSIS</p>
                <p class="text-sm text-gray-500">Periode 2024 - 2025</p>
            </div>
            <!-- Info Wakil -->
            <div class="opacity-0 animate-fadeInRight animate-delay-1000">
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
</body>
</html>
</x-layout>