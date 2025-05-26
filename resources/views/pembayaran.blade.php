<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tagihan Pembayaran Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .tiket-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 25px;
						width: 400px;
            margin-bottom: 25px;
        }

        .judul-film {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .detail {
            margin-bottom: 8px;
            font-size: 16px;
        }

        .total {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }

        .qris {
            margin-top: 25px;
        }

        .btn-kembali {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 25px;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Tagihan Pembayaran Tiket Anda</h2>

    @php
        $jadwal = $reservasis[0]->jadwal;
        $kursiList = $reservasis->pluck('kursi.nomor_kursi')->toArray();
        $hargaTotal = $reservasis->sum('harga');
        $status = $reservasis[0]->pembayaran->status_pembayaran;
        $metodePembayaran = $reservasis[0]->pembayaran->metode_pembayaran;
    @endphp

    <div class="tiket-card">
        <div class="judul-film">{{ $jadwal->film->judul }}</div>
        <div class="detail">Studio: {{ $jadwal->studio->nomor_studio }} ({{ $jadwal->studio->bioskop->nama_bioskop }})</div>
        <div class="detail">Tanggal & Waktu: {{ $jadwal->tanggal }} - {{ $jadwal->jam_tayang }}</div>
        <div class="detail">Nomor Kursi: {{ implode(', ', $kursiList) }}</div>
        <div class="detail">Jumlah Tiket: {{ count($kursiList) }}</div>
        <div class="detail">Metode Pembayaran: {{ ucfirst($metodePembayaran) }}</div>
        <div class="detail">Status Pembayaran: <strong>{{ ucfirst($status) }}</strong></div>
        <div class="total">Total Harga: Rp {{ number_format($hargaTotal) }}</div>

        @if($metodePembayaran === 'qris')
            <div class="qris">
                <h4>Silakan scan QRIS Gopay berikut untuk membayar:</h4>
                <img src="{{ asset('images/qris_gopay.png') }}" alt="QRIS Gopay" width="250">
            </div>
        @endif
    </div>

    <a href="{{ route('jadwal.index') }}" class="btn-kembali">Kembali ke Beranda</a>
</body>
</html>
