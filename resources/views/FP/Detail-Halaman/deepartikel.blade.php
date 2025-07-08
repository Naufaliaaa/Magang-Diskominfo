<x-layout>
<div class="bg-white min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <!-- Featured Image -->
    <div class="max-w-4xl mx-auto">
        <img src="{{ asset('img/artikel1.jpg') }}" alt="Gambar Artikel" class="w-full h-72 object-cover rounded-xl shadow-md mb-8">
    </div>

    <!-- Article Content -->
    <div class="max-w-4xl mx-auto">
        <!-- Title -->
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">
            Judul Artikel Contoh SMPN 1 CIMAUNG
        </h1>

        <!-- Meta Info -->
        <div class="flex items-center text-sm text-gray-500 mb-6 space-x-4">
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1z"/>
                </svg>
                <span>7 Juli 2025</span>
            </div>
        </div>

        <!-- Content -->
        <div class="prose prose-lg prose-indigo text-gray-700">
            <p>
                Pada hari Jumat yang cerah, SMPN 1 CIMAUNG melaksanakan kegiatan "Gerakan Bersih Lingkungan Sekolah"
                yang melibatkan seluruh siswa, guru, dan staf sekolah. Kegiatan ini bertujuan untuk meningkatkan
                kesadaran akan pentingnya menjaga kebersihan lingkungan sekolah dan menumbuhkan sikap tanggung jawab
                sosial di kalangan peserta didik.
            </p>
            <p>
                Seluruh siswa tampak antusias mengikuti kegiatan ini. Mereka membersihkan halaman, menata taman, dan
                memilah sampah organik serta anorganik. Selain itu, dilakukan pula penanaman beberapa bibit pohon
                yang diharapkan dapat memperindah lingkungan sekolah di masa mendatang.
            </p>
            <blockquote>
                “Menjaga kebersihan bukan hanya tanggung jawab petugas kebersihan, tapi tugas kita semua.”
            </blockquote>
            <p>
                Kegiatan ini mendapat apresiasi dari orang tua dan masyarakat sekitar karena menunjukkan nilai-nilai
                gotong royong dan kepedulian lingkungan sejak dini. Diharapkan kegiatan seperti ini bisa rutin
                dilaksanakan setiap bulan.
            </p>
        </div>

        <!-- Back Button -->
        <div class="mt-12">
            <a href="/artikel" class="inline-block px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                ← Kembali ke Artikel
            </a>
        </div>
    </div>
</div>
</x-layout>
