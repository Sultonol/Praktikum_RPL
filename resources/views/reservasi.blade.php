<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Pilih Kursi untuk Film: {{ $jadwal->film->judul }}</h2>
    <p>Tanggal: {{ $jadwal->tanggal }}</p>
    <p>Jam Tayang: {{ $jadwal->jam_tayang }}</p>
    <p>Studio: Studio {{ $jadwal->studio->nomor_studio }}</p>
    <p>Bioskop: {{ $jadwal->studio->bioskop->nama_bioskop }}</p>
    <form action="{{ route('simpanReservasi') }}" method="POST">
        @csrf
        <input type="hidden" name="jadwal_id" value="{{ $jadwal->jadwal_id }}" />

        <select name="metode_pembayaran">
            <option value="">Pilih Metode Pembayaran</option>
            <option value="transfer">Bank</option>
            <option value="e-wallet">E-Wallet</option>
            <option value="qris">Qris</option>
        </select>

        <div style="display:flex; flex-wrap: wrap; max-width: 300px; margin-top: 10px;">
            @foreach ($kursis as $kursi)
                @php
                    $isAvailable = !in_array($kursi->kursi_id, $reservedKursiIds);
                @endphp
                <label
                    style="margin: 5px; padding: 10px; border: 1px solid #ccc; cursor: pointer;
                background-color: {{ $isAvailable ? '#aaf' : '#faa' }};
                pointer-events: {{ $isAvailable ? 'auto' : 'none' }};">
                    <input type="checkbox" name="kursi_id[]" value="{{ $kursi->kursi_id }}"
                        {{ !$isAvailable ? 'disabled' : '' }}>
                    {{ $kursi->nomor_kursi }}
                </label>
            @endforeach
        </div>

        <a href="{{ route('jadwal.index') }}"
            style="display: inline-block; margin-top: 20px; margin-right: 10px; padding: 10px 15px; 
          background-color: #ccc; color: black; text-decoration: none; border-radius: 5px;">
            ← Kembali ke Jadwal
        </a>

        <button type="submit" style="margin-top: 20px;">Pesan Kursi</button>

    </form>
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const kursiTerpilih = document.querySelectorAll('input[name="kursi_id[]"]:checked');
            const metodePembayaran = document.querySelector('select[name="metode_pembayaran"]').value;

            let pesan = '';
            if (kursiTerpilih.length === 0) {
                pesan += '- Pilih setidaknya satu kursi.\n';
            }
            if (!metodePembayaran) {
                pesan += '- Pilih metode pembayaran.\n';
            }

            if (pesan !== '') {
                e.preventDefault(); // Mencegah form terkirim
                alert("Form belum lengkap:\n" + pesan);
            }
        });
    </script>
</body>

</html>
