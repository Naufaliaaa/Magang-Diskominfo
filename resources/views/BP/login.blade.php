<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .star-twinkle {
            animation: twinkle 3s infinite;
        }

        .star-twinkle:nth-child(odd) { animation-delay: 0.5s; }
        .star-twinkle:nth-child(even) { animation-delay: 1.5s; }

        .glass-morphism {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .bg-gradient-night {
            background: linear-gradient(135deg, #5b7cfa 0%, #4c6ef5 50%, #4263eb 100%);
        }

        .form-container {
            animation: float 6s ease-in-out infinite;
        }

        .input-focus:focus {
            border-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-night relative overflow-hidden">

    <!-- Animated Stars -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[10%] left-[20%]"></div>
        <div class="star-twinkle absolute w-2 h-2 bg-white rounded-full top-[15%] left-[80%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[25%] left-[60%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[30%] left-[10%]"></div>
        <div class="star-twinkle absolute w-2 h-2 bg-white rounded-full top-[40%] left-[90%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[50%] left-[40%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[60%] left-[70%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[20%] left-[30%]"></div>
        <div class="star-twinkle absolute w-2 h-2 bg-white rounded-full top-[35%] left-[50%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[45%] left-[15%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[55%] left-[85%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[65%] left-[25%]"></div>
        <div class="star-twinkle absolute w-2 h-2 bg-white rounded-full top-[18%] left-[45%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[28%] left-[75%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[38%] left-[35%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[8%] left-[65%]"></div>
        <div class="star-twinkle absolute w-2 h-2 bg-white rounded-full top-[12%] left-[55%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[22%] left-[85%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[32%] left-[5%]"></div>
        <div class="star-twinkle absolute w-1 h-1 bg-white rounded-full top-[42%] left-[95%]"></div>
        <div class="star-twinkle absolute top-[5%] left-[10%] text-white text-lg font-light">+</div>
        <div class="star-twinkle absolute top-[15%] left-[90%] text-white text-lg font-light">+</div>
        <div class="star-twinkle absolute top-[35%] left-[8%] text-white text-lg font-light">+</div>
        <div class="star-twinkle absolute top-[25%] left-[92%] text-white text-lg font-light">+</div>
        <div class="star-twinkle absolute top-[45%] left-[3%] text-white text-lg font-light">+</div>
    </div>

    <!-- Login Form -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-4">
        <div class="form-container glass-morphism w-full max-w-sm sm:max-w-md rounded-2xl p-8 shadow-2xl">

            <!-- Logo & Nama Sekolah -->
            <div class="flex items-center justify-center mb-6 gap-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Sekolah" class="w-12 h-12 object-contain">
                <span class="text-white text-xl sm:text-2xl font-bold tracking-wide">SMPN 1 CIMAUNG</span>
            </div>

            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-white text-2xl sm:text-3xl font-bold tracking-tight">Selamat datang kembali</h2>
                <p class="text-white/70 text-sm mt-2">Masukan Email dan password dengan benar</p>
            </div>

            <form method="POST" action="#" class="space-y-6">
                <!-- Email -->
                <div>
                    <label for="email" class="block text-white text-sm font-medium mb-2">Alamat Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="input-focus w-full bg-white/10 text-white border border-white/20 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-white/50 placeholder-white/50"
                        placeholder="Masukan Email Sekolah"
                        required 
                        autofocus
                    />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-white text-sm font-medium mb-2">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        class="input-focus w-full bg-white/10 text-white border border-white/20 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-white/50 placeholder-white/50"
                        placeholder="Masukan password"
                        required
                    />
                </div>

                <!-- Lupa password -->
                <div class="text-center">
                    <a href="https://wa.me/6283829586688" target="_blank" class="text-white/80 hover:text-white text-sm transition-colors duration-300">
                        Jika lupa password-nya hubungi admin
                    </a>

                </div>

                <!-- Tombol -->
                <button 
                    type="submit" 
                    class="btn-hover w-full bg-white text-[#4f90e3] font-semibold py-3 px-6 rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-lg"
                >
                    Masuk
                </button>


            </form>
        </div>
    </div>
</body>
</html>
