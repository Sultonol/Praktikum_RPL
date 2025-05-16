<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Bioskop</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      background: linear-gradient(135deg, #1a1a1a 0%, #3a0a0a 100%);
      font-family: 'Montserrat', sans-serif;
      color: #f0e6d2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #2b0a0a;
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(255, 215, 0, 0.3);
      width: 380px;
      text-align: center;
    }

    h2 {
      margin-bottom: 30px;
      font-weight: 700;
      font-size: 2rem;
      letter-spacing: 2px;
      color: #ffd700;
      text-shadow: 0 0 8px #ffd700;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px 18px;
      margin-bottom: 20px;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      background: #3e1a1a;
      color: #f0e6d2;
      box-shadow: inset 0 0 5px #ffd70055;
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      background: #501f1f;
      box-shadow: 0 0 10px #ffd700;
      outline: none;
    }

    button {
      width: 100%;
      padding: 14px 0;
      font-size: 1.1rem;
      font-weight: 700;
      color: #1a1a1a;
      background: #ffd700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      letter-spacing: 1px;
      transition: background 0.3s ease;
      box-shadow: 0 5px 15px #ffd70088;
    }

    button:hover {
      background: #e6c200;
      box-shadow: 0 6px 20px #e6c200aa;
    }

    .alert {
      margin-bottom: 20px;
      padding: 15px 20px;
      border-radius: 8px;
      font-weight: 600;
      text-align: left;
    }

    .alert-error {
      background: #440000;
      color: #ff8a80;
      box-shadow: 0 0 12px #ff8a80aa;
    }

    .alert-success {
      background: #274118;
      color: #b7e1a1;
      box-shadow: 0 0 12px #b7e1a1aa;
    }

    ul {
      margin: 0;
      padding-left: 20px;
    }

    .register-note {
      margin-top: 20px;
      font-size: 0.95rem;
      color: #ddd;
    }

    .register-note a {
      color: #ffd700;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .register-note a:hover {
      color: #ffffff;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>LOGIN BIOSKOP</h2>

    @if ($errors->any())
      <div class="alert alert-error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST" novalidate>
      @csrf
      <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Masuk</button>
    </form>

    <div class="register-note">
      Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a>
    </div>
  </div>
</body>
</html>
