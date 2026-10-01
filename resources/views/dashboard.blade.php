@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="dashboard-header">

        <div>
            <h1 class="page-title">
                🏠 Dashboard
            </h1>

            <p class="page-subtitle">
                Selamat datang kembali, <strong>{{ Auth::user()->name }}</strong>!
            </p>
        </div>

    </div>


    <!-- Kartu Statistik -->

    <div class="stats-grid">

        <div class="stat-card stat-purple">

            <div class="stat-icon">
                📚
            </div>

            <div>
                <p>Total Buku</p>
                <h2>{{ $jumlahBuku }}</h2>
            </div>

        </div>


        <div class="stat-card stat-blue">

            <div class="stat-icon">
                👥
            </div>

            <div>
                <p>Total Anggota</p>
                <h2>{{ $jumlahAnggota }}</h2>
            </div>

        </div>


        <div class="stat-card stat-pink">

            <div class="stat-icon">
                📋
            </div>

            <div>
                <p>Total Peminjaman</p>
                <h2>{{ $jumlahPeminjaman }}</h2>
            </div>

        </div>


        <div class="stat-card stat-green">

            <div class="stat-icon">
                📖
            </div>

            <div>
                <p>Buku Tersedia</p>
                <h2>{{ $bukuTersedia }}</h2>
            </div>

        </div>

    </div>


    <!-- Menu Cepat -->

    <div class="card dashboard-menu">

        <h2 class="section-title">
            ✨ Menu Cepat
        </h2>

        <p class="section-subtitle">
            Pilih menu yang ingin kamu buka.
        </p>


        <div class="quick-menu">

            <a href="{{ route('buku.index') }}" class="quick-card">

                <div class="quick-icon purple">
                    📚
                </div>

                <div>
                    <h3>Data Buku</h3>

                    <p>
                        Kelola data buku perpustakaan.
                    </p>
                </div>

            </a>


            <a href="{{ route('anggota.index') }}" class="quick-card">

                <div class="quick-icon blue">
                    👥
                </div>

                <div>
                    <h3>Data Anggota</h3>

                    <p>
                        Lihat daftar anggota perpustakaan.
                    </p>
                </div>

            </a>


            <a href="{{ route('peminjaman.index') }}" class="quick-card">

                <div class="quick-icon pink">
                    📋
                </div>

                <div>
                    <h3>Peminjaman</h3>

                    <p>
                        Kelola transaksi peminjaman buku.
                    </p>
                </div>

            </a>

        </div>

    </div>


    <!-- Informasi -->

    <div class="card information-card">

        <h2 class="section-title">
            💡 Informasi
        </h2>

        <p>
            Gunakan menu di atas untuk mengelola data perpustakaan.
            Pastikan data buku, anggota, dan peminjaman selalu diperbarui
            agar informasi perpustakaan tetap sesuai.
        </p>

    </div>


    <style>

        .dashboard-header {
            margin-bottom: 25px;
        }


        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }


        .stat-card {
            background: white;
            border-radius: 18px;
            padding: 22px;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 5px 20px rgba(150, 130, 160, 0.12);
        }


        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }


        .stat-card p {
            color: #8b8290;
            font-size: 13px;
            margin-bottom: 5px;
        }


        .stat-card h2 {
            color: #574b61;
            font-size: 25px;
        }


        .stat-purple .stat-icon {
            background: #e5d8ef;
        }


        .stat-blue .stat-icon {
            background: #dcebf6;
        }


        .stat-pink .stat-icon {
            background: #f5dce5;
        }


        .stat-green .stat-icon {
            background: #dcefdc;
        }


        .dashboard-menu {
            margin-bottom: 25px;
        }


        .section-title {
            color: #574b61;
            font-size: 21px;
            margin-bottom: 7px;
        }


        .section-subtitle {
            color: #8b8290;
            font-size: 14px;
            margin-bottom: 20px;
        }


        .quick-menu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }


        .quick-card {
            text-decoration: none;
            background: #fdf9fd;
            border: 1px solid #eee7f0;
            border-radius: 15px;
            padding: 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            transition: 0.2s;
        }


        .quick-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(150, 130, 160, 0.12);
        }


        .quick-icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }


        .quick-icon.purple {
            background: #e5d8ef;
        }


        .quick-icon.blue {
            background: #dcebf6;
        }


        .quick-icon.pink {
            background: #f5dce5;
        }


        .quick-card h3 {
            color: #574b61;
            font-size: 15px;
            margin-bottom: 5px;
        }


        .quick-card p {
            color: #8b8290;
            font-size: 12px;
            line-height: 1.4;
        }


        .information-card {
            margin-bottom: 20px;
        }


        .information-card p {
            color: #756b7b;
            font-size: 14px;
            line-height: 1.7;
        }


        @media (max-width: 900px) {

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-menu {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 600px) {

            .stats-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

@endsection