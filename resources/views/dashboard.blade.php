<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BioskopKita</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: #fff;
            overflow-x: visible !important;
            overflow-y: visible !important;
            min-height: 100vh;
            padding-bottom: 60px;
        }

        nav {
            background: rgba(15, 23, 42, 0.95);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(255, 255, 255, 0.05);
        }

        .nav-left,
        .nav-center,
        .nav-right {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .nav-left h1 {
            font-size: 24px;
            color: #facc15;
        }

        .nav-center {
            justify-content: center;
        }

        .nav-center ul {
            display: flex;
            gap: 24px;
            list-style: none;
        }

        .nav-center ul li a {
            color: #94a3b8;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            font-size: 16px;
        }

        .nav-center ul li a:hover {
            color: #facc15;
        }

        .nav-right {
            justify-content: flex-end;
            gap: 16px;
        }

        .notification {
            position: relative;
            font-size: 20px;
            cursor: pointer;
            color: #facc15;
        }

        .notif-badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: #ef4444;
            color: white;
            font-size: 10px;
            border-radius: 50%;
            padding: 2px 5px;
        }

        .profile-info {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
        }

        .profile-pic {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #facc15;
        }

        .profile-text {
            display: flex;
            flex-direction: column;
            font-size: 12px;
            line-height: 1.2;
        }

        .status {
            font-size: 11px;
            color: #a3e635;
        }

        .logout-btn {
            color: #94a3b8;
            background: none;
            border: none;
            font-size: 16px;
            cursor: pointer;
            font-weight: 500;
            transition: color 0.3s;
        }

        .logout-btn:hover {
            color: #facc15;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .category-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            margin-bottom: 30px;
        }

        .category-btn {
            padding: 10px 20px;
            border-radius: 20px;
            background-color: #334155;
            color: #f1f5f9;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .category-btn:hover {
            background-color: #facc15;
            color: #000;
        }

        .movie-grid {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding-bottom: 20px;
            scrollbar-width: none;
            -ms-overflow-style: none;

        }

        .movie-grid::-webkit-scrollbar {
            display: none;

        }


        .movie-card {
            margin-top: 30px;
            flex: 0 0 auto;
            width: 180px;
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
            border: 2px solid transparent;

            /* ← penting */
            z-index: 9999;
            /* default */
        }

        .movie-card:hover {
            transform: translateY(-10px) scale(1.1);
            /* lebih dramatis */
            border: 2px solid #facc15;
            box-shadow: 0 12px 30px rgba(250, 204, 21, 0.2);
            z-index: 10;
            /* supaya muncul di atas */
        }



        .movie-poster {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .movie-info {
            padding: 12px;
            color: #e2e8f0;
        }

        .movie-info h4 {
            margin-bottom: 6px;
            font-size: 16px;
            font-weight: 600;
        }

        .movie-info span {
            font-size: 14px;
            color: #facc15;
        }
    </style>
</head>

<body>

    <nav>
        <div class="nav-left">
            <h1>Cinemation</h1>
        </div>

        <div class="nav-center">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="{{ request()->routeIs('dashboard') ? 'text-yellow-400' : '' }}">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('jadwal') }}"
                        class="{{ request()->routeIs('jadwal') ? 'text-yellow-400' : '' }}">Jadwal</a>
                </li>
                <li>
                    <a href="{{ route('tiket') }}"
                        class="{{ request()->routeIs('tiket') ? 'text-yellow-400' : '' }}">Tiket Saya</a>
                </li>

            </ul>
        </div>

        <div class="nav-right">
            <div class="notification">
                🔔<span class="notif-badge">3</span>
            </div>
            <div class="profile-info">
                <img src="https://i.pravatar.cc/40?img=3" alt="Profile" class="profile-pic">
                <div class="profile-text">
                    <strong>{{ Auth::user()->name }}</strong>
                    <span class="status">Premium</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button class="logout-btn" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="category-bar">
            <button class="category-btn">Trending</button>
            <button class="category-btn">Action</button>
            <button class="category-btn">Romance</button>
            <button class="category-btn">Animation</button>
            <button class="category-btn">Horror</button>
            <button class="category-btn">Drakor</button>
        </div>

        <div class="movie-grid">
            @for ($i = 1; $i <= 20; $i++)
                <div class="movie-card">
                    <img src="{{ asset('img/gambar' . $i . '.jpeg') }}" alt="Poster {{ $i }}"
                        class="movie-poster">
                    <div class="movie-info">
                        {{-- <h4>Film {{ $i }}</h4> --}}
                        <span>2024 | 2D | R{{ rand(13, 21) }}+ | {{ rand(1, 2) }}h {{ rand(0, 59) }}m</span>
                    </div>
                </div>
            @endfor
        </div>

        <div style="text-align:center; margin-top: 20px;">
            <a href="{{ route('film.index') }}"
                style="background:#facc15; color:#000; padding: 10px 20px; border-radius: 20px; font-weight: 600; text-decoration:none;">
                Lihat Semua Film
            </a>
        </div>

    </div>
    </div>

</body>

</html>
