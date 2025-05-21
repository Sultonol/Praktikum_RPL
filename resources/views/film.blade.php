<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Daftar Film</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 30px;
            background: linear-gradient(135deg, #fff 0%, #fff 100%);
            color: #333;
            min-height: 100vh;
            margin: 0;
        }

        .btn-back-dashboard {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 25px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 40px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .film-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .film-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            cursor: pointer;
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .film-card:hover {
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
        }

        .film-card img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
            transition: none;
            /* hilangkan efek zoom */
            border-radius: 12px;
        }

        /* Overlay saat hover */
        .film-card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.45);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 12px;
            border-radius: 12px;
            pointer-events: none;
            /* supaya overlay tidak blok klik saat tidak terlihat */
        }

        .film-card:hover .overlay {
            opacity: 1;
            pointer-events: auto;
            /* aktifkan klik saat hover */
        }

        /* Tombol Lihat Trailer */
        .btn-trailer-hover {
            padding: 10px 40px;
            background: transparent;
            border: 2px solid #000;
            border-radius: 40px;
            color: #000;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .btn-trailer-hover:hover {
            background-color: #000;
            color: #fff;
        }

        /* Tombol Beli Tiket */
        .btn-beli-hover {
            padding: 10px 40px;
            background-color: #000;
            border: none;
            border-radius: 40px;
            color: #fff;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-beli-hover:hover {
            background-color: #333;
        }

        /* Konten judul dan info */
        .film-content {
            padding: 15px 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 6px;
        }

        .film-content h4 {
            margin: 0;
            font-size: 18px;
            color: #333;
            font-weight: 700;
        }

        .film-content p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }

        /* Responsive tweaks */
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }

            .film-card img {
                height: 240px;
            }
        }

        /* Modal Styles */
        #modalTrailer {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999999;
            align-items: center;
            justify-content: center;
        }

        #modalTrailer>div {
            background: #0f0f0f;
            width: 800px;
            max-width: 90vw;
            aspect-ratio: 16 / 9;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #modalClose {
            position: absolute;
            top: 10px;
            right: 10px;
            border: none;
            background: transparent;
            color: #fff;
            font-size: 30px;
            cursor: pointer;
            z-index: 10;
            line-height: 1;
        }
    </style>
</head>

<body>

    <a href="/dashboard" class="btn-back-dashboard">← Kembali ke Dashboard</a>
    <h2>Daftar Film ({{ count($films) }})</h2>

    <div class="film-container">
        @foreach ($films as $film)
            <div class="film-card">
                <img src="{{ asset($film->poster) }}" alt="Poster {{ $film->judul }}">
                <!-- Overlay dengan tombol saat hover -->
                <div class="overlay">
                    <button class="btn-trailer-hover" data-trailer="{{ $film->trailer }}">Lihat trailer</button>
                    <button class="btn-beli-hover"
                        onclick="window.location.href='{{ route('jadwal.index', ['film_id' => $film->film_id]) }}'">Beli
                        tiket</button>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="film-content">
                    <h4>{{ $film->judul }}</h4>
                    <p><strong>Durasi:</strong> {{ $film->durasi }} menit</p>
                    <p><strong>Sutradara:</strong> {{ $film->sutradara }}</p>
                    {{-- <p><strong>Sinopsis:</strong>{{ $film->sinopsis }}</p> --}}
                </div>
            </div>
        @endforeach
    </div>

    <div id="modalTrailer">
        <div>
            <button id="modalClose">&times;</button>
            <!-- Tempat video/iframe -->
        </div>
    </div>

    <script>
        const modal = document.getElementById('modalTrailer');
        const modalContent = modal.querySelector('div');
        const modalClose = document.getElementById('modalClose');

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
                iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
                iframe.frameBorder = "0";
                iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                iframe.allowFullscreen = true;
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                return iframe;
            } else if (url.endsWith('.mp4')) {
                const video = document.createElement('video');
                video.src = url;
                video.controls = true;
                video.autoplay = true;
                video.muted = false; // supaya suara ada (beberapa browser mungkin blok autoplay suara)
                video.style.width = '100%';
                video.style.height = '100%';
                video.style.backgroundColor = 'black';

                // Supaya autoplay di browser yang ketat bisa jalan, kita coba set muted dulu lalu unmute saat play
                video.muted = true;
                video.play().catch(() => {
                    // gagal autoplay, user klik manual
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

        document.querySelectorAll('.btn-trailer-hover').forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation(); // agar klik tombol tidak memicu klik film-card lain
                const trailerURL = button.getAttribute('data-trailer');
                if (!trailerURL) {
                    alert('Trailer tidak tersedia!');
                    return;
                }

                // Bersihkan konten modal (kecuali tombol close)
                Array.from(modalContent.children).forEach(child => {
                    if (child !== modalClose) modalContent.removeChild(child);
                });

                const videoEmbed = createVideoEmbed(trailerURL);
                if (!videoEmbed) {
                    alert('Trailer tidak tersedia atau format tidak didukung!');
                    return;
                }

                modalContent.appendChild(videoEmbed);
                modal.style.display = 'flex';
            });
        });

        modalClose.addEventListener('click', () => {
            modal.style.display = 'none';
            // Stop video & hapus
            Array.from(modalContent.children).forEach(child => {
                if (child !== modalClose) {
                    if (child.tagName === 'VIDEO') {
                        child.pause();
                        child.currentTime = 0;
                    }
                    modalContent.removeChild(child);
                }
            });
        });

        modal.addEventListener('click', e => {
            if (e.target === modal) {
                modalClose.click();
            }
        });
    </script>

</body>

</html>
