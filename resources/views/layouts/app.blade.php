<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Perpustakaan')</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fdf7fb;
            color: #4b4453;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #d8c4e8, #c9def2);
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 12px rgba(150, 130, 160, 0.15);
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #55445f;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #55445f;
            padding: 9px 14px;
            border-radius: 12px;
            transition: 0.2s;
        }

        .nav-menu a:hover {
            background: rgba(255, 255, 255, 0.65);
        }

        .logout-btn {
            border: none;
            background: #e9b8c8;
            color: #5c3e49;
            padding: 9px 15px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 14px;
        }

        .logout-btn:hover {
            background: #dda9bb;
        }

        /* Container */
        .container {
            width: 92%;
            max-width: 1200px;
            margin: 35px auto;
        }

        .page-title {
            font-size: 28px;
            margin-bottom: 8px;
            color: #574b61;
        }

        .page-subtitle {
            color: #8b8290;
            margin-bottom: 25px;
        }

        /* Card */
        .card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(150, 130, 160, 0.12);
        }

        /* Buttons */
        .btn {
            display: inline-block;
            border: none;
            text-decoration: none;
            padding: 10px 17px;
            border-radius: 11px;
            cursor: pointer;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background: #cbb5e5;
            color: #493b55;
        }

        .btn-primary:hover {
            background: #bda5da;
        }

        .btn-edit {
            background: #b9d8ee;
            color: #3e596b;
            text-decoration: none;
            padding: 7px 11px;
            border-radius: 8px;
            font-size: 13px;
        }

        .btn-delete {
            background: #edc0cc;
            color: #704753;
            border: none;
            padding: 7px 11px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 13px;
        }

        /* Search */
        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .search-box input {
            flex: 1;
            max-width: 400px;
            padding: 11px 15px;
            border: 1px solid #ded5e3;
            border-radius: 11px;
            outline: none;
            font-size: 14px;
        }

        .search-box input:focus {
            border-color: #bda5da;
        }

        .search-btn {
            border: none;
            background: #c7dcef;
            color: #40566a;
            padding: 10px 18px;
            border-radius: 11px;
            cursor: pointer;
        }

        .reset-btn {
            text-decoration: none;
            background: #eee7f0;
            color: #665c69;
            padding: 10px 15px;
            border-radius: 11px;
        }

        /* Table */
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #e5d8ef;
            color: #55445f;
            padding: 13px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #eee7f0;
            font-size: 14px;
        }

        tr:hover td {
            background: #fdf9fd;
        }

        /* Alert */
        .alert {
            background: #dcefdc;
            color: #4e6b52;
            padding: 13px 17px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        /* Form */
        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #5d5363;
        }

        .form-control {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid #ded5e3;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
        }

        .form-control:focus {
            border-color: #bda5da;
        }

        .btn-save {
            background: #b9d8c1;
            color: #425b49;
            border: none;
            padding: 11px 18px;
            border-radius: 10px;
            cursor: pointer;
        }

        .btn-back {
            background: #eee7f0;
            color: #665c69;
            text-decoration: none;
            padding: 10px 17px;
            border-radius: 10px;
            margin-left: 7px;
        }

        .error {
            color: #b85c6d;
            font-size: 13px;
            margin-top: 5px;
        }

        /* Footer */
        .footer {
            text-align: center;
            color: #99909e;
            font-size: 13px;
            padding: 25px;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 15px 20px;
                flex-direction: column;
                gap: 12px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .container {
                width: 94%;
            }

            .search-box {
                flex-wrap: wrap;
            }

            .search-box input {
                max-width: none;
                width: 100%;
            }
            .user-name {
                color: #55445f;
                background: rgba(255, 255, 255, 0.55);
                padding: 9px 14px;
                border-radius: 12px;
                font-size: 14px;
                font-weight: bold;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            📚 Perpustakaan
        </div>

        <div class="nav-menu">

            <a href="{{ route('buku.index') }}">
                📖 Data Buku
            </a>

            <a href="{{ route('anggota.index') }}">
                👥 Anggota
            </a>

            <a href="{{ route('peminjaman.index') }}">
                📋 Peminjaman
            </a>

            @auth
                <span class="user-name">
                    👋 Halo, {{ Auth::user()->name }}
                </span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout-btn">
                        Logout
                    </button>
                </form>
            @endauth

        </div>

    </nav>

    <main class="container">

        @yield('content')

    </main>

    <footer class="footer">
        © {{ date('Y') }} Aplikasi Perpustakaan
    </footer>

</body>

</html>

