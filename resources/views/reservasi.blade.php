<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih Kursi - {{ $jadwal->film->judul }} | Cinemation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
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
                        body: ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'scale-in': 'scaleIn 0.6s ease-out',
                        'float': 'float 8s ease-in-out infinite',
                        'glow': 'glow 4s ease-in-out infinite alternate',
                        'shimmer': 'shimmer 3s linear infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-gentle': 'bounceGentle 3s ease-in-out infinite',
                        'seat-select': 'seatSelect 0.3s ease-out',
                        'receipt-slide': 'receiptSlide 0.5s ease-out',
                        'price-update': 'priceUpdate 0.4s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 30px rgba(234, 179, 8, 0.3)' },
                            '100%': { boxShadow: '0 0 60px rgba(234, 179, 8, 0.6)' },
                        },
                        shimmer: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100%)' },
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-8px)' },
                        },
                        seatSelect: {
                            '0%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.2)' },
                            '100%': { transform: 'scale(1.1)' },
                        },
                        receiptSlide: {
                            '0%': { opacity: '0', transform: 'translateX(20px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        priceUpdate: {
                            '0%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.1)' },
                            '100%': { transform: 'scale(1)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: radial-gradient(ellipse at top, #1e293b 0%, #0f172a 50%, #020617 100%);
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }

        .glass-effect {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(234, 179, 8, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .cinema-card {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.98), rgba(15, 23, 42, 0.95));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(234, 179, 8, 0.2);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .cinema-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 35px 70px rgba(234, 179, 8, 0.15);
            border-color: rgba(234, 179, 8, 0.4);
        }

        .receipt-card {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.95), rgba(15, 23, 42, 0.98));
            backdrop-filter: blur(25px);
            border: 2px solid rgba(234, 179, 8, 0.3);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(234, 179, 8, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: sticky;
            top: 120px;
        }

        .btn-cinema {
            background: linear-gradient(135deg, #eab308 0%, #f59e0b 50%, #ca8a04 100%);
            box-shadow: 0 8px 25px rgba(234, 179, 8, 0.4);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-cinema::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }

        .btn-cinema:hover::before {
            left: 100%;
        }

        .btn-cinema:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(234, 179, 8, 0.5);
        }

        .btn-outline-cinema {
            border: 2px solid rgba(234, 179, 8, 0.5);
            color: #eab308;
            background: rgba(234, 179, 8, 0.08);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-outline-cinema::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, rgba(234, 179, 8, 0.1), rgba(234, 179, 8, 0.2));
            transition: width 0.4s ease;
            z-index: -1;
        }

        .btn-outline-cinema:hover::before {
            width: 100%;
        }

        .btn-outline-cinema:hover {
            border-color: #eab308;
            color: #facc15;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(234, 179, 8, 0.2);
        }

        .logo-glow {
            filter: drop-shadow(0 0 25px rgba(234, 179, 8, 0.6));
        }

        .floating-element {
            animation: float 10s ease-in-out infinite;
        }

        .floating-element:nth-child(2) {
            animation-delay: -3s;
        }

        .floating-element:nth-child(3) {
            animation-delay: -6s;
        }

        /* Enhanced Seat Styles */
        .seat-checkbox {
            display: none;
        }

        .seat-container {
            perspective: 1000px;
        }

        .seat-label {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            margin: 3px;
            border-radius: 12px;
            border: 2px solid;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            font-size: 13px;
            font-weight: 600;
            user-select: none;
            text-align: center;
            transform-style: preserve-3d;
        }

        /* Available seat - Elegant Green */
        .seat-available {
            background: linear-gradient(145deg, rgba(16, 185, 129, 0.25), rgba(5, 150, 105, 0.25));
            border-color: rgba(16, 185, 129, 0.6);
            color: #10b981;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.1);
        }

        .seat-available:hover {
            background: linear-gradient(145deg, rgba(16, 185, 129, 0.4), rgba(5, 150, 105, 0.4));
            border-color: #10b981;
            transform: translateY(-4px) rotateX(15deg);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
            color: #ffffff;
        }

        /* Selected seat - Luxurious Gold */
        .seat-checkbox:checked + .seat-label {
            background: linear-gradient(145deg, #eab308 0%, #f59e0b 50%, #ca8a04 100%) !important;
            border-color: #eab308 !important;
            color: #0f172a !important;
            transform: translateY(-6px) rotateX(20deg) scale(1.05);
            box-shadow: 0 12px 30px rgba(234, 179, 8, 0.5);
            animation: seat-select 0.3s ease-out;
        }

        /* Occupied seat - Sophisticated Red */
        .seat-occupied {
            background: linear-gradient(145deg, rgba(239, 68, 68, 0.3), rgba(220, 38, 38, 0.3));
            border-color: rgba(239, 68, 68, 0.7);
            color: #ef4444;
            cursor: not-allowed;
            opacity: 0.7;
            box-shadow: 0 4px 15px rgba(239, 68, 68, 0.1);
        }

        /* Premium Screen Design */
        .screen {
            background: linear-gradient(145deg, #f8fafc 0%, #e2e8f0 50%, #cbd5e1 100%);
            border-radius: 25px;
            box-shadow: 
                0 15px 35px rgba(0, 0, 0, 0.4),
                inset 0 2px 4px rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        .screen::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(135deg, #eab308, #f59e0b, #ca8a04);
            border-radius: 25px 25px 0 0;
            box-shadow: 0 2px 8px rgba(234, 179, 8, 0.4);
        }

        .screen::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.1) 50%, transparent 100%);
            animation: shimmer 4s linear infinite;
        }

        /* Enhanced Select Styling */
        .custom-select {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9));
            border: 2px solid rgba(234, 179, 8, 0.3);
            color: white;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .custom-select:focus {
            border-color: #eab308;
            box-shadow: 0 0 0 4px rgba(234, 179, 8, 0.15);
            outline: none;
            transform: translateY(-2px);
        }

        .custom-select option {
            background: #1e293b;
            color: white;
            padding: 12px;
        }

        /* Row Labels */
        .row-label {
            background: linear-gradient(135deg, rgba(234, 179, 8, 0.2), rgba(234, 179, 8, 0.1));
            border: 1px solid rgba(234, 179, 8, 0.3);
            border-radius: 8px;
            color: #eab308;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Seat Legend Enhancement */
        .legend-item {
            background: rgba(30, 41, 59, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(234, 179, 8, 0.2);
            border-radius: 12px;
            padding: 12px 16px;
            transition: all 0.3s ease;
        }

        .legend-item:hover {
            background: rgba(30, 41, 59, 0.8);
            border-color: rgba(234, 179, 8, 0.4);
            transform: translateY(-2px);
        }

        /* Receipt Styling */
        .receipt-header {
            background: linear-gradient(135deg, rgba(234, 179, 8, 0.1), rgba(234, 179, 8, 0.05));
            border-bottom: 2px dashed rgba(234, 179, 8, 0.3);
        }

        .receipt-item {
            border-bottom: 1px solid rgba(234, 179, 8, 0.1);
            transition: all 0.3s ease;
        }

        .receipt-item:hover {
            background: rgba(234, 179, 8, 0.05);
        }

        .receipt-total {
            background: linear-gradient(135deg, rgba(234, 179, 8, 0.15), rgba(234, 179, 8, 0.1));
            border: 2px solid rgba(234, 179, 8, 0.3);
            border-radius: 12px;
        }

        .price-highlight {
            background: linear-gradient(135deg, #eab308, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
        }

        /* Enhanced Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(30, 41, 59, 0.6);
            border-radius: 12px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #eab308, #ca8a04);
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(234, 179, 8, 0.3);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #f59e0b, #eab308);
        }

        /* Loading Animation */
        .loading-spinner {
            border: 3px solid rgba(234, 179, 8, 0.3);
            border-top: 3px solid #eab308;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Notification Enhancement */
        .notification {
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        /* Empty state styling */
        .empty-receipt {
            opacity: 0.6;
            filter: grayscale(0.3);
        }

        .receipt-animate {
            animation: receipt-slide 0.5s ease-out;
        }
    </style>
</head>

<body class="font-body text-slate-100 overflow-x-hidden min-h-screen">
    <!-- Enhanced Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-80 h-80 bg-cinema-500/8 rounded-full blur-3xl floating-element"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-cinema-400/6 rounded-full blur-3xl floating-element"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-cinema-600/4 rounded-full blur-3xl floating-element"></div>
        <div class="absolute top-10 right-1/4 w-64 h-64 bg-purple-500/5 rounded-full blur-3xl floating-element"></div>
    </div>

    <!-- Enhanced Header -->
    <header class="fixed top-0 w-full z-50 glass-effect shadow-2xl animate-fade-in">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-8 py-5">
            <!-- Logo -->
            <div class="flex items-center space-x-5">
                <div class="logo-glow">
                    <div class="w-14 h-14 bg-gradient-to-br from-cinema-500 via-cinema-400 to-cinema-600 rounded-xl flex items-center justify-center shadow-2xl">
                        <i class="fas fa-film text-dark-900 text-2xl"></i>
                    </div>
                </div>
                <div>
                    <h1 class="text-3xl font-serif font-bold text-white tracking-tight">CINEMATION</h1>
                    <p class="text-xs text-cinema-400 font-medium tracking-widest uppercase">Premium Cinema Experience</p>
                </div>
            </div>

            <!-- Enhanced Navigation -->
            <nav class="hidden md:flex items-center space-x-10">
                <a href="/dashboard" class="text-slate-300 hover:text-cinema-400 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Dashboard
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('film.index') }}" class="text-slate-300 hover:text-cinema-400 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Film
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('jadwal.index') }}" class="text-slate-300 hover:text-cinema-400 transition-all duration-300 font-medium text-sm uppercase tracking-wide relative group">
                    Jadwal
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#" class="text-cinema-400 font-semibold text-sm uppercase tracking-wide relative">
                    Pilih Kursi
                    <span class="absolute -bottom-2 left-0 w-full h-0.5 bg-gradient-to-r from-cinema-500 to-cinema-400 rounded-full"></span>
                </a>
            </nav>

            <!-- Enhanced Back Button -->
            <a href="{{ route('jadwal.index') }}" class="btn-outline-cinema px-8 py-3 text-sm font-semibold rounded-xl inline-flex items-center space-x-3">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali</span>
            </a>
        </div>
    </header>

    <!-- Enhanced Main Content -->
    <main class="relative z-10 pt-32 pb-20 px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Enhanced Movie Info Header -->
            <div class="cinema-card rounded-3xl p-10 mb-10 animate-fade-in">
                <div class="text-center">
                    <h2 class="text-5xl font-serif font-bold text-white mb-6 leading-tight">
                        {{ $jadwal->film->judul }}
                    </h2>
                    <p class="text-xl text-slate-300 mb-8 font-light">Pilih kursi terbaik untuk pengalaman menonton yang tak terlupakan</p>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                        <div class="bg-dark-800/40 backdrop-blur-sm rounded-2xl p-6 border border-cinema-500/20">
                            <div class="flex items-center justify-center text-cinema-400 mb-3">
                                <i class="fas fa-calendar text-2xl"></i>
                            </div>
                            <p class="text-sm text-slate-400 mb-1">Tanggal</p>
                            <p class="text-lg font-semibold text-white">{{ $jadwal->tanggal }}</p>
                        </div>
                        
                        <div class="bg-dark-800/40 backdrop-blur-sm rounded-2xl p-6 border border-cinema-500/20">
                            <div class="flex items-center justify-center text-cinema-400 mb-3">
                                <i class="fas fa-clock text-2xl"></i>
                            </div>
                            <p class="text-sm text-slate-400 mb-1">Jam Tayang</p>
                            <p class="text-lg font-semibold text-white">{{ $jadwal->jam_tayang }}</p>
                        </div>
                        
                        <div class="bg-dark-800/40 backdrop-blur-sm rounded-2xl p-6 border border-cinema-500/20">
                            <div class="flex items-center justify-center text-cinema-400 mb-3">
                                <i class="fas fa-couch text-2xl"></i>
                            </div>
                            <p class="text-sm text-slate-400 mb-1">Studio</p>
                            <p class="text-lg font-semibold text-white">Studio {{ $jadwal->studio->nomor_studio }}</p>
                        </div>
                        
                        <div class="bg-dark-800/40 backdrop-blur-sm rounded-2xl p-6 border border-cinema-500/20">
                            <div class="flex items-center justify-center text-cinema-400 mb-3">
                                <i class="fas fa-building text-2xl"></i>
                            </div>
                            <p class="text-sm text-slate-400 mb-1">Bioskop</p>
                            <p class="text-lg font-semibold text-white">{{ $jadwal->studio->bioskop->nama_bioskop }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Left Column - Form -->
                <div class="lg:col-span-2 space-y-10">
                    <form action="{{ route('simpanReservasi') }}" method="POST" id="bookingForm">
                        @csrf
                        <input type="hidden" name="jadwal_id" value="{{ $jadwal->jadwal_id }}" />

                        <!-- Enhanced Payment Method -->
                        <div class="cinema-card rounded-3xl p-10 animate-slide-up">
                            <div class="text-center mb-8">
                                <h3 class="text-3xl font-bold text-white mb-4 flex items-center justify-center">
                                    <i class="fas fa-credit-card mr-4 text-cinema-400 text-4xl"></i>
                                    Metode Pembayaran
                                </h3>
                                <p class="text-slate-400 text-lg">Pilih metode pembayaran yang Anda inginkan</p>
                            </div>
                            
                            <div class="max-w-2xl mx-auto">
                                <select name="metode_pembayaran" id="paymentMethod" class="custom-select w-full px-6 py-4 rounded-2xl text-lg font-medium">
                                    <option value="">🎫 Pilih Metode Pembayaran</option>
                                    <option value="transfer">🏦 Transfer Bank</option>
                                    <option value="e-wallet">📱 E-Wallet (OVO, GoPay, DANA)</option>
                                    <option value="qris">📱 QRIS - Scan & Pay</option>
                                </select>
                            </div>
                        </div>

                        <!-- Enhanced Seat Selection -->
                        <div class="cinema-card rounded-3xl p-10 animate-slide-up">
                            <div class="text-center mb-12">
                                <h3 class="text-3xl font-bold text-white mb-4 flex items-center justify-center">
                                    <i class="fas fa-couch mr-4 text-cinema-400 text-4xl"></i>
                                    Pilih Kursi Premium
                                </h3>
                                <p class="text-slate-400 text-lg">Klik pada kursi yang tersedia untuk memilih tempat duduk Anda</p>
                            </div>

                            <!-- Enhanced Screen -->
                            <div class="flex justify-center mb-16">
                                <div class="screen w-96 h-12 flex items-center justify-center">
                                    <span class="text-dark-700 font-bold text-xl tracking-wider">L A Y A R</span>
                                </div>
                            </div>

                            <!-- Enhanced Seat Map -->
                            <div class="flex justify-center mb-12">
                                <div class="seat-container">
                                    @php
                                        $seatsPerRow = 10;
                                        $totalRows = ceil(count($kursis) / $seatsPerRow);
                                        $rowLabels = range('A', chr(ord('A') + $totalRows - 1));
                                    @endphp
                                    
                                    @for ($row = 0; $row < $totalRows; $row++)
                                        <div class="flex items-center justify-center mb-4">
                                            <!-- Row Label Left -->
                                            <div class="row-label w-12 h-12 flex items-center justify-center text-lg mr-6">
                                                {{ $rowLabels[$row] }}
                                            </div>
                                            
                                            <!-- Seats -->
                                            <div class="flex">
                                                @for ($seatInRow = 0; $seatInRow < $seatsPerRow; $seatInRow++)
                                                    @php
                                                        $seatIndex = $row * $seatsPerRow + $seatInRow;
                                                    @endphp
                                                    
                                                    @if ($seatIndex < count($kursis))
                                                        @php
                                                            $kursi = $kursis[$seatIndex];
                                                            $isAvailable = !in_array($kursi->kursi_id, $reservedKursiIds);
                                                        @endphp
                                                        
                                                        <div class="relative">
                                                            <input type="checkbox" 
                                                                   name="kursi_id[]" 
                                                                   value="{{ $kursi->kursi_id }}"
                                                                   id="seat_{{ $kursi->kursi_id }}"
                                                                   class="seat-checkbox"
                                                                   data-seat-number="{{ $rowLabels[$row] }}{{ $seatInRow + 1 }}"
                                                                   data-price="{{ $jadwal->harga ?? 50000 }}"
                                                                   {{ !$isAvailable ? 'disabled' : '' }}>
                                                            
                                                            <label for="seat_{{ $kursi->kursi_id }}" 
                                                                   class="seat-label {{ $isAvailable ? 'seat-available' : 'seat-occupied' }}">
                                                                {{ $seatInRow + 1 }}
                                                            </label>
                                                        </div>
                                                    @else
                                                        <div class="w-12 h-12 m-1"></div>
                                                    @endif
                                                    
                                                    <!-- Enhanced Aisle Space -->
                                                    @if ($seatInRow == 4)
                                                        <div class="w-8"></div>
                                                    @endif
                                                @endfor
                                            </div>
                                            
                                            <!-- Row Label Right -->
                                            <div class="row-label w-12 h-12 flex items-center justify-center text-lg ml-6">
                                                {{ $rowLabels[$row] }}
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>

                            <!-- Enhanced Seat Legend -->
                            <div class="flex justify-center space-x-8 mb-8">
                                <div class="legend-item flex items-center space-x-3">
                                    <div class="seat-label seat-available w-10 h-10 text-sm">T</div>
                                    <span class="text-slate-300 font-medium">Tersedia</span>
                                </div>
                                <div class="legend-item flex items-center space-x-3">
                                    <div class="seat-label w-10 h-10 text-sm" style="background: linear-gradient(145deg, #eab308 0%, #f59e0b 50%, #ca8a04 100%); border-color: #eab308; color: #0f172a;">D</div>
                                    <span class="text-slate-300 font-medium">Dipilih</span>
                                </div>
                                <div class="legend-item flex items-center space-x-3">
                                    <div class="seat-label seat-occupied w-10 h-10 text-sm">X</div>
                                    <span class="text-slate-300 font-medium">Terisi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                            <a href="{{ route('jadwal.index') }}" 
                               class="btn-outline-cinema px-10 py-5 text-lg font-semibold rounded-2xl inline-flex items-center justify-center space-x-4 min-w-[200px]">
                                <i class="fas fa-arrow-left text-xl"></i>
                                <span>Kembali ke Jadwal</span>
                            </a>
                            
                            <button type="submit" id="submitButton"
                                    class="btn-cinema px-10 py-5 text-lg font-bold text-dark-900 rounded-2xl inline-flex items-center justify-center space-x-4 min-w-[200px] relative">
                                <i class="fas fa-ticket-alt text-xl"></i>
                                <span id="buttonText">Pesan Kursi</span>
                                <i class="fas fa-arrow-right text-xl"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right Column - Receipt -->
                <div class="lg:col-span-1">
                    <div class="receipt-card rounded-3xl p-8 animate-scale-in" id="receiptCard">
                        <!-- Receipt Header -->
                        <div class="receipt-header p-6 rounded-t-2xl mb-6">
                            <div class="text-center">
                                <i class="fas fa-receipt text-4xl text-cinema-400 mb-4"></i>
                                <h3 class="text-2xl font-bold text-white mb-2">Ringkasan Pesanan</h3>
                                <p class="text-slate-400">Detail pemesanan tiket Anda</p>
                            </div>
                        </div>

                        <!-- Movie Info -->
                        <div class="space-y-4 mb-6">
                            <div class="receipt-item p-4 rounded-xl">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm text-slate-400 mb-1">Film</p>
                                        <p class="text-white font-semibold">{{ $jadwal->film->judul }}</p>
                                    </div>
                                    <i class="fas fa-film text-cinema-400"></i>
                                </div>
                            </div>

                            <div class="receipt-item p-4 rounded-xl">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm text-slate-400 mb-1">Tanggal & Waktu</p>
                                        <p class="text-white font-semibold">{{ $jadwal->tanggal }} - {{ $jadwal->jam_tayang }}</p>
                                    </div>
                                    <i class="fas fa-calendar-alt text-cinema-400"></i>
                                </div>
                            </div>

                            <div class="receipt-item p-4 rounded-xl">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm text-slate-400 mb-1">Studio & Bioskop</p>
                                        <p class="text-white font-semibold">Studio {{ $jadwal->studio->nomor_studio }}</p>
                                        <p class="text-xs text-slate-500">{{ $jadwal->studio->bioskop->nama_bioskop }}</p>
                                    </div>
                                    <i class="fas fa-building text-cinema-400"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Selected Seats -->
                        <div class="mb-6">
                            <div class="receipt-item p-4 rounded-xl">
                                <div class="flex justify-between items-start mb-3">
                                    <div>
                                        <p class="text-sm text-slate-400 mb-1">Kursi Dipilih</p>
                                        <p class="text-white font-semibold" id="selectedSeatsText">Belum ada kursi dipilih</p>
                                    </div>
                                    <i class="fas fa-couch text-cinema-400"></i>
                                </div>
                                <div class="flex flex-wrap gap-2" id="seatBadges">
                                    <!-- Seat badges will be inserted here -->
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-6">
                            <div class="receipt-item p-4 rounded-xl">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm text-slate-400 mb-1">Metode Pembayaran</p>
                                        <p class="text-white font-semibold" id="paymentMethodText">Belum dipilih</p>
                                    </div>
                                    <i class="fas fa-credit-card text-cinema-400"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between items-center text-slate-300">
                                <span>Jumlah Tiket</span>
                                <span id="ticketCount">0</span>
                            </div>
                            <div class="flex justify-between items-center text-slate-300">
                                <span>Harga per Tiket</span>
                                <span>Rp {{ number_format($jadwal->harga ?? 50000, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between items-center text-slate-300">
                                <span>Subtotal</span>
                                <span id="subtotal">Rp 0</span>
                            </div>
                            <div class="border-t border-cinema-500/30 pt-3">
                                <div class="flex justify-between items-center text-slate-300">
                                    <span>Biaya Admin</span>
                                    <span>Rp 5.000</span>
                                </div>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="receipt-total p-6 mb-6">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-slate-400 text-sm mb-1">Total Pembayaran</p>
                                    <p class="text-3xl font-bold price-highlight" id="totalPrice">Rp 0</p>
                                </div>
                                <div class="text-right">
                                    <div class="w-16 h-16 bg-gradient-to-br from-cinema-500 to-cinema-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-money-bill-wave text-dark-900 text-xl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Receipt Footer -->
                        <div class="text-center text-xs text-slate-500 border-t border-cinema-500/20 pt-4">
                            <p>Terima kasih telah memilih Cinemation</p>
                            <p>Nikmati pengalaman menonton terbaik!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Enhanced JavaScript -->
    <script>
        const ticketPrice = {{ $jadwal->harga ?? 50000 }};
        const adminFee = 5000;

        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[name="kursi_id[]"]');
            const paymentSelect = document.getElementById('paymentMethod');
            const receiptCard = document.getElementById('receiptCard');

            // Seat selection handling
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateReceipt();
                    updateButtonText();
                });
            });

            // Payment method handling
            paymentSelect.addEventListener('change', function() {
                updatePaymentMethod();
            });

            function updateReceipt() {
                const selectedSeats = document.querySelectorAll('input[name="kursi_id[]"]:checked');
                const selectedSeatsText = document.getElementById('selectedSeatsText');
                const seatBadges = document.getElementById('seatBadges');
                const ticketCount = document.getElementById('ticketCount');
                const subtotal = document.getElementById('subtotal');
                const totalPrice = document.getElementById('totalPrice');

                // Update seat selection
                if (selectedSeats.length > 0) {
                    const seatNumbers = Array.from(selectedSeats).map(seat => seat.dataset.seatNumber);
                    selectedSeatsText.textContent = seatNumbers.join(', ');
                    
                    // Create seat badges
                    seatBadges.innerHTML = '';
                    seatNumbers.forEach(seatNumber => {
                        const badge = document.createElement('span');
                        badge.className = 'inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-cinema-500/20 text-cinema-400 border border-cinema-500/30';
                        badge.textContent = seatNumber;
                        seatBadges.appendChild(badge);
                    });

                    receiptCard.classList.remove('empty-receipt');
                    receiptCard.classList.add('receipt-animate');
                } else {
                    selectedSeatsText.textContent = 'Belum ada kursi dipilih';
                    seatBadges.innerHTML = '';
                    receiptCard.classList.add('empty-receipt');
                }

                // Update pricing
                const count = selectedSeats.length;
                const subtotalAmount = count * ticketPrice;
                const totalAmount = subtotalAmount + (count > 0 ? adminFee : 0);

                ticketCount.textContent = count;
                subtotal.textContent = 'Rp ' + subtotalAmount.toLocaleString('id-ID');
                totalPrice.textContent = 'Rp ' + totalAmount.toLocaleString('id-ID');

                // Add animation to price
                totalPrice.style.animation = 'price-update 0.4s ease-out';
                setTimeout(() => {
                    totalPrice.style.animation = '';
                }, 400);
            }

            function updatePaymentMethod() {
                const paymentMethodText = document.getElementById('paymentMethodText');
                const selectedMethod = paymentSelect.value;
                
                const methodNames = {
                    'transfer': '🏦 Transfer Bank',
                    'e-wallet': '📱 E-Wallet',
                    'qris': '📱 QRIS'
                };

                paymentMethodText.textContent = selectedMethod ? methodNames[selectedMethod] : 'Belum dipilih';
            }

            function updateButtonText() {
                const selectedSeats = document.querySelectorAll('input[name="kursi_id[]"]:checked');
                const buttonText = document.getElementById('buttonText');
                
                if (selectedSeats.length > 0) {
                    buttonText.textContent = `Pesan ${selectedSeats.length} Kursi`;
                } else {
                    buttonText.textContent = 'Pesan Kursi';
                }
            }

            // Form submission
            document.getElementById('bookingForm').addEventListener('submit', function(e) {
                const selectedSeats = document.querySelectorAll('input[name="kursi_id[]"]:checked');
                const paymentMethod = paymentSelect.value;

                let errors = [];
                if (selectedSeats.length === 0) {
                    errors.push('• Pilih setidaknya satu kursi');
                }
                if (!paymentMethod) {
                    errors.push('• Pilih metode pembayaran');
                }

                if (errors.length > 0) {
                    e.preventDefault();
                    showNotification("Form belum lengkap:\n" + errors.join('\n'), 'error');
                } else {
                    // Enhanced loading state
                    const submitButton = document.getElementById('submitButton');
                    const buttonText = document.getElementById('buttonText');
                    
                    submitButton.disabled = true;
                    submitButton.classList.add('opacity-75');
                    buttonText.innerHTML = '<div class="loading-spinner w-5 h-5 mr-2"></div>Memproses Pesanan...';
                }
            });
        });

        // Enhanced notification function
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            let bgClass = 'bg-gradient-to-r from-cinema-500 to-cinema-600 text-dark-900';
            let icon = 'fa-info-circle';
            
            if (type === 'error') {
                bgClass = 'bg-gradient-to-r from-red-500 to-red-600 text-white';
                icon = 'fa-exclamation-triangle';
            } else if (type === 'success') {
                bgClass = 'bg-gradient-to-r from-green-500 to-green-600 text-white';
                icon = 'fa-check-circle';
            }
            
            notification.className = `notification fixed top-6 right-6 z-50 p-6 rounded-2xl shadow-2xl animate-slide-up max-w-sm ${bgClass}`;
            notification.innerHTML = `
                <div class="flex items-start space-x-3">
                    <i class="fas ${icon} text-2xl mt-1"></i>
                    <div class="font-semibold whitespace-pre-line leading-relaxed">${message}</div>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => notification.remove(), 300);
            }, 5000);
        }

        // Enhanced header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(15, 23, 42, 0.98)';
                header.style.backdropFilter = 'blur(30px)';
            } else {
                header.style.background = 'rgba(15, 23, 42, 0.9)';
                header.style.backdropFilter = 'blur(25px)';
            }
        });

        // Add smooth scroll behavior
        document.documentElement.style.scrollBehavior = 'smooth';
    </script>
</body>

</html>