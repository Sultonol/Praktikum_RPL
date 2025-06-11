<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CineStream - Premium Cinema Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(15, 15, 15, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .elegant-gradient {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        }

        .accent-gradient {
            background: linear-gradient(135deg, #d4af37 0%, #f4e4a6 100%);
        }

        .subtle-gradient {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(244, 228, 166, 0.05) 100%);
        }

        .text-elegant {
            color: #d4af37;
        }

        .text-muted {
            color: #a0a0a0;
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .floating-subtle {
            animation: floatSubtle 8s ease-in-out infinite;
        }

        @keyframes floatSubtle {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
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

        .elegant-shadow {
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .border-elegant {
            border-color: rgba(212, 175, 55, 0.3);
        }

        .hover-elegant:hover {
            background-color: rgba(212, 175, 55, 0.1);
            border-color: rgba(212, 175, 55, 0.5);
        }
    </style>
</head>

<body class="bg-black text-gray-100 font-['Inter'] overflow-x-hidden">

    <!-- Header -->
    <header class="fixed top-0 w-full z-50 glass-effect">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 elegant-gradient rounded-lg flex items-center justify-center elegant-shadow">
                    <i class="fas fa-film text-elegant text-lg"></i>
                </div>
                <div class="text-2xl font-semibold font-['Crimson_Text'] text-white tracking-wide">
                    CineStream
                </div>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex items-center space-x-1 glass-effect rounded-full px-3 py-2">
                <a href="#"
                    class="px-5 py-2 rounded-full bg-gradient-to-r from-gray-800 to-gray-700 text-white font-medium transition-all duration-300 border border-elegant">
                    Films
                </a>
                <a href="#"
                    class="px-5 py-2 rounded-full text-gray-300 hover:text-white hover:bg-gray-800/50 font-medium transition-all duration-300">
                    Food & Drinks
                </a>
                <a href="#"
                    class="px-5 py-2 rounded-full text-gray-300 hover:text-white hover:bg-gray-800/50 font-medium transition-all duration-300">
                    Cinemas
                </a>
                <a href="#"
                    class="px-5 py-2 rounded-full text-gray-300 hover:text-white hover:bg-gray-800/50 font-medium transition-all duration-300">
                    Bookings
                </a>
            </nav>

            <!-- User Actions -->
            <div class="flex items-center space-x-4">
                <div
                    class="w-10 h-10 elegant-gradient rounded-full flex items-center justify-center cursor-pointer hover:scale-105 transition-transform duration-300 elegant-shadow">
                    <i class="fas fa-user text-gray-300"></i>
                </div>
                <a href="/login"
                    class="px-5 py-2 border border-gray-600 text-gray-300 rounded-full hover-elegant transition-all duration-300 font-medium text-sm">
                    Sign In
                </a>
                <a href="/register"
                    class="px-5 py-2 accent-gradient text-black rounded-full hover:shadow-lg transition-all duration-300 font-medium text-sm hover:scale-105">
                    Register
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 pb-16 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900/30 via-black to-gray-900/30"></div>
        <div class="absolute top-32 left-20 w-64 h-64 bg-gray-800/20 rounded-full blur-3xl floating-subtle"></div>
        <div class="absolute bottom-32 right-20 w-80 h-80 bg-gray-700/15 rounded-full blur-3xl floating-subtle"
            style="animation-delay: -4s;"></div>

        <div class="relative z-10 text-center max-w-5xl mx-auto px-6 fade-in-up">
            <div class="mb-8">
                <span
                    class="inline-block px-4 py-2 glass-effect rounded-full text-sm font-medium text-elegant border border-elegant/30 mb-6">
                    Premium Cinema Experience
                </span>
            </div>

            <h1 class="text-5xl md:text-6xl font-light font-['Crimson_Text'] mb-6 leading-tight">
                <span class="text-white">Experience Cinema</span><br>
                <span class="text-elegant font-semibold">Like Never Before</span>
            </h1>

            <p class="text-xl text-muted mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                Discover an exclusive collection of premium films and series, carefully curated for the most discerning
                viewers.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button
                    class="group px-8 py-4 accent-gradient text-black rounded-full font-semibold text-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center space-x-3">
                    <i class="fas fa-play"></i>
                    <span>Start Watching</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                </button>
                <button
                    class="px-8 py-4 glass-effect border border-gray-600 text-white rounded-full font-semibold text-lg hover-elegant transition-all duration-300 hover:scale-105 flex items-center space-x-3">
                    <i class="fas fa-search"></i>
                    <span>Browse Collection</span>
                </button>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-8 mt-20 max-w-lg mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-semibold text-elegant">12K+</div>
                    <div class="text-sm text-muted mt-1 font-light">Premium Films</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-semibold text-elegant">2M+</div>
                    <div class="text-sm text-muted mt-1 font-light">Members</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-semibold text-elegant">4.8★</div>
                    <div class="text-sm text-muted mt-1 font-light">Rating</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Films Section -->
    <section class="relative py-20 px-6 bg-gradient-to-b from-black to-gray-900">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="text-4xl font-light font-['Crimson_Text'] text-white mb-3">
                        Featured <span class="text-elegant font-semibold">Collection</span>
                    </h2>
                    <p class="text-muted text-lg font-light">Handpicked premium entertainment</p>
                </div>
                <div class="flex space-x-3">
                    <button onclick="scrollLeft()"
                        class="w-12 h-12 glass-effect rounded-full flex items-center justify-center text-gray-300 hover:text-white hover:bg-gray-800/50 transition-all duration-300">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button onclick="scrollRight()"
                        class="w-12 h-12 glass-effect rounded-full flex items-center justify-center text-gray-300 hover:text-white hover:bg-gray-800/50 transition-all duration-300">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Carousel -->
            <div class="relative overflow-hidden">
                <div id="filmCarousel" class="flex gap-6 overflow-x-auto scroll-smooth pb-4"
                    style="scrollbar-width: none;">
                    @foreach ([['img' => 'gambar1.jpeg', 'title' => 'Bilinear Brothers II', 'info' => '2022 • 1h 45m • Action', 'rating' => '8.5'], ['img' => 'gambar2.jpeg', 'title' => 'Family on Summer Time', 'info' => '2023 • 1h 30m • Drama', 'rating' => '7.8'], ['img' => 'gambar3.jpeg', 'title' => 'Magic Kingdom', 'info' => '2024 • 2h 00m • Fantasy', 'rating' => '9.1'], ['img' => 'gambar4.jpeg', 'title' => 'Night Runner', 'info' => '2021 • 1h 40m • Thriller', 'rating' => '8.2'], ['img' => 'gambar5.jpeg', 'title' => 'Deep Sea Adventure', 'info' => '2020 • 1h 50m • Adventure', 'rating' => '7.9'], ['img' => 'gambar6.jpeg', 'title' => 'Haunted Melody', 'info' => '2023 • 2h 10m • Horror', 'rating' => '8.7'], ['img' => 'gambar7.jpeg', 'title' => 'Sky City 9', 'info' => '2024 • 1h 20m • Sci-Fi', 'rating' => '8.9'], ['img' => 'gambar8.jpeg', 'title' => 'Jungle Quest', 'info' => '2022 • 1h 35m • Adventure', 'rating' => '8.0']] as $film)
                        <div class="group min-w-[280px] max-w-[280px] card-hover cursor-pointer">
                            <div class="relative overflow-hidden rounded-xl elegant-shadow">
                                <img src="{{ asset('img/' . $film['img']) }}" alt="{{ $film['title'] }}"
                                    class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500" />

                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <!-- Play Button -->
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div
                                        class="w-14 h-14 accent-gradient rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-play text-black text-lg ml-1"></i>
                                    </div>
                                </div>

                                <!-- Rating Badge -->
                                <div
                                    class="absolute top-4 right-4 glass-effect px-3 py-1.5 rounded-full flex items-center space-x-1">
                                    <i class="fas fa-star text-elegant text-sm"></i>
                                    <span class="text-white text-sm font-medium">{{ $film['rating'] }}</span>
                                </div>

                                <!-- Quality Badge -->
                                <div
                                    class="absolute top-4 left-4 glass-effect px-2 py-1 rounded text-xs font-medium text-gray-300">
                                    4K
                                </div>
                            </div>

                            <!-- Movie Info -->
                            <div class="mt-4 space-y-2">
                                <h3
                                    class="text-lg font-medium text-white group-hover:text-elegant transition-colors duration-300">
                                    {{ $film['title'] }}
                                </h3>
                                <p class="text-muted text-sm font-light">{{ $film['info'] }}</p>
                                <div class="flex items-center space-x-4 text-xs text-gray-500">
                                    <span class="flex items-center space-x-1">
                                        <i class="fas fa-hd-video"></i>
                                        <span>Ultra HD</span>
                                    </span>
                                    <span class="flex items-center space-x-1">
                                        <i class="fas fa-closed-captioning"></i>
                                        <span>Subtitles</span>
                                    </span>
                                    <span class="flex items-center space-x-1">
                                        <i class="fas fa-volume-up"></i>
                                        <span>5.1</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-20 px-6 bg-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-light font-['Crimson_Text'] text-white mb-4">
                    Explore by <span class="text-elegant font-semibold">Genre</span>
                </h2>
                <p class="text-muted text-lg font-light">Find your perfect entertainment</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach (['Action', 'Drama', 'Comedy', 'Thriller', 'Romance', 'Sci-Fi'] as $genre)
                    <div
                        class="glass-effect rounded-xl p-6 text-center hover-elegant transition-all duration-300 cursor-pointer group">
                        <div
                            class="w-12 h-12 accent-gradient rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-film text-black"></i>
                        </div>
                        <h3 class="text-white font-medium">{{ $genre }}</h3>
                        <p class="text-muted text-sm mt-1">120+ films</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-16 px-6 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 elegant-gradient rounded-lg flex items-center justify-center">
                            <i class="fas fa-film text-elegant"></i>
                        </div>
                        <div class="text-2xl font-semibold font-['Crimson_Text'] text-white">
                            CineStream
                        </div>
                    </div>
                    <p class="text-muted font-light leading-relaxed max-w-md">
                        Experience premium cinema entertainment with our carefully curated collection of films and
                        series.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#"
                            class="w-10 h-10 glass-effect rounded-full flex items-center justify-center text-gray-400 hover:text-elegant transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 glass-effect rounded-full flex items-center justify-center text-gray-400 hover:text-elegant transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 glass-effect rounded-full flex items-center justify-center text-gray-400 hover:text-elegant transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-medium mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">Browse
                                Movies</a></li>
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">TV
                                Series</a></li>
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">Documentaries</a>
                        </li>
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">New
                                Releases</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-medium mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">Help
                                Center</a></li>
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">Contact
                                Us</a></li>
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">Privacy
                                Policy</a></li>
                        <li><a href="#"
                                class="text-muted hover:text-elegant transition-colors duration-300 font-light">Terms
                                of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-muted font-light">&copy; 2024 CineStream. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        const carousel = document.getElementById('filmCarousel');

        function scrollLeft() {
            carousel.scrollBy({
                left: -320 * 3,
                behavior: 'smooth'
            });
        }

        function scrollRight() {
            carousel.scrollBy({
                left: 320 * 3,
                behavior: 'smooth'
            });
        }

        // Auto-scroll functionality
        let autoScrollInterval;

        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                if (carousel.scrollLeft >= carousel.scrollWidth - carousel.clientWidth) {
                    carousel.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                } else {
                    scrollRight();
                }
            }, 6000);
        }

        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }

        // Start auto-scroll on load
        startAutoScroll();

        // Pause auto-scroll on hover
        carousel.addEventListener('mouseenter', stopAutoScroll);
        carousel.addEventListener('mouseleave', startAutoScroll);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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

        // Add scroll effect to header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(0, 0, 0, 0.95)';
            } else {
                header.style.background = 'rgba(15, 15, 15, 0.8)';
            }
        });
    </script>
</body>

</html>
