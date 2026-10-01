@extends('layouts.app')

@section('title', 'Data Anggota')

@section('content')

    <h1 class="page-title">👥 Data Anggota</h1>

    <p class="page-subtitle">
        Daftar anggota perpustakaan.
    </p>

    <div class="card">

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($anggota as $item)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_hp }}</td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" style="text-align:center;">
                                👥 Belum ada data anggota.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection