<x-layout>
    <div class="container mx-auto px-4 md:px-8 py-12">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-[#4f90e3]">Kontak Kami</h2>

        <div class="bg-white shadow-xl rounded-3xl overflow-hidden flex flex-col md:flex-row">
            <!-- Peta (Google Maps) -->
            <div class="w-full md:w-1/2 p-6">
                <div class="rounded-2xl overflow-hidden shadow-lg h-[420px] md:h-[500px]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.947316123456!2d107.5578566!3d-7.1015744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c1e88208ccd5%3A0xbeb05c49184fe5b4!2sSMPN+1+CIMAUNG!5e0!3m2!1sid!2sid!4v1625471234567!5m2!1sid!2sid" 
                        width="100%" height="100%" 
                        style="border:0;" allowfullscreen="" loading="lazy"
                        class="w-full h-full rounded-lg"
                    ></iframe>
                </div>
            </div>

            <!-- Informasi Kontak -->
            <div class="w-full md:w-1/2 bg-[#4f90e3] text-white p-8 relative">
                <!-- Header Sekolah -->
                <div class="absolute top-0 left-0 w-full bg-[#3a72ba] py-4 px-6 flex items-center gap-4 rounded-tr-3xl rounded-tl-3xl">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Sekolah" class="w-12 h-12 object-contain">
                    <h3 class="text-xl md:text-2xl font-bold tracking-wide">SMPN 1 CIMAUNG</h3>
                </div>

                <div class="mt-24"></div> <!-- Spacer -->

                <h3 class="text-xl md:text-2xl font-bold mb-6">Hubungi Kami</h3>

                <ul class="space-y-8 text-base md:text-lg">
                    <!-- Telepon -->
                    <li class="flex items-start gap-6">
                        <img src="{{ asset('img/Tlp.png') }}" alt="Telepon" class="w-14 md:w-16 h-14 md:h-16 object-contain">
                        <div>
                            <p class="font-bold">Telepon</p>
                            <p>+62 813-2203-3615</p>
                        </div>
                    </li>

                    <!-- Email -->
                    <li class="flex items-start gap-6">
                        <img src="{{ asset('img/email.png') }}" alt="Email" class="w-14 md:w-16 h-14 md:h-16 object-contain">
                        <div>
                            <p class="font-bold">Email</p>
                            <p>smpn1cimaung@gmail.com</p>
                        </div>
                    </li>

                    <!-- Alamat -->
                    <li class="flex items-start gap-6">
                        <img src="{{ asset('img/lokasi.png') }}" alt="Lokasi" class="w-14 md:w-16 h-14 md:h-16 object-contain">
                        <div>
                            <p class="font-bold">Alamat</p>
                            <p>Jl. Pangalengan, Kp Jl. Lamping, RT.2/RW.6, Desa Cipinang, Kec. Cimaung, Kabupaten Bandung, Jawa Barat 40374</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>
