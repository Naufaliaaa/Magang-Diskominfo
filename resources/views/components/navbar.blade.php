<nav class="bg-gradient-to-br from-blue-400 to-blue-600 text-white shadow-sm" x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-24 items-center">
            <!-- Logo dan Nama Sekolah -->
            <div class="flex items-center space-x-4">
                <a href="/" class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="h-16 w-auto" src="/img/logo.png" alt="Logo">
                    </div>
                    <span class="text-xl font-bold hidden sm:block">SMPN 1 CIMAUNG</span>
                </a>
            </div>

            <!-- Navigasi Tengah -->
            <div class="flex flex-1 justify-center">
                <!-- Menu Desktop -->
                <div class="hidden md:block">
                    <div class="flex space-x-8">
                        <a href="/" class="hover:text-orange-300 px-4 py-3 text-base font-medium">Beranda</a>
                        <a href="/profile" class="hover:text-orange-300 px-4 py-3 text-base font-medium">Profile</a>
                        <a href="/artikel" class="hover:text-orange-300 px-4 py-3 text-base font-medium">Artikel</a>
                        <a href="/informasi" class="hover:text-orange-300 px-4 py-3 text-base font-medium">Informasi</a>
                        <a href="/kontak" class="hover:text-orange-300 px-4 py-3 text-base font-medium">Kontak</a>
                    </div>
                </div>
            </div>

            <!-- Tombol Mobile -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                    class="relative inline-flex items-center justify-center rounded-md p-2 hover:bg-blue-500 focus:outline-none"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Buka menu</span>
                    <svg x-show="!mobileMenuOpen" class="block h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="block h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div x-show="mobileMenuOpen" class="md:hidden bg-gradient-to-br from-blue-400 to-blue-600 text-white" id="mobile-menu">
        <div class="space-y-2 px-4 pb-4 pt-3 sm:px-5">
            <a href="/" class="block rounded-md px-4 py-3 text-lg font-medium bg-blue-500/20 hover:bg-blue-500/30">Beranda</a>
            <a href="/profile" class="block rounded-md px-4 py-3 text-lg font-medium hover:bg-blue-500/30">Profile</a>
            <a href="/artikel" class="block rounded-md px-4 py-3 text-lg font-medium hover:bg-blue-500/30">Artikel</a>
            <a href="/informasi" class="block rounded-md px-4 py-3 text-lg font-medium hover:bg-blue-500/30">Informasi</a>
            <a href="/kontak" class="block rounded-md px-4 py-3 text-lg font-medium hover:bg-blue-500/30">Kontak</a>
        </div>
    </div>
</nav>
