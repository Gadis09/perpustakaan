@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')

    <h1 class="page-title">📚 Data Buku</h1>

    <p class="page-subtitle">
        Kelola data buku yang tersedia di perpustakaan.
    </p>

    @if (session('success'))
        <div class="alert">
            ✓ {{ session('success') }}
        </div>
    @endif

    <div class="card">

        <a href="{{ route('buku.create') }}" class="btn btn-primary">
            + Tambah Buku
        </a>

        <form action="{{ route('buku.index') }}" method="GET" class="search-box">

            <input
                type="text"
                name="keyword"
                placeholder="Cari judul atau pengarang..."
                value="{{ $keyword ?? '' }}"
            >

            <button type="submit" class="search-btn">
                🔍 Cari
            </button>

            <a href="{{ route('buku.index') }}" class="reset-btn">
                Reset
            </a>

        </form>

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($buku as $item)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->kode_buku }}</td>

                            <td>{{ $item->judul }}</td>

                            <td>{{ $item->pengarang }}</td>

                            <td>{{ $item->penerbit }}</td>

                            <td>{{ $item->tahun_terbit }}</td>

                            <td>{{ $item->stok }}</td>

                            <td>

                                <a
                                    href="{{ route('buku.edit', $item->id) }}"
                                    class="btn-edit"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('buku.destroy', $item->id) }}"
                                    method="POST"
                                    style="display:inline;"
                                    onsubmit="return confirm('Yakin ingin menghapus buku ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-delete"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="8" style="text-align:center;">
                                📚 Data buku tidak ditemukan.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection