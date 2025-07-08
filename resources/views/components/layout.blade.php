<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ $title ?? 'SMPN 1 CIMAUNG' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Inter Font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-screen flex flex-col">

    <div class="flex-grow flex flex-col">
        <!-- Navbar Komponen -->
        <x-navbar></x-navbr>

        <!-- Halaman Utama -->
        <main class="flex-grow">
            {{ $slot }}
        </main>
    </div>

    <!-- Footer Komponen -->
    <x-footer></x-footer>
    
</body>
</html>
