<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 1 CIMAUNG</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-screen flex flex-col">
    
    <div class="flex-grow flex flex-col">
        <x-navbar/>

        <main class="flex-grow">
            {{ $slot }}
        </main>
    </div>

    <x-footer/>
</body>
</html>
