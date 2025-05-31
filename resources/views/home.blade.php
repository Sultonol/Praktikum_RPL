<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CineStream - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Poppins:wght@600;800&display=swap" rel="stylesheet" />
    <style>
        /* COLORS PALETTE */
        :root {
            --dark-purple: #2b0147;
            --light-purple: #6f42c1;
            --lighter-purple: #a084f0;
            --black: #0f0f0f;
            --white: #f5f5f5;
            --gray-light: #cfcfe8;
            --gray-dark: #3a2f5d;
            --gold: #e6c200;
        }

        /* RESET & BASE */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: var(--black);
            color: var(--white);
            font-family: 'Inter', sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* HEADER */
        header {
            background: var(--dark-purple);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem 3rem;
            box-shadow: 0 3px 8px rgba(111, 66, 193, 0.5);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        header .logo {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--lighter-purple);
            letter-spacing: 0.1em;
            user-select: none;
        }

        nav {
            background-color: var(--gray-dark);
            padding: 0.5rem 1.5rem;
            border-radius: 9999px;
            display: flex;
            gap: 1.5rem;
            box-shadow: 0 2px 10px rgba(111, 66, 193, 0.6);
        }

        nav a {
            color: var(--gray-light);
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 9999px;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 1rem;
        }

        nav a:hover,
        nav a.active {
            background-color: var(--light-purple);
            color: var(--white);
            box-shadow: 0 0 8px var(--lighter-purple);
        }

        .user-panel {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .avatar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--light-purple), var(--lighter-purple));
            box-shadow: 0 0 8px var(--lighter-purple);
            cursor: pointer;
        }

        .login-btn,
        .register-btn {
            font-weight: 600;
            padding: 0.55rem 1.4rem;
            border-radius: 9999px;
            transition: background-color 0.3s ease, color 0.3s ease;
            border: 2px solid transparent;
            font-size: 0.95rem;
            cursor: pointer;
            user-select: none;
        }

        .login-btn {
            background-color: var(--black);
            color: var(--lighter-purple);
            border-color: var(--lighter-purple);
            box-shadow: 0 0 6px var(--lighter-purple);
        }

        .login-btn:hover {
            background-color: var(--lighter-purple);
            color: var(--black);
            box-shadow: 0 0 12px var(--light-purple);
        }

        .register-btn {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .register-btn:hover {
            background-color: var(--lighter-purple);
            border-color: var(--lighter-purple);
            color: var(--black);
            box-shadow: 0 0 12px var(--light-purple);
        }

        /* HERO SECTION */
        .hero {
            text-align: center;
            padding: 6rem 1.5rem 5rem;
            background: linear-gradient(135deg, var(--dark-purple), var(--black));
            box-shadow: inset 0 0 100px 10px rgba(111, 66, 193, 0.8);
            user-select: none;
        }

        .hero h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            line-height: 1.2;
            margin-bottom: 1rem;
            color: var(--lighter-purple);
            text-shadow: 0 0 8px var(--light-purple);
        }

        .hero h1 strong {
            color: var(--gold);
            text-shadow: 0 0 12px var(--gold);
        }

        .hero p {
            font-family: 'Nunito', sans-serif;
            font-size: 1.25rem;
            color: var(--gray-light);
            max-width: 520px;
            margin: 0 auto;
            margin-bottom: 2.5rem;
            text-shadow: 0 0 6px rgba(255 255 255 / 0.1);
            user-select: text;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }

        .hero-buttons button {
            font-weight: 700;
            font-size: 1.1rem;
            padding: 0.75rem 2.5rem;
            border-radius: 0.75rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(111, 66, 193, 0.6);
            user-select: none;
        }

        .get-started {
            background: linear-gradient(45deg, var(--light-purple), var(--lighter-purple));
            color: var(--white);
            text-shadow: 0 0 8px var(--lighter-purple);
        }

        .get-started:hover {
            background: linear-gradient(45deg, var(--lighter-purple), var(--light-purple));
            box-shadow: 0 6px 25px var(--lighter-purple);
            transform: scale(1.05);
        }

        .show-film {
            background-color: transparent;
            border: 2px solid var(--lighter-purple);
            color: var(--lighter-purple);
            text-shadow: none;
        }

        .show-film:hover {
            background-color: var(--lighter-purple);
            color: var(--black);
            box-shadow: 0 6px 20px var(--lighter-purple);
            transform: scale(1.05);
        }

        /* FILM CARDS */
        .film-container {
            display: flex;
            gap: 1.25rem;
            overflow-x: auto;
            padding: 2.5rem 2.5rem 4rem;
            scroll-behavior: smooth;
            user-select: none;
        }

        .film-container::-webkit-scrollbar {
            height: 8px;
        }

        .film-container::-webkit-scrollbar-track {
            background: var(--dark-purple);
            border-radius: 10px;
        }

        .film-container::-webkit-scrollbar-thumb {
            background: var(--lighter-purple);
            border-radius: 10px;
        }

        .film-card {
            min-width: 220px;
            background: linear-gradient(145deg, var(--gray-dark), var(--dark-purple));
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(111, 66, 193, 0.6);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }

        .film-card:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 25px var(--lighter-purple);
        }

        .film-card img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-bottom: 3px solid var(--light-purple);
            transition: filter 0.3s ease;
        }

        .film-card:hover img {
            filter: brightness(1.1);
        }

        .info {
            padding: 1.25rem 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info h3 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--gold);
            text-shadow: 0 0 8px var(--gold);
        }

        .info p {
            margin: 0.3rem 0 0 0;
            color: var(--gray-light);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            header {
                padding: 1rem 1.5rem;
            }

            nav {
                gap: 0.75rem;
                padding: 0.5rem 1rem;
            }

            .film-container {
                padding: 2rem 1rem 3rem;
            }

            .film-card {
                min-width: 180px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero-buttons button {
                padding: 0.6rem 1.8rem;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body

<body>
    <header>
        <div class="logo">CINESTREAM</div>
        <nav>
            <a href="#" class="active">Film</a>
            <a href="#">Food</a>
            <a href="#">Bioskop</a>
            <a href="#">Booking</a>
        </nav>
        <div class="user-panel">
            <div class="avatar"></div>
            <a href="/login" class="login-btn">Login</a>
            <a href="/register" class="register-btn">Registrasi</a>
        </div>
    </header>

    <section class="hero">
        <h1>Discover the Series Streaming</h1>
        <h1>Experience with <strong>CineStream</strong></h1>
        <p>Our young and expert admins prepare amazing and trend <br> series for you to watch online and priceless</p>
        <div class="hero-buttons">
            <button class="get-started">Get started</button>
            <button class="show-film">Show Film</button>
        </div>
    </section>

    <section class="film-container">
        @foreach([
            ['img' => 'gambar1.jpeg', 'title' => 'Bilinear brothers II', 'info' => '2022 • 1h 45m • English'],
            ['img' => 'gambar2.jpeg', 'title' => 'Family on Summer Time', 'info' => '2023 • 1h 30m • English'],
            ['img' => 'gambar3.jpeg', 'title' => 'Magic Kingdom', 'info' => '2024 • 2h 00m • English'],
            ['img' => 'gambar4.jpeg', 'title' => 'Night Runner', 'info' => '2021 • 1h 40m • English'],
            ['img' => 'gambar5.jpeg', 'title' => 'Deep Sea Adventure', 'info' => '2020 • 1h 50m • English'],
            ['img' => 'gambar6.jpeg', 'title' => 'Haunted Melody', 'info' => '2023 • 2h 10m • English'],
            ['img' => 'gambar7.jpeg', 'title' => 'Sky City 9', 'info' => '2024 • 1h 20m • English'],
            ['img' => 'gambar8.jpeg', 'title' => 'Jungle Quest', 'info' => '2022 • 1h 35m • English'],
            ['img' => 'gambar9.jpeg', 'title' => 'Final Orbit', 'info' => '2021 • 1h 55m • English'],
            ['img' => 'gambar10.jpeg', 'title' => 'Legends Rise', 'info' => '2023 • 2h 05m • English'],
        ] as $film)
            <div class="film-card">
                <img src="{{ asset('img/' . $film['img']) }}" alt="{{ $film['title'] }}">
                <div class="info">
                    <h3>{{ $film['title'] }}</h3>
                    <p>{{ $film['info'] }}</p>
                </div>
            </div>
        @endforeach
    </section>
</body>

</html>
