<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Jadwal Tayang</title>
	<style>
		.jadwal-card {
			border: 1px solid #ccc;
			border-radius: 10px;
			padding: 16px;
			margin-bottom: 16px;
			width: 300px;
			box-shadow: 0 2px 4px rgba(0,0,0,0.1);
		}
		.btn {
			display: inline-block;
			margin-top: 10px;
			padding: 8px 12px;
			background-color: #007bff;
			color: white;
			text-decoration: none;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<h2>Jadwal Tayang</h2>
	@foreach($jadwals as $jadwal)
	    <div class="jadwal-card">
	        <p><strong>Film:</strong> {{ $jadwal->film->judul }}</p>
	        <p><strong>Tanggal:</strong> {{ $jadwal->tanggal }}</p>
	        <p><strong>Jam Tayang:</strong> {{ $jadwal->jam_tayang }}</p>
	        
	        @php
	            $hargaFix = $jadwal->harga < 40000 ? 35000 : 45000;
	        @endphp
	        <p><strong>Harga:</strong> Rp{{ number_format($hargaFix, 0, ',', '.') }}</p>

	        <p><strong>Studio:</strong> Studio {{ $jadwal->studio->nomor_studio }}</p>
	        <p><strong>Bioskop:</strong> {{ $jadwal->studio->bioskop->nama_bioskop }}</p>
	        <p><strong>Alamat:</strong> {{ $jadwal->studio->bioskop->alamat }}</p>

	        <a href="{{ route('reservasi', ['jadwal_id' => $jadwal->jadwal_id]) }}" class="btn">Pilih Kursi</a>
	    </div>
	@endforeach
</body>
</html>
