<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Registrasi - Bioskop</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #1a1a1a, #3a0a0a);
      color: #f0e6d2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: #2b0a0a;
      padding: 35px 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);
      width: 100%;
      max-width: 360px;
      border: 1px solid #ffd70044;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 1.7rem;
      color: #ffd700;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px 14px;
      margin-bottom: 14px;
      border: 1px solid #444;
      border-radius: 6px;
      background-color: #3a1a1a;
      color: #fff;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    input:focus {
      border-color: #ffd700;
      outline: none;
    }

    input::placeholder {
      color: #aaa;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #ffd700;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 15px;
      color: #000;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #e6c200;
    }

    .login-note {
      margin-top: 18px;
      text-align: center;
      font-size: 14px;
      color: #ccc;
    }

    .login-note a {
      color: #ffd700;
      text-decoration: none;
      font-weight: 600;
    }

    .login-note a:hover {
      text-decoration: underline;
      color: #ffffff;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>🎬 Registrasi Member</h2>
    <form action="{{ route('register.post') }}" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Nama Lengkap" required />
      <input type="email" name="email" placeholder="Alamat Email" required />
      <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" required />
      <input type="password" name="password" placeholder="Kata Sandi" required />
      <input type="password" name="password_confirmation" placeholder="Ulangi Kata Sandi" required />
      <button type="submit">Daftar Sekarang</button>
    </form>
    <div class="login-note">
      Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
    </div>
  </div>
</body>
</html>
