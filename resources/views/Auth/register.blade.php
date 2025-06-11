<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Registrasi - CineStream</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(15, 15, 15, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .elegant-gradient {
            background: linear-gradient(135deg, #d4af37 0%, #f4e4a6 100%);
        }

        .text-elegant {
            color: #d4af37;
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-black text-white font-['Inter'] min-h-screen flex items-center justify-center px-4">

    <div class="glass-effect p-10 rounded-2xl shadow-xl w-full max-w-lg fade-in-up">
        <div class="mb-8 text-center">
            <!-- Logo kotak berupa ikon movie -->
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 elegant-gradient rounded-lg flex items-center justify-center shadow-lg">
                    <!-- Ikon Movie SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-black" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M4 4h2l1 2h3L9 4h2l1 2h3l-1-2h2l1 2h3l-1-2h2v16H4V4zm2 6v8h12v-8H6z" />
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-semibold mb-2">Registrasi Member</h2>
            <p class="text-gray-400 text-sm">Daftar akun untuk menikmati fitur CineStream</p>
        </div>

        <form action="{{ route('register.post') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm mb-1">Nama Lengkap</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-3 rounded-lg bg-black/30 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-elegant"
                    placeholder="Masukkan nama lengkap">
            </div>
            <div>
                <label for="email" class="block text-sm mb-1">Alamat Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-3 rounded-lg bg-black/30 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-elegant"
                    placeholder="Masukkan email aktif">
            </div>
            <div>
                <label for="nomor_telepon" class="block text-sm mb-1">Nomor Telepon</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" required
                    class="w-full px-4 py-3 rounded-lg bg-black/30 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-elegant"
                    placeholder="08xxxxxxxxxx">
            </div>
            <div>
                <label for="password" class="block text-sm mb-1">Kata Sandi</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg bg-black/30 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-elegant"
                    placeholder="Masukkan kata sandi">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm mb-1">Ulangi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-3 rounded-lg bg-black/30 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-elegant"
                    placeholder="Ulangi kata sandi">
            </div>
            <button type="submit"
                class="w-full py-3 rounded-full elegant-gradient text-black font-semibold hover:scale-105 transition-transform duration-300">
                Daftar Sekarang
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-400">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-elegant font-medium hover:underline">Login di sini</a>
        </div>
    </div>
</body>

</html>
