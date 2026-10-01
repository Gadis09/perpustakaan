<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Perpustakaan</title>

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

        .register-container {
            width: 100%;
            max-width: 450px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-icon {
            width: 65px;
            height: 65px;
            margin: auto;
            background: rgba(255, 255, 255, 0.75);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 8px 25px rgba(120, 100, 140, 0.12);
        }

        .logo h1 {
            margin-top: 10px;
            color: #55445f;
            font-size: 24px;
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
            margin-bottom: 17px;
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

        .register-btn {
            width: 100%;
            border: none;
            padding: 12px;
            border-radius: 11px;
            background: #b9d8c1;
            color: #425b49;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 5px;
            transition: 0.2s;
        }

        .register-btn:hover {
            background: #a9cdb2;
        }

        .login-link {
            text-align: center;
            margin-top: 22px;
            color: #827889;
            font-size: 14px;
        }

        .login-link a {
            color: #8b6fa8;
            font-weight: bold;
            text-decoration: none;
        }

        .login-link a:hover {
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

    <div class="register-container">

        <div class="logo">

            <div class="logo-icon">
                📚
            </div>

            <h1>Perpustakaan</h1>

            <p>Buat akun untuk mengakses aplikasi</p>

        </div>

        <div class="card">

            <h2>Daftar Akun</h2>

            <p class="subtitle">
                Isi data berikut untuk membuat akun admin.
            </p>

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama lengkap"
                        required
                        autofocus
                    >

                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

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

                <div class="form-group">

                    <label for="password_confirmation">
                        Konfirmasi Password
                    </label>

                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        placeholder="Ulangi password"
                        required
                    >

                    @error('password_confirmation')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <button type="submit" class="register-btn">
                    ✨ Buat Akun
                </button>

            </form>

            <div class="login-link">
                Sudah punya akun?
                <a href="{{ route('login') }}">
                    Login di sini
                </a>
            </div>

        </div>

        <div class="footer">
            © {{ date('Y') }} Aplikasi Perpustakaan
        </div>

    </div>

</body>

</html>