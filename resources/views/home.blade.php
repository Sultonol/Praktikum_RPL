<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CineStream - Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Poppins:wght@600;800&display=swap" rel="stylesheet" />
  <style>
    ::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>
<body class="bg-[#0e0e10] text-gray-100 font-[Inter]">

  <header class="bg-gradient-to-r from-[#11111a] via-[#1c1c28] to-[#11111a] shadow-lg sticky top-0 z-50">
    <div class="flex justify-between items-center px-8 py-5">
      <div class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-yellow-400 font-[Poppins] tracking-wide">
        CINESTREAM
      </div>
      <nav class="flex gap-4 px-6 py-2 bg-[#1f1f2e] rounded-full shadow-inner shadow-purple-900/30 backdrop-blur-sm">
        <a href="#" class="text-gray-300 hover:text-white hover:bg-purple-600 px-4 py-1.5 rounded-full transition font-semibold bg-purple-600/10">Film</a>
        <a href="#" class="text-gray-300 hover:text-white hover:bg-purple-600 px-4 py-1.5 rounded-full transition font-semibold">Food</a>
        <a href="#" class="text-gray-300 hover:text-white hover:bg-purple-600 px-4 py-1.5 rounded-full transition font-semibold">Bioskop</a>
        <a href="#" class="text-gray-300 hover:text-white hover:bg-purple-600 px-4 py-1.5 rounded-full transition font-semibold">Booking</a>
      </nav>
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-purple-500 to-indigo-400 shadow-lg"></div>
        <a href="/login" class="border border-purple-400 text-purple-300 px-4 py-1.5 rounded-full hover:bg-purple-500 hover:text-black transition font-semibold text-sm shadow-md">Login</a>
        <a href="/register" class="border border-gray-300 text-white px-4 py-1.5 rounded-full hover:bg-yellow-400 hover:text-black transition font-semibold text-sm shadow-md">Registrasi</a>
      </div>
    </div>
  </header>

  <section class="text-center py-24 bg-gradient-to-b from-[#1a1a2e] via-[#0f0f10] to-black shadow-inner">
    <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-500 font-[Poppins] drop-shadow-xl">
      Discover the Series Streaming
    </h1>
    <h1 class="text-4xl font-extrabold text-yellow-400 mt-2 font-[Poppins] drop-shadow-lg">
      Experience with <strong class="drop-shadow-2xl">CineStream</strong>
    </h1>
    <p class="mt-6 max-w-xl mx-auto text-lg text-gray-400 font-[Nunito]">
      Our young and expert admins prepare amazing and trend<br>series for you to watch online and priceless
    </p>
    <div class="mt-8 flex justify-center gap-6">
      <button class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white px-6 py-3 rounded-xl text-lg font-bold shadow-lg hover:scale-105 transition">Get started</button>
      <button class="border border-purple-400 text-purple-300 px-6 py-3 rounded-xl text-lg font-semibold hover:bg-purple-500 hover:text-black transition shadow-md hover:scale-105">Show Film</button>
    </div>
  </section>

  <!-- Carousel Section -->
  <section class="relative px-8 py-16 bg-[#0e0e10]">
    <h2 class="text-3xl font-extrabold text-white mb-8 font-[Poppins] tracking-tight">
      🎬 Featured Films Just For You
    </h2>
    <div class="relative">
      <!-- Arrow Left -->
      <button onclick="scrollLeft()" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-black bg-opacity-50 hover:bg-opacity-80 p-3 rounded-full text-white shadow-xl">
        &#10094;
      </button>

      <!-- Carousel -->
      <div id="filmCarousel" class="flex gap-6 overflow-x-auto scroll-smooth px-2">
        @foreach([
            ['img' => 'gambar1.jpeg', 'title' => 'Bilinear brothers II', 'info' => '2022 • 1h 45m • English'],
            ['img' => 'gambar2.jpeg', 'title' => 'Family on Summer Time', 'info' => '2023 • 1h 30m • English'],
            ['img' => 'gambar3.jpeg', 'title' => 'Magic Kingdom', 'info' => '2024 • 2h 00m • English'],
            ['img' => 'gambar4.jpeg', 'title' => 'Night Runner', 'info' => '2021 • 1h 40m • English'],
            ['img' => 'gambar5.jpeg', 'title' => 'Deep Sea Adventure', 'info' => '2020 • 1h 50m • English'],
            ['img' => 'gambar6.jpeg', 'title' => 'Haunted Melody', 'info' => '2023 • 2h 10m • English'],
            ['img' => 'gambar7.jpeg', 'title' => 'Sky City 9', 'info' => '2024 • 1h 20m • English'],
            ['img' => 'gambar8.jpeg', 'title' => 'Jungle Quest', 'info' => '2022 • 1h 35m • English'],
        ] as $film)
        <div class="min-w-[220px] max-w-[220px] rounded-xl bg-[#1f1f2e] hover:scale-105 hover:shadow-xl transition transform duration-300 overflow-hidden shadow-lg cursor-pointer flex flex-col">
          <img src="{{ asset('img/' . $film['img']) }}" alt="{{ $film['title'] }}" class="w-full h-64 object-cover" />
          <div class="p-4">
            <h3 class="text-yellow-400 font-bold text-lg mb-1">{{ $film['title'] }}</h3>
            <p class="text-sm text-gray-400">{{ $film['info'] }}</p>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Arrow Right -->
      <button onclick="scrollRight()" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-black bg-opacity-50 hover:bg-opacity-80 p-3 rounded-full text-white shadow-xl">
        &#10095;
      </button>
    </div>
  </section>

  <script>
    const carousel = document.getElementById('filmCarousel');
    function scrollLeft() {
      carousel.scrollBy({ left: -240 * 4, behavior: 'smooth' }); // 4 card size
    }
    function scrollRight() {
      carousel.scrollBy({ left: 240 * 4, behavior: 'smooth' }); // 4 card size
    }
  </script>
</body>
</html>
