@extends('layouts.app')

@section('title', 'Peminjaman')

@section('content')

    <h1 class="page-title">📋 Data Peminjaman</h1>

    <p class="page-subtitle">
        Daftar transaksi peminjaman buku.
    </p>

    @if (session('success'))
        <div class="alert">
            ✓ {{ session('success') }}
        </div>
    @endif

    <div class="card">

        <a
            href="{{ route('peminjaman.create') }}"
            class="btn btn-primary"
        >
            + Tambah Peminjaman
        </a>

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Buku</th>
                        <th>Anggota</th>
                        <th>Tanggal Pinjam</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($peminjaman as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                📖 {{ $item->buku->judul }}
                            </td>

                            <td>
                                👤 {{ $item->anggota->nama }}
                            </td>

                            <td>
                                {{ $item->tanggal_pinjam }}
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" style="text-align:center;">
                                📋 Belum ada transaksi peminjaman.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection