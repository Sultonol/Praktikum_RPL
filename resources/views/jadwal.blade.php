<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Jadwal Film</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .film-header {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .poster {
            width: 150px;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .film-info {
            flex: 1;
        }

        .film-info h2 {
            margin: 0;
            font-size: 24px;
        }

        .film-info p {
            margin: 6px 0;
            font-size: 14px;
        }

        .tanggal-nav {
            display: flex;
            overflow-x: auto;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .tanggal-item {
            padding: 10px 14px;
            border-radius: 8px;
            background-color: #e0e0e0;
            cursor: pointer;
            white-space: nowrap;
            font-size: 14px;
        }

        .tanggal-item.active {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .jadwal-box {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .jadwal-box p {
            margin: 4px 0;
        }

        .btn {
            display: inline-block;
            margin-top: 12px;
            padding: 10px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="containerr">
        <a href="{{ route('film.index') }}" class="btn" style="margin-bottom: 20px; display: inline-block;">← Kembali ke
            Film </a>
    </div>
    <div class="container">
        {{-- Cek apakah ada jadwal --}}
        @if (count($jadwals) > 0)
            @php
                $film = $jadwals[0]->film;
                $genre = $film->genre->nama_genre ?? 'Tidak ada genre';
                // $poster = $film->url_poster ?? 'https://via.placeholder.com/150x220';
            @endphp

            <div class="film-header">
                <img src="{{ asset($film->poster) }}" alt="Poster" {{ $film->judul }} class="poster">
                <div class="film-info">
                    <h2>{{ $film->judul }}</h2>
                    <p><strong>Genre:</strong> {{ $genre }}</p>
                    <p><strong>Durasi:</strong> {{ $film->durasi }} menit</p>
                    <p><strong>Format:</strong> {{ $film->format }}</p>
                    <p><strong>Rating:</strong> {{ $film->rating }}</p>
                </div>
            </div>

            <div class="tanggal-nav">
                @php
                    $tanggalUnik = $jadwals->pluck('tanggal')->unique()->sort();
                @endphp
                @foreach ($tanggalUnik as $tanggal)
                    <div class="tanggal-item {{ \Carbon\Carbon::parse($tanggal)->isToday() ? 'active' : '' }}">
                        {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('D, d M') }}
                    </div>
                @endforeach
            </div>
            @php
                $jadwals = $jadwals->sortBy(fn($j) => strtotime($j->tanggal . ' ' . $j->jam_tayang));
            @endphp
            {{-- Jadwal tayang --}}
            @foreach ($jadwals as $jadwal)
                <div class="jadwal-box">
                    <p><strong>Tanggal:</strong>
                        {{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('d M Y') }}</p>
                    <p><strong>Jam Tayang:</strong> {{ \Carbon\Carbon::parse($jadwal->jam_tayang)->format('H:i') }}</p>
                    <p><strong>Studio:</strong> Studio {{ $jadwal->studio->nomor_studio }}</p>
                    <p><strong>Bioskop:</strong> {{ $jadwal->studio->bioskop->nama_bioskop }}</p>
                    <p><strong>Alamat:</strong> {{ $jadwal->studio->bioskop->alamat }}</p>
                    @php
                        $hargaFix = $jadwal->harga < 40000 ? 35000 : 45000;
                    @endphp
                    <p><strong>Harga:</strong> Rp{{ number_format($hargaFix, 0, ',', '.') }}</p>

                    <a href="{{ route('reservasi', ['jadwal_id' => $jadwal->jadwal_id]) }}" class="btn">Pilih
                        Kursi</a>
                </div>
            @endforeach
        @endif
    </div>
</body>

</html>
