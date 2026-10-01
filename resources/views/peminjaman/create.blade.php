@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')

    <h1 class="page-title">📖 Tambah Peminjaman</h1>

    <p class="page-subtitle">
        Masukkan data transaksi peminjaman buku.
    </p>

    <div class="card">

        <form action="{{ route('peminjaman.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label>
                    Buku
                </label>

                <select
                    name="buku_id"
                    class="form-control"
                    required
                >

                    <option value="">
                        -- Pilih Buku --
                    </option>

                    @foreach ($buku as $item)

                        <option value="{{ $item->id }}">

                            {{ $item->judul }}
                            — Stok: {{ $item->stok }}

                        </option>

                    @endforeach

                </select>

                @error('buku_id')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label>
                    Anggota
                </label>

                <select
                    name="anggota_id"
                    class="form-control"
                    required
                >

                    <option value="">
                        -- Pilih Anggota --
                    </option>

                    @foreach ($anggota as $item)

                        <option value="{{ $item->id }}">
                            {{ $item->nama }}
                        </option>

                    @endforeach

                </select>

                @error('anggota_id')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label>
                    Tanggal Pinjam
                </label>

                <input
                    type="date"
                    name="tanggal_pinjam"
                    class="form-control"
                    value="{{ date('Y-m-d') }}"
                    required
                >

                @error('tanggal_pinjam')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <button type="submit" class="btn-save">
                ✓ Simpan Peminjaman
            </button>

            <a
                href="{{ route('peminjaman.index') }}"
                class="btn-back"
            >
                Kembali
            </a>

        </form>

    </div>

@endsection
