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
                        primary: {
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
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'scale-in': 'scaleIn 0.4s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(10px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        slideUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        scaleIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'scale(0.95)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'scale(1)'
                            },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            background-attachment: fixed;
        }

        .glass-effect {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(234, 179, 8, 0.1);
        }

        .cinema-card {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.95), rgba(15, 23, 42, 0.95));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(234, 179, 8, 0.15);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .cinema-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(234, 179, 8, 0.2);
            border-color: rgba(234, 179, 8, 0.3);
        }

        .btn-cinema {
            background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%);
            box-shadow: 0 4px 15px rgba(234, 179, 8, 0.3);
            transition: all 0.3s ease;
        }

        .btn-cinema:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(234, 179, 8, 0.4);
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

        .btn-outline-cinema.active {
            border-color: #eab308;
            background: rgba(234, 179, 8, 0.15);
            color: #eab308;
        }

        .text-gradient-cinema {
            background: linear-gradient(135deg, #eab308 0%, #facc15 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo-cinema {
            filter: drop-shadow(0 0 15px rgba(234, 179, 8, 0.4));
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

        .movie-card {
            opacity: 1;
            transition: all 0.4s ease;
        }

        .movie-card.hidden {
            opacity: 0;
            transform: scale(0.9);
            pointer-events: none;
        }

        .cinema-header {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(30, 41, 59, 0.95) 100%);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(234, 179, 8, 0.2);
        }

        .movie-poster {
            aspect-ratio: 2/3;
            object-fit: cover;
        }

        .showtime-badge {
            background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%);
            color: #0f172a;
            font-weight: 600;
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .showtime-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(234, 179, 8, 0.4);
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.8) 0%, rgba(30, 41, 59, 0.8) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(234, 179, 8, 0.1);
        }
    </style>
</head>

<body class="font-body text-gray-100 overflow-x-hidden">
    <!-- Header -->
    <header class="fixed top-0 w-full z-50 cinema-header shadow-2xl animate-fade-in">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <div class="logo-cinema">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-lg flex items-center justify-center shadow-xl">
                        <i class="fas fa-film text-dark-900 text-xl"></i>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl font-serif font-bold text-white tracking-tight">CINESTREAM</h1>
                    <p class="text-xs text-cinema-400 font-medium tracking-widest uppercase">Cinema Experience</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('dashboard') }}"
                    class="relative text-cinema-500 font-semibold text-sm uppercase tracking-wide">
                    Dashboard
                    <span
                        class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                </a>
                <a href="{{ route('film.index') }}"
                    class="text-gray-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Film
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('tiket') }}"
                    class="text-gray-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    My Ticket
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
            </nav>

            <!-- User Section -->
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <div class="relative">
                    <button
                        class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center hover:bg-cinema-500/10 transition-all duration-300 group">
                        <i class="fas fa-bell text-gray-400 group-hover:text-cinema-500 transition-colors text-sm"></i>
                    </button>
                    <span
                        class="absolute -top-1 -right-1 w-4 h-4 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center text-xs font-bold text-white">3</span>
                </div>

                <!-- User Profile -->
                <div class="flex items-center space-x-3 px-4 py-2 glass-effect rounded-lg">
                    <img src="https://i.pravatar.cc/32?img=3" alt="Profile"
                        class="w-8 h-8 rounded-full object-cover ring-2 ring-cinema-500/30">
                    <div class="hidden sm:block">
                        <div class="text-sm font-semibold text-white">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-cinema-400 font-medium">Member</div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" class="ml-2">
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-red-400 transition-colors p-1"
                            title="Logout">
                            <i class="fas fa-sign-out-alt text-sm"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-24 pb-20 px-6">
        <div class="max-w-7xl mx-auto">
            
            <!-- Hero Section -->
            <section class="mb-12 animate-fade-in">
                <div class="hero-section rounded-2xl p-8 md:p-12 text-center">
                    <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">
                        Selamat Datang di <span class="text-gradient-cinema">CINEMATION</span>
                    </h1>
                    <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-6">
                        Nikmati pengalaman menonton terbaik dengan teknologi terdepan dan kenyamanan premium
                    </p>
                    <div class="flex justify-center space-x-4">
                        <button class="btn-cinema px-8 py-3 text-sm font-semibold text-dark-900 rounded-lg">
                            <i class="fas fa-ticket-alt mr-2"></i>Beli Tiket Sekarang
                        </button>
                        <button class="btn-outline-cinema px-8 py-3 text-sm font-medium rounded-lg">
                            <i class="fas fa-play mr-2"></i>Lihat Trailer
                        </button>
                    </div>
                </div>
            </section>

            <!-- Category Filters -->
            <div class="flex flex-wrap justify-center gap-3 mb-12 animate-slide-up">
                <button onclick="filterMovies('all')"
                    class="genre-btn btn-outline-cinema px-6 py-2.5 text-sm font-semibold rounded-lg active"
                    data-genre="all">
                    Semua Film
                </button>
                <button onclick="filterMovies('trending')"
                    class="genre-btn btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg"
                    data-genre="trending">
                    Trending
                </button>
                <button onclick="filterMovies('action')"
                    class="genre-btn btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg" data-genre="action">
                    Action
                </button>
                <button onclick="filterMovies('romance')"
                    class="genre-btn btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg"
                    data-genre="romance">
                    Romance
                </button>
                <button onclick="filterMovies('animation')"
                    class="genre-btn btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg"
                    data-genre="animation">
                    Animation
                </button>
                <button onclick="filterMovies('horror')"
                    class="genre-btn btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg" data-genre="horror">
                    Horror
                </button>
                <button onclick="filterMovies('drama')"
                    class="genre-btn btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg" data-genre="drama">
                    Drama
                </button>
            </div>

            <!-- Now Playing Section -->
            <section class="mb-16 animate-slide-up">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-3xl font-serif font-bold text-white mb-2">
                            Sedang Tayang
                        </h2>
                        <p class="text-gray-400 text-lg">Film-film terbaru yang sedang tayang di bioskop</p>
                        <div class="w-16 h-1 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full mt-3"></div>
                    </div>
                    <a href="{{ route('film.index') }}"
                        class="btn-cinema px-6 py-3 text-sm font-semibold text-dark-900 inline-flex items-center space-x-2 rounded-lg">
                        <span>Lihat Semua</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Movie Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    @php
                        $genres = ['trending', 'action', 'romance', 'animation', 'horror', 'drama'];
                        $movieTitles = [
                            'trending' => [
                                'Avengers: Endgame',
                                'Spider-Man: No Way Home',
                                'Top Gun: Maverick',
                                'Avatar: The Way of Water',
                                'Black Panther',
                            ],
                            'action' => ['John Wick 4', 'Fast X', 'Mission Impossible', 'The Batman', 'Mad Max'],
                            'romance' => ['The Notebook', 'Titanic', 'La La Land', 'A Star is Born', 'Me Before You'],
                            'animation' => ['Frozen 2', 'Toy Story 4', 'Encanto', 'Turning Red', 'Soul'],
                            'horror' => ['The Conjuring', 'It Chapter Two', 'A Quiet Place', 'Hereditary', 'Scream'],
                            'drama' => ['Parasite', 'Joker', 'Green Book', 'Moonlight', 'Manchester by the Sea'],
                        ];
                        $showtimes = ['10:00', '13:00', '16:00', '19:00', '21:30'];
                    @endphp

                    @for ($i = 1; $i <= 15; $i++)
                        @php
                            $genre = $genres[($i - 1) % count($genres)];
                            $titleIndex = ($i - 1) % count($movieTitles[$genre]);
                            $title = $movieTitles[$genre][$titleIndex];
                            $rating = number_format(rand(70, 95) / 10, 1);
                            $duration = rand(90, 180);
                            $hours = floor($duration / 60);
                            $minutes = $duration % 60;
                        @endphp
                        <div class="group cinema-card rounded-xl overflow-hidden cursor-pointer movie-card"
                            data-genre="{{ $genre }}">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('img/gambar' . $i . '.jpeg') }}" alt="{{ $title }}"
                                    class="w-full movie-poster transition-transform duration-500 group-hover:scale-105" />

                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                </div>

                                <!-- Rating Badge -->
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-flex items-center px-2 py-1 bg-black/70 backdrop-blur-sm text-cinema-400 text-xs font-bold rounded">
                                        <i class="fas fa-star mr-1"></i>{{ $rating }}
                                    </span>
                                </div>

                                <!-- Genre Badge -->
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="inline-flex items-center px-2 py-1 bg-cinema-600 text-white text-xs font-bold rounded uppercase">
                                        {{ $genre }}
                                    </span>
                                </div>

                                <!-- Play Button -->
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <div
                                        class="w-12 h-12 bg-cinema-500 rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300 shadow-xl">
                                        <i class="fas fa-play text-dark-900 ml-0.5"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Movie Info -->
                            <div class="p-4 space-y-3">
                                <h3
                                    class="text-sm font-bold text-white group-hover:text-cinema-400 transition-colors duration-300 line-clamp-2">
                                    {{ $title }}
                                </h3>
                                <div class="text-xs text-gray-400 space-y-1">
                                    <p>{{ $hours }}h {{ $minutes }}m • 2024</p>
                                    <p class="uppercase tracking-wide">{{ $genre }}</p>
                                </div>

                                <!-- Showtimes -->
                                <div class="space-y-2">
                                    <p class="text-xs font-semibold text-gray-300 uppercase tracking-wide">Jam Tayang:
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        @foreach (array_slice($showtimes, 0, 3) as $time)
                                            <button class="showtime-badge cursor-pointer">{{ $time }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <!-- Coming Soon Section -->
            <section class="mb-16 animate-slide-up">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-3xl font-serif font-bold text-white mb-2">
                            Segera Tayang
                        </h2>
                        <p class="text-gray-400 text-lg">Film-film yang akan segera hadir di bioskop</p>
                        <div class="w-16 h-1 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full mt-3"></div>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    @for ($i = 16; $i <= 21; $i++)
                        <div class="group cinema-card rounded-xl overflow-hidden cursor-pointer animate-scale-in"
                            style="animation-delay: {{ ($i - 15) * 0.1 }}s">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('img/gambar' . ((($i - 16) % 6) + 1) . '.jpeg') }}"
                                    alt="Coming Soon {{ $i }}"
                                    class="w-full movie-poster transition-transform duration-500 group-hover:scale-105" />

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                </div>

                                <div class="absolute top-3 left-3">
                                    <span
                                        class="inline-flex items-center px-2 py-1 bg-cinema-600 text-white text-xs font-bold rounded uppercase">
                                        Coming Soon
                                    </span>
                                </div>

                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <div
                                        class="w-10 h-10 bg-cinema-500 rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300 shadow-xl">
                                        <i class="fas fa-calendar text-dark-900 text-sm"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 space-y-2">
                                <h3
                                    class="text-sm font-bold text-white group-hover:text-cinema-400 transition-colors duration-300">
                                    Coming Soon {{ $i }}
                                </h3>
                                <p class="text-xs text-gray-400">Desember 2024</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <!-- Promo Section -->
            <section class="mb-16 animate-slide-up">
                <div class="hero-section rounded-2xl p-8 text-center">
                    <h2 class="text-3xl font-serif font-bold text-white mb-4">
                        Promo Spesial <span class="text-gradient-cinema">Hari Ini</span>
                    </h2>
                    <p class="text-lg text-gray-300 mb-6">
                        Dapatkan diskon hingga 50% untuk pembelian tiket hari ini!
                    </p>
                    <div
                        class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                        <div class="bg-cinema-500 text-dark-900 px-6 py-3 rounded-lg font-bold text-lg">
                            Kode: CINEMA50
                        </div>
                        <button class="btn-cinema px-8 py-3 text-sm font-semibold text-dark-900 rounded-lg">
                            <i class="fas fa-ticket-alt mr-2"></i>Gunakan Sekarang
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-t from-dark-950 to-dark-900 py-16 px-6 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-lg flex items-center justify-center shadow-xl">
                            <i class="fas fa-film text-dark-900"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif font-bold text-white">CINEMATION</h3>
                            <p class="text-xs text-cinema-400 font-medium tracking-widest uppercase">Cinema Experience
                            </p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed max-w-md">
                        Nikmati pengalaman menonton terbaik dengan teknologi terdepan,
                        kenyamanan premium, dan layanan berkualitas tinggi.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#"
                            class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-gray-400 hover:text-cinema-500 hover:bg-cinema-500/10 transition-all duration-300">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-gray-400 hover:text-cinema-500 hover:bg-cinema-500/10 transition-all duration-300">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-gray-400 hover:text-cinema-500 hover:bg-cinema-500/10 transition-all duration-300">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold mb-4 relative">
                        Menu
                        <span
                            class="absolute -bottom-1 left-0 w-6 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                    </h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Jadwal Film</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Harga Tiket</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Promo</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Lokasi Bioskop</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-white font-bold mb-4 relative">
                        Bantuan
                        <span
                            class="absolute -bottom-1 left-0 w-6 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                    </h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Syarat & Ketentuan</a>
                        </li>
                        <li><a href="#" class="hover:text-cinema-500 transition-colors">Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 pt-6 text-center">
                <p class="text-gray-500 text-sm">
                    &copy; 2024 Cinemation. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile Navigation -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 glass-effect border-t border-gray-700 z-40">
        <div class="flex justify-around items-center py-3">
            <a href="#" class="flex flex-col items-center text-cinema-500 space-y-1">
                <i class="fas fa-home text-lg"></i>
                <span class="text-xs font-medium">Beranda</span>
            </a>
            <a href="#"
                class="flex flex-col items-center text-gray-400 hover:text-cinema-500 transition-colors space-y-1">
                <i class="fas fa-calendar text-lg"></i>
                <span class="text-xs">Jadwal</span>
            </a>
            <a href="#"
                class="flex flex-col items-center text-gray-400 hover:text-cinema-500 transition-colors space-y-1">
                <i class="fas fa-ticket-alt text-lg"></i>
                <span class="text-xs">Tiket</span>
            </a>
            <a href="#"
                class="flex flex-col items-center text-gray-400 hover:text-cinema-500 transition-colors space-y-1">
                <i class="fas fa-user text-lg"></i>
                <span class="text-xs">Profil</span>
            </a>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Genre filtering functionality
        function filterMovies(genre) {
            const movieCards = document.querySelectorAll('.movie-card');
            const genreButtons = document.querySelectorAll('.genre-btn');

            // Update button states
            genreButtons.forEach(btn => {
                btn.classList.remove('btn-cinema', 'active');
                btn.classList.add('btn-outline-cinema');
            });

            const activeBtn = document.querySelector(`[data-genre="${genre}"]`);
            activeBtn.classList.remove('btn-outline-cinema');
            activeBtn.classList.add('btn-cinema', 'active');

            // Filter movies with animation
            movieCards.forEach((card, index) => {
                setTimeout(() => {
                    if (genre === 'all' || card.dataset.genre === genre) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                }, index * 50);
            });
        }

        // Showtime button interactions
        document.addEventListener('DOMContentLoaded', function() {
            const showtimeButtons = document.querySelectorAll('.showtime-badge');
            showtimeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Here you can add functionality to handle showtime selection
                    console.log('Selected showtime:', this.textContent);
                    // You can redirect to booking page or show booking modal
                });
            });
        });

        // Initialize
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>
</body>

</html>
