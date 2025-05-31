<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Bioskop</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>:root {
  --bg-dark: #121212;
  --card-bg: #1e1e2f;
  --primary-purple: #9f7aea;
  --primary-purple-light: #c084fc;
  --text-light: #f0e6ff;
  --error-red: #ff4c4c;
  --success-green: #9ae6b4;
  --input-bg: #2a2a40;
  --input-bg-focus: #383859;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background: var(--bg-dark);
  font-family: 'Montserrat', sans-serif;
  color: var(--text-light);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.login-container {
  background: var(--card-bg);
  padding: 40px 50px;
  border-radius: 16px;
  box-shadow: 0 0 30px rgba(159, 122, 234, 0.4);
  width: 100%;
  max-width: 400px;
  text-align: center;
  transition: box-shadow 0.3s ease;
}

.login-container:hover {
  box-shadow: 0 0 50px rgba(159, 122, 234, 0.6);
}

h2 {
  margin-bottom: 30px;
  font-weight: 700;
  font-size: 2.4rem;
  color: var(--primary-purple-light);
  text-shadow: 0 0 10px var(--primary-purple);
  letter-spacing: 2px;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 14px 18px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 10px;
  font-size: 1rem;
  background: var(--input-bg);
  color: var(--text-light);
  box-shadow: inset 0 0 5px #5c5c7a;
  transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="email"]:focus,
input[type="password"]:focus {
  background: var(--input-bg-focus);
  box-shadow: 0 0 12px var(--primary-purple);
  outline: none;
  border-color: var(--primary-purple-light);
}

button {
  width: 100%;
  padding: 14px 0;
  font-size: 1.15rem;
  font-weight: 700;
  color: #ffffff;
  background: linear-gradient(135deg, var(--primary-purple), var(--primary-purple-light));
  border: none;
  border-radius: 10px;
  cursor: pointer;
  letter-spacing: 1.5px;
  transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
  box-shadow: 0 6px 20px var(--primary-purple);
}

button:hover,
button:focus {
  background: linear-gradient(135deg, #b794f4, #d6bcfa);
  transform: translateY(-3px);
  box-shadow: 0 10px 30px var(--primary-purple-light);
  outline: none;
}

button:active {
  transform: translateY(-1px);
}

.alert {
  margin-bottom: 20px;
  padding: 15px 20px;
  border-radius: 8px;
  font-weight: 600;
  text-align: left;
  user-select: none;
}

.alert-error {
  background: #330000;
  color: var(--error-red);
  box-shadow: 0 0 12px #ff4c4c88;
}

.alert-success {
  background: #113322;
  color: var(--success-green);
  box-shadow: 0 0 12px #9ae6b488;
}

ul {
  margin: 0;
  padding-left: 20px;
}

.register-note {
  margin-top: 25px;
  font-size: 0.95rem;
  color: #ccc;
}

.register-note a {
  color: var(--primary-purple-light);
  font-weight: 600;
  text-decoration: none;
  transition: color 0.3s ease;
}

.register-note a:hover,
.register-note a:focus {
  color: #fff;
  text-decoration: underline;
  outline: none;
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
