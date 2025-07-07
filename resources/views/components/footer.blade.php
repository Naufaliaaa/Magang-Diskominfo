<footer class="bg-[#4f90e3] text-white pt-10 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- Logo & Alamat -->
            <div>
                <img src="{{ asset('img/logo.png') }}" alt="Logo SMAN 1 Banjaran" class="w-20 mb-4">
                <h3 class="text-lg font-bold mb-2">SMPN 1 CIMAUNG</h3>
                <p class="text-sm">Jl. Pangalengan, Kp Jl. Lamping, RT.2/RW.6<br>Desa Cipinang, Kec. Cimaung<br>Kabupaten Bandung, Jawa Barat 40374</p>
            </div>

            <!-- Menu Utama -->
            <div>
                <h3 class="text-lg font-bold mb-2">Menu</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="/" class="hover:text-yellow-300">Beranda</a></li>
                    <li><a href="/profile" class="hover:text-yellow-300">Profile</a></li>
                    <li><a href="/artikel" class="hover:text-yellow-300">Artikel</a></li>
                    <li><a href="/informasi" class="hover:text-yellow-300">Informasi</a></li>
                    <li><a href="/kontak" class="hover:text-yellow-300">Kontak</a></li>
                </ul>
            </div>

            <!-- Bantuan -->
            <div>
                <h3 class="text-lg font-bold mb-2">Bantuan</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="https://wa.me/6281322033615" class="hover:text-yellow-300">Kontak Kami</a></li>
                    <li><a href="/kebijakan" class="hover:text-yellow-300">Kebijakan Privasi</a></li>
                    <li><a href="/pengaduan" class="hover:text-yellow-300">Pengaduan Layanan</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h3 class="text-lg font-bold mb-2">Hubungi Kami</h3>
                <ul class="space-y-2 text-sm">
                    <li>
                        <strong>Email:</strong><br>
                        <a href="mailto:smpn1cimaung@gmail.com" class="hover:text-yellow-300">smpn1cimaung@gmail.com</a>
                    </li>
                    <li>
                        <strong>Telepon:</strong><br>
                        <span>+62 813-2203-3615</span>
                    </li>
                    <li>
                        <h4 class="font-medium mt-3 mb-1">Ikuti Kami</h4>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/p/SMP-Negeri-1-Cimaung-100063535033935/" class="hover:opacity-75">
                                <img src="{{ asset('img/fb.png') }}" alt="Facebook" class="w-7 h-7 rounded">
                            </a>
                            <a href="https://www.instagram.com/smp1cimaung/" class="hover:opacity-75">
                                <img src="{{ asset('img/ig.png') }}" alt="Instagram" class="w-7 h-7 rounded">
                            </a>
                            <a href="https://www.youtube.com/channel/UCLlnOipyTFcXb0q5tntsiFA" class="hover:opacity-75">
                                <img src="{{ asset('img/yt.png') }}" alt="YouTube" class="w-7 h-7 rounded">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-blue-300 pt-4 text-center text-sm">
            <p>2025 © DISKOMINFO</p>
        </div>
    </div>
</footer>
