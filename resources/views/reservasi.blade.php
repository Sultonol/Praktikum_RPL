<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pilih Kursi</title>
</head>

<body>
    <h2>Pilih Kursi untuk Film: {{ $jadwal->film->judul }}</h2>
    <p>Tanggal: {{ $jadwal->tanggal }}</p>
    <p>Jam Tayang: {{ $jadwal->jam_tayang }}</p>
    <p>Studio: Studio {{ $jadwal->studio->nomor_studio }}</p>
    <p>Bioskop: {{ $jadwal->studio->bioskop->nama_bioskop }}</p>

    <h3>Daftar Kursi:</h3>
    <form action="{{ route('simpanReservasi') }}" method="POST">
        <select name="metode_pembayaran" required>
            <option value="pilih-transaksi">Pilih Transaksi</option>
            <option value="transfer">Bank</option>
            <option value="e-wallet">E-Wallet</option>
            <option value="qris">Qris</option>
        </select>
        @csrf
        <input type="hidden" name="jadwal_id" value="{{ $jadwal->jadwal_id }}" />
        <div style="display:flex; flex-wrap: wrap; max-width: 300px;">
            @foreach ($kursis as $kursi)
                <label
                    style="margin: 5px; padding: 10px; border: 1px solid #ccc; cursor: pointer;
                    background-color: {{ $kursi->status_kursi == 'available' ? '#aaf' : '#faa' }};
                    pointer-events: {{ $kursi->status_kursi == 'available' ? 'auto' : 'none' }};">
                    <input type="checkbox" name="kursi_id[]" value="{{ $kursi->kursi_id }}"
                        {{ $kursi->status_kursi != 'available' ? 'disabled' : '' }} />
                    {{ $kursi->nomor_kursi }}
                </label>
            @endforeach
        </div>

        <button type="submit" style="margin-top: 20px;">Pesan Kursi</button>
    </form>
</body>

</html>
