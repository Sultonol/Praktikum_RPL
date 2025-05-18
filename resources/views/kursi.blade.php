{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Kursi Studio {{ $jadwal->studio->nomor_studio }}</title>
    <style>
        .kursi {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            text-align: center;
            line-height: 50px;
            border: 2px solid #333;
            cursor: pointer;
            border-radius: 5px;
            user-select: none;
        }
        .available {
            background-color: #a8e6a1;
        }
        .booked {
            background-color: #e69a9a;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <h2>Daftar Kursi Studio {{ $jadwal->studio->nomor_studio }}</h2>
    <p>Film: {{ $jadwal->film->judul_film ?? 'Film tidak ditemukan' }}</p>
    <p>Tanggal: {{ $jadwal->tanggal }}</p>
    <p>Jam Tayang: {{ $jadwal->jam_tayang }}</p>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="color: red">{{ session('error') }}</div>
    @endif

    <form action="{{ route('kursi.reservasi', ['kursi_id' => 0]) }}" method="POST" id="formReservasi">
        @csrf
        <input type="hidden" name="jadwal_id" value="{{ $jadwal->jadwal_id }}">
        <input type="hidden" name="user_id" value="{{ auth()->id() }}"> 

        <div>
            @foreach($kursis as $kursi)
                <div 
                    class="kursi {{ $kursi->status_kursi == 'booked' ? 'booked' : 'available' }}" 
                    data-id="{{ $kursi->kursi_id }}"
                    @if($kursi->status_kursi == 'booked') title="Sudah dipesan" @endif
                >
                    {{ $kursi->nomor_kursi }}
                </div>
            @endforeach
        </div>

        <input type="hidden" name="kursi_id" id="kursi_id" value="">

        <br>
        <button type="submit" id="btnReservasi" disabled>Pesan Kursi</button>
    </form>

    <script>
        const kursiElems = document.querySelectorAll('.kursi.available');
        const inputKursiId = document.getElementById('kursi_id');
        const btnReservasi = document.getElementById('btnReservasi');

        kursiElems.forEach(kursi => {
            kursi.addEventListener('click', function() {
                kursiElems.forEach(k => k.style.borderColor = '#333');
                this.style.borderColor = 'blue';
                inputKursiId.value = this.getAttribute('data-id');
                btnReservasi.disabled = false;
            });
        });

        document.getElementById('formReservasi').addEventListener('submit', function(e){
            if(inputKursiId.value === '') {
                e.preventDefault();
                alert('Silakan pilih kursi terlebih dahulu.');
            } 
        });
    </script>
</body>
</html> --}}
