<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Perpustakaan</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #e8dff5, #dceefb, #f9e0e8);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-icon {
            width: 70px;
            height: 70px;
            margin: auto;
            background: rgba(255, 255, 255, 0.75);
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
            box-shadow: 0 8px 25px rgba(120, 100, 140, 0.12);
        }

        .logo h1 {
            margin-top: 12px;
            color: #55445f;
            font-size: 25px;
        }

        .logo p {
            margin-top: 5px;
            color: #827889;
            font-size: 14px;
        }

        .card {
            background: rgba(255, 255, 255, 0.92);
            padding: 30px;
            border-radius: 22px;
            box-shadow: 0 10px 35px rgba(120, 100, 140, 0.15);
        }

        .card h2 {
            color: #574b61;
            margin-bottom: 7px;
            font-size: 23px;
        }

        .subtitle {
            color: #8b8290;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #5d5363;
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ded5e3;
            border-radius: 11px;
            outline: none;
            font-size: 14px;
            background: #fdfbfe;
        }

        input:focus {
            border-color: #bda5da;
            box-shadow: 0 0 0 3px rgba(189, 165, 218, 0.15);
        }

        .error {
            color: #b85c6d;
            font-size: 13px;
            margin-top: 6px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .remember input {
            width: auto;
        }

        .remember label {
            margin: 0;
            font-weight: normal;
            color: #756b7b;
        }

        .forgot {
            display: block;
            text-align: right;
            margin-top: -5px;
            margin-bottom: 18px;
            color: #8b6fa8;
            font-size: 13px;
            text-decoration: none;
        }

        .forgot:hover {
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            border: none;
            padding: 12px;
            border-radius: 11px;
            background: #cbb5e5;
            color: #493b55;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-btn:hover {
            background: #bda5da;
        }

        .register-link {
            text-align: center;
            margin-top: 22px;
            color: #827889;
            font-size: 14px;
        }

        .register-link a {
            color: #8b6fa8;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            color: #827889;
            font-size: 12px;
            margin-top: 18px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">

            <div class="logo-icon">
                📚
            </div>

            <h1>Perpustakaan</h1>

            <p>Selamat datang di aplikasi perpustakaan</p>

        </div>

        <div class="card">

            <h2>Login Admin</h2>

            <p class="subtitle">
                Silakan masuk untuk mengelola perpustakaan.
            </p>

            @if (session('status'))
                <div class="error">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email"
                        required
                        autofocus
                    >

                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >

                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="remember">

                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                    >

                    <label for="remember_me">
                        Ingat saya
                    </label>

                </div>

                <button type="submit" class="login-btn">
                    🔐 Login
                </button>

            </form>

            <div class="register-link">
                Belum punya akun?
                <a href="{{ route('register') }}">
                    Daftar sekarang
                </a>
            </div>

        </div>

        <div class="footer">
            © {{ date('Y') }} Aplikasi Perpustakaan
        </div>

    </div>

</body>

</html>