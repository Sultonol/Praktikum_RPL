<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineStream - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <style>
        body {
    background-color: #0f0f0f;
    color: white;
    font-family: 'Inter', sans-serif;
    margin: 0;
}

/* Header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.25rem 2.5rem;
    background-color: #0f0f0f;
}

header .logo {
    color: #ffd700;
    font-weight: bold;
    font-size: 1.125rem;
}

nav {
    background-color: #1e1e1e;
    padding: 0.5rem 1.25rem;
    border-radius: 9999px;
    display: flex;
    gap: 1rem;
}

nav a {
    color: #ccc;
    padding: 0.5rem 1.25rem;
    border-radius: 9999px;
    text-decoration: none;
    background-color: transparent;
    transition: all 0.2s ease;
}

nav a:hover,
nav a.active {
    background-color: #333;
    color: white;
}

/* .avatar {
    width: 2.25rem;
    height: 2.25rem;
    background-color: #ffd700;
    border-radius: 9999px;
} */

.login-btn {
    background-color: #1a1a1a;
    color: white;
    font-weight: 600;
    padding: 0.5rem 1.25rem;
    border-radius: 9999px;
    text-decoration: none;
}

.login-btn:hover {
    background-color: #e6c200
}

.user-panel {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.register-btn {
    background-color: #1a1a1a;
    color: white;
    font-weight: 600;
    padding: 0.5rem 1.25rem;
    border-radius: 9999px;
    text-decoration: none;
    transition: background-color 0.2s ease;
}

.register-btn:hover {
    background-color: #e6c200;
}

/* Hero Section */
.hero {
    text-align: center;
    padding: 4rem 1.25rem;
}

.hero h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 2.25rem;
    line-height: 1.3;
    margin-bottom: 1.5rem;
}

.hero p {
    font-family: 'Nunito', sans-serif;
    font-size: 1.125rem;
    color: #cccccc;
}

.hero-buttons {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.hero-buttons button {
    font-weight: 600;
    padding: 0.75rem 1.25rem;
    border-radius: 0.5rem;
    border: none;
    cursor: pointer;
}

.hero-buttons .get-started {
    background-color: #ffd700;
    color: black;
}

.hero-buttons .show-film {
    background-color: #1a1a1a;
    color: white;
    border: 1px solid white;
}

/* Film Card Section */
.film-container {
    display: flex;
    gap: 1rem;
    overflow-x: auto;
    padding: 2.5rem 1.25rem;
    scroll-behavior: smooth;
}

.film-container::-webkit-scrollbar {
    display: none;
}

.film-card {
    min-width: 220px;
    background-color: #1e1e1e;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.3);
    transition: transform 0.3s ease;
}

.film-card:hover {
    transform: scale(1.05);
}

.film-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.film-card .info {
    padding: 1rem;
}

.film-card h3 {
    font-size: 1rem;
    font-weight: 600;
    color: white;
}

.film-card p {
    font-size: 0.875rem;
    color: #aaa;
    margin-top: 0.25rem;
}

    </style>
</head>

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
