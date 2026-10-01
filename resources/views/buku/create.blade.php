@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')

    <h1 class="page-title">📚 Tambah Buku</h1>

    <p class="page-subtitle">
        Tambahkan buku baru ke dalam perpustakaan.
    </p>

    <div class="card">

        <form action="{{ route('buku.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Kode Buku</label>

                <input
                    type="text"
                    name="kode_buku"
                    class="form-control"
                    value="{{ old('kode_buku') }}"
                    required
                >

                @error('kode_buku')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>Judul</label>

                <input
                    type="text"
                    name="judul"
                    class="form-control"
                    value="{{ old('judul') }}"
                    required
                >

                @error('judul')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>Pengarang</label>

                <input
                    type="text"
                    name="pengarang"
                    class="form-control"
                    value="{{ old('pengarang') }}"
                    required
                >

                @error('pengarang')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>Penerbit</label>

                <input
                    type="text"
                    name="penerbit"
                    class="form-control"
                    value="{{ old('penerbit') }}"
                    required
                >

                @error('penerbit')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>Tahun Terbit</label>

                <input
                    type="number"
                    name="tahun_terbit"
                    class="form-control"
                    value="{{ old('tahun_terbit') }}"
                    required
                >

                @error('tahun_terbit')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>Stok</label>

                <input
                    type="number"
                    name="stok"
                    class="form-control"
                    value="{{ old('stok') }}"
                    required
                >

                @error('stok')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn-save">
                ✓ Simpan Buku
            </button>

            <a
                href="{{ route('buku.index') }}"
                class="btn-back"
            >
                Kembali
            </a>

        </form>

    </div>

@endsection