<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Film Sedang Tayang - Cinemation</title>
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
                        'shimmer': 'shimmer 2s linear infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'shake': 'shake 0.5s ease-in-out',
                        'slide-left': 'slideLeft 0.3s ease-out',
                        'bounce-x': 'bounceX 0.6s ease-out',
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
                        slideLeft: {
                            '0%': { transform: 'translateX(10px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        bounceX: {
                            '0%, 20%, 50%, 80%, 100%': { transform: 'translateX(0)' },
                            '40%': { transform: 'translateX(-4px)' },
                            '60%': { transform: 'translateX(-2px)' },
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
                        },
                        shimmer: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100%)' },
                        },
                        shake: {
                            '0%, 100%': { transform: 'translateX(0)' },
                            '25%': { transform: 'translateX(-5px)' },
                            '75%': { transform: 'translateX(5px)' },
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
            border: 2px solid rgba(234, 179, 8, 0.4);
            color: #eab308;
            background: rgba(234, 179, 8, 0.05);
            transition: all 0.3s ease;
        }

        .btn-outline-cinema:hover {
            border-color: #eab308;
            background: rgba(234, 179, 8, 0.15);
            color: #facc15;
            transform: translateY(-1px);
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

        .movie-poster {
            aspect-ratio: 2/3;
            object-fit: cover;
        }

        .overlay-gradient {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.9) 0%, rgba(234, 179, 8, 0.1) 100%);
        }

        .modal-backdrop {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
        }

        .modal-content {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.98), rgba(15, 23, 42, 0.98));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(234, 179, 8, 0.2);
        }

        .age-rating {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            box-shadow: 0 2px 8px rgba(220, 38, 38, 0.3);
        }

        .now-showing-badge {
            background: linear-gradient(135deg, #10b981, #059669);
            animation: pulse-slow 3s infinite;
        }

        .genre-tag {
            background: rgba(234, 179, 8, 0.1);
            border: 1px solid rgba(234, 179, 8, 0.3);
            color: #eab308;
        }

        /* Genre-specific colors */
        .genre-aksi {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        .genre-drama {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #3b82f6;
        }

        .genre-komedi {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: #22c55e;
        }

        .genre-romantis {
            background: rgba(236, 72, 153, 0.1);
            border: 1px solid rgba(236, 72, 153, 0.3);
            color: #ec4899;
        }

        .genre-horor {
            background: rgba(139, 69, 19, 0.1);
            border: 1px solid rgba(139, 69, 19, 0.3);
            color: #8b4513;
        }

        .genre-animasi {
            background: rgba(168, 85, 247, 0.1);
            border: 1px solid rgba(168, 85, 247, 0.3);
            color: #a855f7;
        }

        .showtime-slot {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(148, 163, 184, 0.2);
            transition: all 0.3s ease;
        }

        .showtime-slot:hover {
            border-color: rgba(234, 179, 8, 0.5);
            background: rgba(234, 179, 8, 0.1);
            color: #eab308;
        }

        /* Warning Modal Styles */
        .warning-modal {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.98), rgba(15, 23, 42, 0.98));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(234, 179, 8, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .warning-icon {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            animation: pulse 2s infinite;
        }

        /* Enhanced Back Button Styles */
        .back-button-enhanced {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9));
            backdrop-filter: blur(15px);
            border: 1px solid rgba(234, 179, 8, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .back-button-enhanced::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(234, 179, 8, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .back-button-enhanced:hover::before {
            left: 100%;
        }

        .back-button-enhanced:hover {
            transform: translateY(-3px) scale(1.02);
            border-color: rgba(234, 179, 8, 0.6);
            box-shadow: 0 12px 40px rgba(234, 179, 8, 0.2);
            background: linear-gradient(145deg, rgba(234, 179, 8, 0.15), rgba(30, 41, 59, 0.9));
        }

        .back-button-enhanced .back-icon {
            transition: all 0.3s ease;
            filter: drop-shadow(0 0 8px rgba(234, 179, 8, 0.3));
        }

        .back-button-enhanced:hover .back-icon {
            transform: translateX(-4px) scale(1.1);
            color: #facc15;
            filter: drop-shadow(0 0 12px rgba(234, 179, 8, 0.6));
        }

        .back-button-enhanced .back-text {
            transition: all 0.3s ease;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .back-button-enhanced:hover .back-text {
            color: #facc15;
            transform: translateX(-2px);
        }

        .back-button-enhanced .back-accent {
            position: absolute;
            top: 50%;
            left: 8px;
            transform: translateY(-50%);
            width: 2px;
            height: 20px;
            background: linear-gradient(to bottom, #eab308, #ca8a04);
            border-radius: 1px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .back-button-enhanced:hover .back-accent {
            opacity: 1;
            height: 30px;
            box-shadow: 0 0 10px rgba(234, 179, 8, 0.5);
        }

        /* Breadcrumb Style Enhancement */
        .breadcrumb-back {
            background: rgba(234, 179, 8, 0.1);
            border: 1px solid rgba(234, 179, 8, 0.2);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .breadcrumb-back:hover {
            background: rgba(234, 179, 8, 0.2);
            border-color: rgba(234, 179, 8, 0.4);
            transform: translateY(-1px);
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
    </style>
</head>

<body class="font-body text-slate-100 overflow-x-hidden min-h-screen">
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
                <a href="/dashboard" class="text-slate-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Dashboard
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#" class="text-cinema-500 font-semibold text-sm uppercase tracking-wide relative">
                    Film
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                </a>
                <a href="#" onclick="showScheduleWarning()" class="text-slate-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group cursor-pointer">
                    Jadwal
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
            </nav>

            <!-- Enhanced Back Button -->
            <div class="flex items-center space-x-4">
                <!-- Breadcrumb Style Back -->
                <div class="hidden lg:flex items-center space-x-2 breadcrumb-back px-3 py-1.5 rounded-lg text-xs">
                    <a href="/dashboard" class="text-cinema-400 hover:text-cinema-300 transition-colors">Dashboard</a>
                    <i class="fas fa-chevron-right text-slate-500 text-xs"></i>
                    <span class="text-slate-300">Film</span>
                </div>

                <!-- Main Enhanced Back Button -->
                <a href="/dashboard" class="back-button-enhanced group relative px-6 py-3 rounded-xl inline-flex items-center space-x-3 animate-slide-left">
                    <!-- Accent Line -->
                    <div class="back-accent"></div>
                    
                    <!-- Icon Container -->
                    <div class="relative">
                        <div class="w-8 h-8 bg-gradient-to-br from-cinema-500/20 to-cinema-700/20 rounded-lg flex items-center justify-center group-hover:from-cinema-500/30 group-hover:to-cinema-700/30 transition-all duration-300">
                            <i class="fas fa-arrow-left back-icon text-cinema-400 text-sm"></i>
                        </div>
                        <!-- Glow Effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-cinema-500/0 to-cinema-700/0 group-hover:from-cinema-500/20 group-hover:to-cinema-700/20 rounded-lg blur-sm transition-all duration-300"></div>
                    </div>
                    
                    <!-- Text -->
                    <div class="flex flex-col">
                        <span class="back-text text-sm text-slate-300 group-hover:text-cinema-300">Kembali</span>
                        <span class="text-xs text-slate-500 group-hover:text-cinema-500 transition-colors duration-300">Dashboard</span>
                    </div>
                    
                    <!-- Hover Indicator -->
                    <div class="absolute top-1 right-1 w-2 h-2 bg-cinema-500/0 group-hover:bg-cinema-500/60 rounded-full transition-all duration-300"></div>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 pt-24 pb-16 px-6">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-12 animate-fade-in">
                <div class="inline-flex items-center px-4 py-2 now-showing-badge rounded-full text-sm font-bold text-white mb-6">
                    <i class="fas fa-play-circle mr-2"></i>
                    Sedang Tayang
                </div>
                <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4 leading-tight">
                    <span class="text-white">Film</span>
                    <span class="text-gradient-cinema">Bioskop</span>
                </h1>
                <p class="text-xl text-slate-400 mb-6 max-w-2xl mx-auto">
                    Pilih film favorit Anda dan pesan tiket untuk pengalaman menonton terbaik di Cinemation
                </p>
                <div class="flex items-center justify-center space-x-6 text-slate-400">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-ticket-alt text-cinema-500"></i>
                        <span>{{ count($films) }} Film Tersedia</span>
                    </span>
                    <span class="w-1 h-1 bg-slate-600 rounded-full"></span>
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-clock text-cinema-500"></i>
                        <span>Jadwal Harian</span>
                    </span>
                    <span class="w-1 h-1 bg-slate-600 rounded-full"></span>
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-couch text-cinema-500"></i>
                        <span>Kursi Premium</span>
                    </span>
                </div>
            </div>

            <!-- Error Message -->
            @if (session('error'))
                <div class="max-w-md mx-auto mb-8 p-4 glass-effect rounded-xl border border-red-500/30 text-center animate-slide-up">
                    <i class="fas fa-exclamation-triangle text-red-400 text-xl mb-2"></i>
                    <p class="text-red-400 font-medium">{{ session('error') }}</p>
                </div>
            @endif

            <!-- Films Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 animate-slide-up">
                @foreach ($films as $index => $film)
                    <div class="group cinema-card rounded-2xl overflow-hidden animate-scale-in" 
                         style="animation-delay: {{ $index * 0.1 }}s">
                        
                        <!-- Movie Poster Section -->
                        <div class="flex">
                            <!-- Poster -->
                            <div class="w-1/3 relative">
                                <img src="{{ asset($film->poster) }}" 
                                     alt="Poster {{ $film->judul }}" 
                                     class="w-full h-64 object-cover" />
                                
                                <!-- Age Rating -->
                                <div class="absolute top-2 left-2">
                                    <span class="age-rating px-2 py-1 text-white text-xs font-bold rounded">
                                        @php
                                            $ageRatings = ['13+', '17+', 'SU', '21+'];
                                            echo $ageRatings[array_rand($ageRatings)];
                                        @endphp
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Movie Info -->
                            <div class="w-2/3 p-6 flex flex-col justify-between">
                                <!-- Title & Details -->
                                <div class="space-y-3">
                                    <h3 class="text-xl font-bold text-white group-hover:text-cinema-400 transition-colors duration-300 leading-tight">
                                        {{ $film->judul }}
                                    </h3>
                                    
                                    <!-- Movie Details -->
                                    <div class="space-y-2 text-sm text-slate-400">
                                        <div class="flex items-center">
                                            <i class="fas fa-clock mr-2 text-cinema-500 w-4"></i>
                                            <span>{{ $film->durasi }} menit</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-user-tie mr-2 text-cinema-500 w-4"></i>
                                            <span>{{ $film->sutradara }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar mr-2 text-cinema-500 w-4"></i>
                                            <span>{{ date('Y') }}</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Genre Tag from Database -->
                                    <div class="flex flex-wrap gap-1">
                                        @if($film->genre)
                                            @php
                                                $genreClass = 'genre-' . strtolower($film->genre->nama_genre);
                                            @endphp
                                            <span class="genre-tag {{ $genreClass }} px-3 py-1 text-xs font-medium rounded-full">
                                                <i class="fas 
                                                    @if($film->genre->nama_genre == 'Aksi') fa-fist-raised
                                                    @elseif($film->genre->nama_genre == 'Drama') fa-theater-masks
                                                    @elseif($film->genre->nama_genre == 'Komedi') fa-laugh
                                                    @elseif($film->genre->nama_genre == 'Romantis') fa-heart
                                                    @elseif($film->genre->nama_genre == 'Horor') fa-ghost
                                                    @elseif($film->genre->nama_genre == 'Animasi') fa-magic
                                                    @else fa-film
                                                    @endif mr-1"></i>
                                                {{ $film->genre->nama_genre }}
                                            </span>
                                        @else
                                            <span class="genre-tag px-3 py-1 text-xs font-medium rounded-full">
                                                <i class="fas fa-film mr-1"></i>
                                                Umum
                                            </span>
                                        @endif
                                    </div>

                                    <!-- Synopsis Preview -->
                                    @if($film->sinopsis)
                                        <div class="text-xs text-slate-500 leading-relaxed">
                                            <p class="line-clamp-2">{{ Str::limit($film->sinopsis, 100) }}</p>
                                        </div>
                                    @endif
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class="space-y-3 mt-4">
                                    <!-- Trailer Button -->
                                    <button class="btn-outline-cinema w-full px-4 py-2.5 text-sm font-semibold rounded-lg btn-trailer-hover inline-flex items-center justify-center space-x-2" 
                                            data-trailer="{{ $film->trailer }}">
                                        <i class="fas fa-play"></i>
                                        <span>Lihat Trailer</span>
                                    </button>
                                    
                                    <!-- Buy Ticket Button -->
                                    <button class="btn-cinema w-full px-4 py-3 text-sm font-bold text-dark-900 rounded-lg inline-flex items-center justify-center space-x-2"
                                            onclick="window.location.href='{{ route('jadwal.index', ['film_id' => $film->film_id]) }}'">
                                        <i class="fas fa-ticket-alt"></i>
                                        <span>Beli Tiket</span>
                                        <i class="fas fa-arrow-right ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Showtime Preview -->
                        <div class="px-6 py-4 border-t border-slate-700/50">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm font-semibold text-slate-300">Jadwal Hari Ini:</span>
                                <span class="text-xs text-cinema-500">{{ date('d M Y') }}</span>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                @php
                                    $showtimes = ['10:00', '13:30', '16:00', '19:30', '22:00'];
                                    $availableShows = array_slice($showtimes, 0, rand(3, 4));
                                @endphp
                                @foreach($availableShows as $time)
                                    <span class="showtime-slot px-3 py-1 text-xs font-medium rounded cursor-pointer"
                                          onclick="window.location.href='{{ route('jadwal.index', ['film_id' => $film->film_id]) }}'">
                                        {{ $time }}
                                    </span>
                                @endforeach
                                <span class="text-xs text-slate-500 self-center ml-2">+{{ rand(2, 5) }} lainnya</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty State -->
            @if(count($films) == 0)
                <div class="text-center py-20">
                    <div class="w-24 h-24 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-film text-dark-900 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Belum Ada Film Tayang</h3>
                    <p class="text-slate-400 mb-8">Jadwal film akan segera diperbarui. Pantau terus untuk film terbaru!</p>
                    <a href="/dashboard" class="btn-cinema px-8 py-3 text-lg font-semibold text-dark-900 rounded-xl">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali ke Dashboard
                    </a>
                </div>
            @endif

            <!-- Genre Filter Section (Optional) -->
            <div class="mt-16 text-center">
                <h3 class="text-2xl font-bold text-white mb-8">Filter Berdasarkan Genre</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="?genre=all" class="genre-tag px-6 py-3 text-sm font-semibold rounded-full hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-th mr-2"></i>Semua Genre
                    </a>
                    <a href="?genre=1" class="genre-aksi px-6 py-3 text-sm font-semibold rounded-full hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-fist-raised mr-2"></i>Aksi
                    </a>
                    <a href="?genre=2" class="genre-drama px-6 py-3 text-sm font-semibold rounded-full hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-theater-masks mr-2"></i>Drama
                    </a>
                    <a href="?genre=3" class="genre-komedi px-6 py-3 text-sm font-semibold rounded-full hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-laugh mr-2"></i>Komedi
                    </a>
                    <a href="?genre=4" class="genre-romantis px-6 py-3 text-sm font-semibold rounded-full hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-heart mr-2"></i>Romantis
                    </a>
                    <a href="?genre=5" class="genre-horor px-6 py-3 text-sm font-semibold rounded-full hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-ghost mr-2"></i>Horor
                    </a>
                    <a href="?genre=6" class="genre-animasi px-6 py-3 text-sm font-semibold rounded-full hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-magic mr-2"></i>Animasi
                    </a>
                </div>
            </div>

            <!-- Cinema Info Section -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="cinema-card rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-couch text-dark-900 text-xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Kursi Premium</h4>
                    <p class="text-slate-400 text-sm">Kursi reclining dengan kenyamanan maksimal untuk pengalaman menonton terbaik</p>
                </div>
                
                <div class="cinema-card rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-volume-up text-dark-900 text-xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Dolby Atmos</h4>
                    <p class="text-slate-400 text-sm">Sistem audio surround premium untuk pengalaman sinematik yang memukau</p>
                </div>
                
                <div class="cinema-card rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-dark-900 text-xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">F&B Premium</h4>
                    <p class="text-slate-400 text-sm">Makanan dan minuman berkualitas tinggi tersedia di setiap studio</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Warning Modal -->
    <div id="warningModal" class="fixed inset-0 modal-backdrop z-50 hidden items-center justify-center p-4">
        <div class="warning-modal w-full max-w-md rounded-2xl overflow-hidden shadow-2xl relative animate-scale-in">
            <!-- Modal Content -->
            <div class="p-8 text-center">
                <!-- Warning Icon -->
                <div class="warning-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-exclamation-triangle text-dark-900 text-3xl"></i>
                </div>
                
                <!-- Title -->
                <h3 class="text-2xl font-bold text-white mb-4">Pilih Film Terlebih Dahulu</h3>
                
                <!-- Message -->
                <p class="text-slate-400 mb-8 leading-relaxed">
                    Untuk melihat jadwal tayang, silakan pilih film yang ingin Anda tonton terlebih dahulu dari daftar film di atas.
                </p>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <button onclick="closeWarningModal()" class="btn-outline-cinema px-6 py-3 text-sm font-semibold rounded-lg">
                        <i class="fas fa-times mr-2"></i>Tutup
                    </button>
                    <button onclick="scrollToFilms()" class="btn-cinema px-6 py-3 text-sm font-bold text-dark-900 rounded-lg">
                        <i class="fas fa-film mr-2"></i>Lihat Film
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Trailer Modal -->
    <div id="modalTrailer" class="fixed inset-0 modal-backdrop z-50 hidden items-center justify-center p-4">
        <div class="modal-content w-full max-w-4xl aspect-video rounded-2xl overflow-hidden shadow-2xl relative animate-scale-in">
            <!-- Close Button -->
            <button id="modalClose" class="absolute top-4 right-4 z-10 w-10 h-10 bg-black/70 hover:bg-black/90 rounded-full flex items-center justify-center text-white transition-all duration-300">
                <i class="fas fa-times text-lg"></i>
            </button>
            
            <!-- Loading State -->
            <div id="modalLoading" class="absolute inset-0 flex items-center justify-center bg-dark-900">
                <div class="text-center">
                    <div class="w-12 h-12 border-4 border-cinema-500/30 border-t-cinema-500 rounded-full animate-spin mx-auto mb-4"></div>
                    <p class="text-slate-400">Memuat trailer...</p>
                </div>
            </div>
            
            <!-- Video Container -->
            <div id="videoContainer" class="w-full h-full bg-black flex items-center justify-center">
                <!-- Video will be inserted here -->
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Enhanced Back Button Animation
        document.addEventListener('DOMContentLoaded', function() {
            const backButton = document.querySelector('.back-button-enhanced');
            
            // Add entrance animation
            setTimeout(() => {
                backButton.classList.add('animate-bounce-x');
            }, 500);
            
            // Add click animation
            backButton.addEventListener('click', function(e) {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Warning Modal Functions
        function showScheduleWarning() {
            const modal = document.getElementById('warningModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            
            // Add shake animation to navigation
            const scheduleNav = document.querySelector('nav a[onclick="showScheduleWarning()"]');
            scheduleNav.classList.add('animate-shake');
            setTimeout(() => {
                scheduleNav.classList.remove('animate-shake');
            }, 500);
        }

        function closeWarningModal() {
            const modal = document.getElementById('warningModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function scrollToFilms() {
            closeWarningModal();
            const filmsSection = document.querySelector('.grid');
            filmsSection.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
            
            // Add highlight effect to films
            const filmCards = document.querySelectorAll('.cinema-card');
            filmCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.transform = 'scale(1.02)';
                    card.style.borderColor = 'rgba(234, 179, 8, 0.5)';
                    setTimeout(() => {
                        card.style.transform = '';
                        card.style.borderColor = '';
                    }, 1000);
                }, index * 100);
            });
        }

        // Close modal when clicking outside
        document.getElementById('warningModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeWarningModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeWarningModal();
                closeTrailerModal();
            }
        });

        // Trailer Modal Functions
        const modal = document.getElementById('modalTrailer');
        const modalClose = document.getElementById('modalClose');
        const modalLoading = document.getElementById('modalLoading');
        const videoContainer = document.getElementById('videoContainer');

        function createVideoEmbed(url) {
            if (!url) return null;

            if (url.includes('youtube.com') || url.includes('youtu.be')) {
                let videoId = '';
                if (url.includes('youtu.be')) {
                    videoId = url.split('youtu.be/')[1].split(/[?&]/)[0];
                } else {
                    const urlParams = new URL(url).searchParams;
                    videoId = urlParams.get('v');
                }
                if (!videoId) return null;

                const iframe = document.createElement('iframe');
                iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&showinfo=0`;
                iframe.frameBorder = "0";
                iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                iframe.allowFullscreen = true;
                iframe.className = 'w-full h-full';
                return iframe;
            } else if (url.endsWith('.mp4')) {
                const video = document.createElement('video');
                video.src = url;
                video.controls = true;
                video.autoplay = true;
                video.muted = true;
                video.className = 'w-full h-full bg-black';
                
                video.play().catch(() => {
                    console.log('Autoplay failed');
                });

                video.addEventListener('click', () => {
                    if (video.muted) {
                        video.muted = false;
                        video.play();
                    }
                });

                return video;
            }
            return null;
        }

        // Trailer button event listeners
        document.querySelectorAll('.btn-trailer-hover').forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const trailerURL = button.getAttribute('data-trailer');
                
                if (!trailerURL) {
                    showNotification('Trailer tidak tersedia untuk film ini', 'error');
                    return;
                }

                // Show modal
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                modalLoading.classList.remove('hidden');
                
                // Clear previous video
                videoContainer.innerHTML = '';

                // Create video embed
                setTimeout(() => {
                    const videoEmbed = createVideoEmbed(trailerURL);
                    if (!videoEmbed) {
                        showNotification('Format trailer tidak didukung', 'error');
                        closeTrailerModal();
                        return;
                    }

                    modalLoading.classList.add('hidden');
                    videoContainer.appendChild(videoEmbed);
                }, 500);
            });
        });

        // Close trailer modal function
        function closeTrailerModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            videoContainer.innerHTML = '';
            modalLoading.classList.remove('hidden');
        }

        // Modal close events
        modalClose.addEventListener('click', closeTrailerModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeTrailerModal();
            }
        });

        // Notification function
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-xl shadow-lg animate-slide-up ${
                type === 'error' ? 'bg-red-500/90 text-white' : 'bg-cinema-500/90 text-dark-900'
            }`;
            notification.innerHTML = `
                <div class="flex items-center space-x-2">
                    <i class="fas ${type === 'error' ? 'fa-exclamation-triangle' : 'fa-info-circle'}"></i>
                    <span class="font-medium">${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

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
            if (!el.style.animationDelay) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                observer.observe(el);
            }
        });
    </script>
</body>

</html>