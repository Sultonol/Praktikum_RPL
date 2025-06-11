<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - CineStream</title>
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

    <div class="glass-effect p-10 rounded-2xl shadow-xl w-full max-w-md fade-in-up">
        <div class="mb-8 text-center">
            <!-- Logo kotak berupa ikon movie -->
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 elegant-gradient rounded-lg flex items-center justify-center shadow-lg">
                    <!-- Ikon movie SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-black" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M4 4h2l1 2h3L9 4h2l1 2h3l-1-2h2l1 2h3l-1-2h2v16H4V4zm2 6v8h12v-8H6z" />
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-semibold mb-2">Login Akun</h2>
            <p class="text-gray-400 text-sm">Masuk untuk melanjutkan ke CineStream</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-900 border border-red-500 text-red-200 px-4 py-3 rounded mb-5 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-900 border border-green-500 text-green-200 px-4 py-3 rounded mb-5 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="block text-sm mb-1">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-3 rounded-lg bg-black/30 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-elegant"
                    placeholder="Masukkan email">
            </div>
            <div>
                <label for="password" class="block text-sm mb-1">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-3 rounded-lg bg-black/30 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-elegant"
                    placeholder="Masukkan password">
            </div>
            <button type="submit"
                class="w-full py-3 rounded-full elegant-gradient text-black font-semibold hover:scale-105 transition-transform duration-300">
                Masuk
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-400">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-elegant font-medium hover:underline">Daftar Sekarang</a>
        </div>
    </div>
</body>

</html>
