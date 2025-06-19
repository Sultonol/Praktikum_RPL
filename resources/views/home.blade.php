<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cinemation - Premium Cinema Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cinema: {
                            50: '#fefce8',
                            100: '#fef9c3',
                            200: '#fef08a',
                            300: '#fde047',
                            400: '#facc15',
                            500: '#eab308',
                            600: '#ca8a04',
                            700: '#a16207',
                            800: '#854d0e',
                            900: '#713f12',
                        },
                        dark: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                        body: ['Roboto', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'scale-in': 'scaleIn 0.5s ease-out',
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 3s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.95)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(234, 179, 8, 0.2)' },
                            '100%': { boxShadow: '0 0 40px rgba(234, 179, 8, 0.4)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            background-attachment: fixed;
        }

        .glass-effect {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(234, 179, 8, 0.1);
        }

        .cinema-card {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.95), rgba(15, 23, 42, 0.95));
            backdrop-filter: blur(15px);
            border: 1px solid rgba(234, 179, 8, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .cinema-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(234, 179, 8, 0.2);
            border-color: rgba(234, 179, 8, 0.3);
        }

        .btn-cinema {
            background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%);
            box-shadow: 0 4px 15px rgba(234, 179, 8, 0.3);
            transition: all 0.3s ease;
        }

        .btn-cinema:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(234, 179, 8, 0.4);
        }

        .btn-outline-cinema {
            border: 1px solid rgba(234, 179, 8, 0.4);
            color: #eab308;
            transition: all 0.3s ease;
        }

        .btn-outline-cinema:hover {
            border-color: #eab308;
            background: rgba(234, 179, 8, 0.1);
            color: #facc15;
        }

        .text-gradient-cinema {
            background: linear-gradient(135deg, #eab308 0%, #facc15 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo-glow {
            filter: drop-shadow(0 0 20px rgba(234, 179, 8, 0.4));
        }

        .floating-element {
            animation: float 8s ease-in-out infinite;
        }

        .floating-element:nth-child(2) {
            animation-delay: -2s;
        }

        .floating-element:nth-child(3) {
            animation-delay: -4s;
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.8) 0%, rgba(30, 41, 59, 0.8) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(234, 179, 8, 0.1);
        }

        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(30, 41, 59, 0.5);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #eab308, #ca8a04);
            border-radius: 10px;
        }

        .movie-poster {
            aspect-ratio: 2/3;
            object-fit: cover;
        }
    </style>
</head>

<body class="font-body text-slate-100 overflow-x-hidden">
    <!-- Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-64 h-64 bg-cinema-500/10 rounded-full blur-3xl floating-element"></div>
        <div class="absolute bottom-20 right-20 w-80 h-80 bg-cinema-400/5 rounded-full blur-3xl floating-element"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cinema-600/5 rounded-full blur-3xl floating-element"></div>
    </div>

    <!-- Header -->
    <header class="fixed top-0 w-full z-50 glass-effect shadow-2xl animate-fade-in">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <div class="logo-glow">
                    <div class="w-12 h-12 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-lg flex items-center justify-center shadow-xl">
                        <i class="fas fa-film text-dark-900 text-xl"></i>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl font-serif font-bold text-white tracking-tight">CINESTREAM</h1>
                    <p class="text-xs text-cinema-400 font-medium tracking-widest uppercase">Cinema Experience</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-cinema-500 font-semibold text-sm uppercase tracking-wide relative">
                    Dashboard
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                </a>
                <a href="#films" class="text-slate-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Film
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#about" class="text-slate-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    About
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#contact" class="text-slate-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Contact Us
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
            </nav>

            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-cinema px-6 py-2.5 text-sm font-semibold text-dark-900 rounded-lg">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg">
                            Sign In
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-cinema px-6 py-2.5 text-sm font-semibold text-dark-900 rounded-lg">
                                Sign Up
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center pt-20 pb-16 px-6">
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="hero-section rounded-3xl p-12 md:p-16 text-center animate-fade-in">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 glass-effect rounded-full text-sm font-medium text-cinema-500 border border-cinema-500/30 mb-8">
                    <i class="fas fa-star mr-2"></i>
                    Premium Cinema Experience
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 leading-tight">
                    <span class="text-white">Nikmati Pengalaman</span><br>
                    <span class="text-gradient-cinema">Cinema Terbaik</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-slate-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                    Rasakan sensasi menonton film dengan kualitas premium, teknologi terdepan, 
                    dan kenyamanan yang tak tertandingi di Cinemation.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-cinema px-8 py-4 text-lg font-bold text-dark-900 rounded-xl inline-flex items-center space-x-3">
                            <i class="fas fa-play"></i>
                            <span>Mulai Menonton</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="btn-cinema px-8 py-4 text-lg font-bold text-dark-900 rounded-xl inline-flex items-center space-x-3">
                            <i class="fas fa-ticket-alt"></i>
                            <span>Bergabung Sekarang</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    @endauth
                    <button class="btn-outline-cinema px-8 py-4 text-lg font-semibold rounded-xl inline-flex items-center space-x-3">
                        <i class="fas fa-play-circle"></i>
                        <span>Lihat Trailer</span>
                    </button>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-2xl mx-auto">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-gradient-cinema mb-2">500+</div>
                        <div class="text-slate-400 font-medium">Film Premium</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-gradient-cinema mb-2">50K+</div>
                        <div class="text-slate-400 font-medium">Member Aktif</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-gradient-cinema mb-2">4.9★</div>
                        <div class="text-slate-400 font-medium">Rating Pengguna</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Films Section -->
    <section id="films" class="py-20 px-6 animate-slide-up">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">
                    Film <span class="text-gradient-cinema">Unggulan</span>
                </h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                    Koleksi film terbaik yang dipilih khusus untuk pengalaman menonton yang tak terlupakan
                </p>
                <div class="w-20 h-1 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full mx-auto mt-6"></div>
            </div>

            <!-- Movie Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @php
                    $movies = [
                        ['title' => 'Agak Laen', 'year' => '2024', 'rating' => '9.2', 'genre' => 'Action'],
                        ['title' => 'Bolehkah Sekali ku Menangis', 'year' => '2024', 'rating' => '9.0', 'genre' => 'Action'],
                        ['title' => 'Jendela Seribu Sungai', 'year' => '2024', 'rating' => '8.8', 'genre' => 'Sci-Fi'],
                        ['title' => 'Gundala', 'year' => '2024', 'rating' => '8.6', 'genre' => 'Drama'],
                        ['title' => 'Ketika Berhenti disini', 'year' => '2024', 'rating' => '8.5', 'genre' => 'Thriller'],
                        ['title' => 'Siksa Nerka', 'year' => '2024', 'rating' => '8.4', 'genre' => 'Drama'],
                        ['title' => 'Pabrik Gula Uncut', 'year' => '2024', 'rating' => '8.7', 'genre' => 'Action'],
                        ['title' => 'Pabrik Gula', 'year' => '2024', 'rating' => '8.3', 'genre' => 'Sci-Fi'],
                        ['title' => 'Agak Laen', 'year' => '2024', 'rating' => '8.9', 'genre' => 'Action'],
                        ['title' => 'Bolehkah Saja ku Menangis', 'year' => '2024', 'rating' => '8.1', 'genre' => 'Adventure']
                    ];
                @endphp

                @foreach($movies as $index => $movie)
                    <div class="group cinema-card rounded-xl overflow-hidden cursor-pointer animate-scale-in" style="animation-delay: {{ $index * 0.1 }}s">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('img/gambar' . (($index % 8) + 1) . '.jpeg') }}" alt="{{ $movie['title'] }}" 
                                 class="w-full movie-poster transition-transform duration-500 group-hover:scale-110" />
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                            
                            <!-- Play Button -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <div class="w-14 h-14 bg-cinema-500 rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300 shadow-xl">
                                    <i class="fas fa-play text-dark-900 text-lg ml-0.5"></i>
                                </div>
                            </div>
                            
                            <!-- Rating Badge -->
                            <div class="absolute top-3 right-3">
                                <span class="inline-flex items-center px-2 py-1 bg-black/70 backdrop-blur-sm text-cinema-400 text-xs font-bold rounded">
                                    <i class="fas fa-star mr-1"></i>{{ $movie['rating'] }}
                                </span>
                            </div>
                            
                            <!-- Genre Badge -->
                            <div class="absolute top-3 left-3">
                                <span class="inline-flex items-center px-2 py-1 bg-cinema-600 text-white text-xs font-bold rounded uppercase">
                                    {{ $movie['genre'] }}
                                </span>
                            </div>
                        </div>
                        
                        <!-- Movie Info -->
                        <div class="p-4 space-y-2">
                            <h3 class="text-sm font-bold text-white group-hover:text-cinema-400 transition-colors duration-300 line-clamp-2">
                                {{ $movie['title'] }}
                            </h3>
                            <p class="text-xs text-slate-400">{{ $movie['year'] }} • {{ $movie['genre'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn-cinema px-8 py-3 text-lg font-semibold text-dark-900 rounded-xl inline-flex items-center space-x-2">
                        <span>Lihat Semua Film</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-cinema px-8 py-3 text-lg font-semibold text-dark-900 rounded-xl inline-flex items-center space-x-2">
                        <span>Masuk untuk Melihat Semua</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                @endauth
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="about" class="py-20 px-6 bg-gradient-to-b from-transparent to-dark-900/50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">
                    Mengapa <span class="text-gradient-cinema">Cinemation?</span>
                </h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                    Pengalaman menonton yang tak tertandingi dengan teknologi dan layanan terdepan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="cinema-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-film text-dark-900 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Kualitas Premium</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Nikmati film dengan kualitas 4K Ultra HD dan sistem audio Dolby Atmos untuk pengalaman sinematik terbaik.
                    </p>
                </div>

                <div class="cinema-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-couch text-dark-900 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Kenyamanan Maksimal</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Kursi premium yang ergonomis dengan teknologi reclining dan sistem kontrol suhu individual.
                    </p>
                </div>

                <div class="cinema-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-crown text-dark-900 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Layanan VIP</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Layanan concierge 24/7, makanan premium, dan pengalaman eksklusif untuk member VIP.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="hero-section rounded-3xl p-12 text-center">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
                    Siap untuk <span class="text-gradient-cinema">Pengalaman Terbaik?</span>
                </h2>
                <p class="text-xl text-slate-300 mb-8 max-w-2xl mx-auto">
                    Bergabunglah dengan ribuan member yang telah merasakan pengalaman cinema premium di Cinemation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-cinema px-8 py-4 text-lg font-bold text-dark-900 rounded-xl">
                            <i class="fas fa-play mr-2"></i>Mulai Menonton
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="btn-cinema px-8 py-4 text-lg font-bold text-dark-900 rounded-xl">
                            <i class="fas fa-user-plus mr-2"></i>Daftar Gratis
                        </a>
                        <a href="{{ route('login') }}" class="btn-outline-cinema px-8 py-4 text-lg font-semibold rounded-xl">
                            <i class="fas fa-sign-in-alt mr-2"></i>Masuk
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gradient-to-t from-dark-950 to-dark-900 py-16 px-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-lg flex items-center justify-center shadow-xl">
                            <i class="fas fa-film text-dark-900 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-white">CINEMATION</h3>
                            <p class="text-xs text-cinema-400 font-medium tracking-widest uppercase">Cinema Experience</p>
                        </div>
                    </div>
                    <p class="text-slate-400 leading-relaxed max-w-md">
                        Cinemation menghadirkan pengalaman menonton premium dengan teknologi terdepan, 
                        kenyamanan maksimal, dan koleksi film terbaik untuk para pecinta sinema.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-slate-400 hover:text-cinema-500 hover:bg-cinema-500/10 transition-all duration-300">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-slate-400 hover:text-cinema-500 hover:bg-cinema-500/10 transition-all duration-300">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-slate-400 hover:text-cinema-500 hover:bg-cinema-500/10 transition-all duration-300">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-slate-400 hover:text-cinema-500 hover:bg-cinema-500/10 transition-all duration-300">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold mb-4 relative">
                        Menu
                        <span class="absolute -bottom-1 left-0 w-6 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                    </h4>
                    <ul class="space-y-2 text-slate-400 text-sm">
                        <li><a href="#home" class="hover:text-cinema-500 transition-colors">Beranda</a></li>
                        <li><a href="#films" class="hover:text-cinema-500 transition-colors">Film</a></li>
                        <li><a href="#about" class="hover:text-cinema-500 transition-colors">Tentang Kami</a></li>
                        <li><a href="#contact" class="hover:text-cinema-500 transition-colors">Kontak</a></li>
                    </ul>
                </div>
                
                <!-- Support -->
                <div>
                    <h4 class="text-white font-bold mb-4 relative">
                        Bantuan
                        <span class="absolute -bottom-1 left-0 w-6 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                    </h4>
                    <ul class="space-y-2 text-slate-400 text-sm">
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-slate-800 pt-6 text-center">
                <p class="text-slate-500 text-sm">
                    &copy; 2024 Cinemation. All rights reserved. Crafted with <i class="fas fa-heart text-red-400 mx-1"></i> for cinema lovers.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header background on scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(15, 23, 42, 0.95)';
            } else {
                header.style.background = 'rgba(15, 23, 42, 0.85)';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.animate-slide-up, .animate-scale-in').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            observer.observe(el);
        });
    </script>
</body>

</html>