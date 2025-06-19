<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jadwal Film - {{ $film->judul ?? 'Cinemation' }}</title>
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
                        },
                        shimmer: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100%)' },
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
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(234, 179, 8, 0.15);
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

        .date-tab {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(148, 163, 184, 0.2);
            transition: all 0.3s ease;
        }

        .date-tab:hover {
            border-color: rgba(234, 179, 8, 0.4);
            background: rgba(234, 179, 8, 0.1);
        }

        .date-tab.active {
            background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%);
            border-color: #eab308;
            color: #0f172a;
            font-weight: 600;
        }

        .schedule-card {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(234, 179, 8, 0.1);
            transition: all 0.3s ease;
        }

        .schedule-card:hover {
            border-color: rgba(234, 179, 8, 0.3);
            transform: translateY(-2px);
        }

        .price-highlight {
            background: linear-gradient(135deg, rgba(234, 179, 8, 0.2), rgba(202, 138, 4, 0.2));
            border: 1px solid rgba(234, 179, 8, 0.3);
            color: #eab308;
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
                <a href="{{ route('film.index') }}" class="text-slate-300 hover:text-cinema-500 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Film
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#" class="text-cinema-500 font-semibold text-sm uppercase tracking-wide relative">
                    Jadwal
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                </a>
            </nav>

            <!-- Back Button -->
            <a href="{{ route('film.index') }}" class="btn-outline-cinema px-6 py-2.5 text-sm font-medium rounded-lg inline-flex items-center space-x-2">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali</span>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 pt-24 pb-16 px-6">
        <div class="max-w-6xl mx-auto">
            @if (count($jadwals) > 0)
                @php
                    $film = $jadwals[0]->film;
                    $genre = $film->genre->nama_genre ?? 'Tidak ada genre';
                    $genreClass = 'genre-' . strtolower($genre);
                @endphp

                <!-- Movie Header Section -->
                <div class="cinema-card rounded-2xl p-8 mb-8 animate-fade-in">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <!-- Movie Poster -->
                        <div class="flex-shrink-0">
                            <div class="relative">
                                <img src="{{ asset($film->poster) }}" 
                                     alt="Poster {{ $film->judul }}" 
                                     class="w-48 h-72 object-cover rounded-xl shadow-2xl" />
                                
                                <!-- Play Button Overlay -->
                                <div class="absolute inset-0 bg-black/50 opacity-0 hover:opacity-100 transition-opacity duration-300 rounded-xl flex items-center justify-center cursor-pointer">
                                    <div class="w-16 h-16 bg-cinema-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-play text-dark-900 text-xl ml-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Movie Info -->
                        <div class="flex-1 space-y-6">
                            <!-- Title & Genre -->
                            <div>
                                <h1 class="text-4xl font-serif font-bold text-white mb-4 leading-tight">
                                    {{ $film->judul }}
                                </h1>
                                <div class="flex flex-wrap items-center gap-3 mb-4">
                                    <span class="genre-tag {{ $genreClass }} px-4 py-2 text-sm font-semibold rounded-full">
                                        <i class="fas 
                                            @if($genre == 'Aksi') fa-fist-raised
                                            @elseif($genre == 'Drama') fa-theater-masks
                                            @elseif($genre == 'Komedi') fa-laugh
                                            @elseif($genre == 'Romantis') fa-heart
                                            @elseif($genre == 'Horor') fa-ghost
                                            @elseif($genre == 'Animasi') fa-magic
                                            @else fa-film
                                            @endif mr-2"></i>
                                        {{ $genre }}
                                    </span>
                                    <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded">
                                        {{ ['13+', '17+', 'SU', '21+'][array_rand(['13+', '17+', 'SU', '21+'])] }}
                                    </span>
                                </div>
                            </div>

                            <!-- Movie Details Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-4">
                                    <div class="flex items-center text-slate-300">
                                        <i class="fas fa-clock mr-3 text-cinema-500 w-5"></i>
                                        <span class="font-medium">Durasi:</span>
                                        <span class="ml-2 text-white">{{ $film->durasi }} menit</span>
                                    </div>
                                    <div class="flex items-center text-slate-300">
                                        <i class="fas fa-video mr-3 text-cinema-500 w-5"></i>
                                        <span class="font-medium">Format:</span>
                                        <span class="ml-2 text-white">{{ $film->format ?? '2D' }}</span>
                                    </div>
                                    <div class="flex items-center text-slate-300">
                                        <i class="fas fa-star mr-3 text-cinema-500 w-5"></i>
                                        <span class="font-medium">Rating:</span>
                                        <span class="ml-2 text-cinema-400 font-semibold">{{ $film->rating ?? '8.5' }}/10</span>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center text-slate-300">
                                        <i class="fas fa-user-tie mr-3 text-cinema-500 w-5"></i>
                                        <span class="font-medium">Sutradara:</span>
                                        <span class="ml-2 text-white">{{ $film->sutradara }}</span>
                                    </div>
                                    <div class="flex items-center text-slate-300">
                                        <i class="fas fa-calendar mr-3 text-cinema-500 w-5"></i>
                                        <span class="font-medium">Tahun:</span>
                                        <span class="ml-2 text-white">{{ date('Y') }}</span>
                                    </div>
                                    <div class="flex items-center text-slate-300">
                                        <i class="fas fa-language mr-3 text-cinema-500 w-5"></i>
                                        <span class="font-medium">Bahasa:</span>
                                        <span class="ml-2 text-white">Indonesia</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Synopsis -->
                            @if($film->sinopsis)
                                <div class="bg-dark-800/50 rounded-xl p-4">
                                    <h3 class="text-lg font-semibold text-cinema-400 mb-2">Sinopsis</h3>
                                    <p class="text-slate-300 leading-relaxed text-sm">{{ $film->sinopsis }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Date Navigation -->
                <div class="mb-8 animate-slide-up">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fas fa-calendar-alt mr-3 text-cinema-500"></i>
                        Pilih Tanggal
                    </h2>
                    <div class="flex overflow-x-auto gap-3 pb-4" id="dateNavigation">
                        @php
                            $tanggalUnik = $jadwals->pluck('tanggal')->unique()->sort();
                        @endphp
                        @foreach ($tanggalUnik as $index => $tanggal)
                            <div class="date-tab px-6 py-3 rounded-xl cursor-pointer whitespace-nowrap {{ \Carbon\Carbon::parse($tanggal)->isToday() ? 'active' : '' }}" 
                                 data-date="{{ $tanggal }}"
                                 onclick="filterByDate('{{ $tanggal }}')">
                                <div class="text-center">
                                    <div class="text-xs font-medium opacity-75">
                                        {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('D') }}
                                    </div>
                                    <div class="text-lg font-bold">
                                        {{ \Carbon\Carbon::parse($tanggal)->format('d') }}
                                    </div>
                                    <div class="text-xs font-medium opacity-75">
                                        {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('M') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Schedule Section -->
                <div class="animate-slide-up">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-clock mr-3 text-cinema-500"></i>
                        Jadwal Tayang
                    </h2>

                    <div class="space-y-4" id="scheduleContainer">
                        @php
                            $jadwals = $jadwals->sortBy(fn($j) => strtotime($j->tanggal . ' ' . $j->jam_tayang));
                        @endphp
                        
                        @foreach ($jadwals as $index => $jadwal)
                            <div class="schedule-card rounded-xl p-6 animate-scale-in schedule-item" 
                                 style="animation-delay: {{ $index * 0.1 }}s"
                                 data-date="{{ $jadwal->tanggal }}">
                                
                                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                                    <!-- Schedule Info -->
                                    <div class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                        <!-- Date & Time -->
                                        <div class="space-y-2">
                                            <div class="flex items-center text-slate-300">
                                                <i class="fas fa-calendar mr-2 text-cinema-500"></i>
                                                <span class="text-sm font-medium">Tanggal</span>
                                            </div>
                                            <div class="text-white font-semibold">
                                                {{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('d M Y') }}
                                            </div>
                                            <div class="flex items-center text-cinema-400">
                                                <i class="fas fa-clock mr-2"></i>
                                                <span class="text-lg font-bold">{{ \Carbon\Carbon::parse($jadwal->jam_tayang)->format('H:i') }}</span>
                                            </div>
                                        </div>

                                        <!-- Cinema Info -->
                                        <div class="space-y-2">
                                            <div class="flex items-center text-slate-300">
                                                <i class="fas fa-building mr-2 text-cinema-500"></i>
                                                <span class="text-sm font-medium">Bioskop</span>
                                            </div>
                                            <div class="text-white font-semibold">
                                                {{ $jadwal->studio->bioskop->nama_bioskop }}
                                            </div>
                                            <div class="text-slate-400 text-sm">
                                                <i class="fas fa-map-marker-alt mr-1"></i>
                                                {{ $jadwal->studio->bioskop->alamat }}
                                            </div>
                                        </div>

                                        <!-- Studio & Price -->
                                        <div class="space-y-2">
                                            <div class="flex items-center text-slate-300">
                                                <i class="fas fa-couch mr-2 text-cinema-500"></i>
                                                <span class="text-sm font-medium">Studio</span>
                                            </div>
                                            <div class="text-white font-semibold">
                                                Studio {{ $jadwal->studio->nomor_studio }}
                                            </div>
                                            @php
                                                $hargaFix = $jadwal->harga < 40000 ? 35000 : 45000;
                                            @endphp
                                            <div class="price-highlight px-3 py-2 rounded-lg inline-block">
                                                <span class="text-lg font-bold">Rp{{ number_format($hargaFix, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Button -->
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('reservasi', ['jadwal_id' => $jadwal->jadwal_id]) }}" 
                                           class="btn-cinema px-8 py-4 text-lg font-bold text-dark-900 rounded-xl inline-flex items-center space-x-3 w-full lg:w-auto justify-center">
                                            <i class="fas fa-chair"></i>
                                            <span>Pilih Kursi</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Additional Info -->
                                <div class="mt-4 pt-4 border-t border-slate-700/50 flex flex-wrap items-center gap-4 text-sm text-slate-400">
                                    <span class="flex items-center">
                                        <i class="fas fa-users mr-2 text-cinema-500"></i>
                                        {{ rand(15, 45) }} kursi tersisa
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-volume-up mr-2 text-cinema-500"></i>
                                        Dolby Atmos
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-tv mr-2 text-cinema-500"></i>
                                        4K Ultra HD
                                    </span>
                                    @if(rand(0, 1))
                                        <span class="flex items-center text-green-400">
                                            <i class="fas fa-check-circle mr-2"></i>
                                            Tersedia
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            @else
                <!-- Empty State -->
                <div class="text-center py-20">
                    <div class="w-24 h-24 bg-gradient-to-br from-cinema-500 to-cinema-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-calendar-times text-dark-900 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Jadwal Tidak Tersedia</h3>
                    <p class="text-slate-400 mb-8">Maaf, belum ada jadwal tayang untuk film ini. Silakan coba lagi nanti.</p>
                    <a href="{{ route('film.index') }}" class="btn-cinema px-8 py-3 text-lg font-semibold text-dark-900 rounded-xl">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali ke Film
                    </a>
                </div>
            @endif
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        // Date filtering functionality
        function filterByDate(selectedDate) {
            // Update active date tab
            document.querySelectorAll('.date-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelector(`[data-date="${selectedDate}"]`).classList.add('active');

            // Filter schedule items
            document.querySelectorAll('.schedule-item').forEach(item => {
                const itemDate = item.getAttribute('data-date');
                if (itemDate === selectedDate) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease-out';
                } else {
                    item.style.display = 'none';
                }
            });

            // Update URL without page reload
            const url = new URL(window.location);
            url.searchParams.set('date', selectedDate);
            window.history.pushState({}, '', url);
        }

        // Initialize date filter on page load
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const selectedDate = urlParams.get('date');
            
            if (selectedDate) {
                filterByDate(selectedDate);
            } else {
                // Show today's schedule by default
                const todayTab = document.querySelector('.date-tab.active');
                if (todayTab) {
                    const todayDate = todayTab.getAttribute('data-date');
                    filterByDate(todayDate);
                }
            }
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

        // Smooth scrolling for date navigation
        document.getElementById('dateNavigation').addEventListener('wheel', (e) => {
            e.preventDefault();
            e.currentTarget.scrollLeft += e.deltaY;
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

        // Add loading state to buttons
        document.querySelectorAll('.btn-cinema').forEach(btn => {
            btn.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
                this.disabled = true;
                
                // Re-enable after navigation (fallback)
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.disabled = false;
                }, 3000);
            });
        });
    </script>
</body>

</html>