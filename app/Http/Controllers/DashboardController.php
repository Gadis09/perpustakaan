<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahBuku = Buku::count();

        $jumlahAnggota = Anggota::count();

        $jumlahPeminjaman = Peminjaman::count();

        $bukuTersedia = Buku::sum('stok');

        return view('dashboard', compact(
            'jumlahBuku',
            'jumlahAnggota',
            'jumlahPeminjaman',
            'bukuTersedia'
        ));
    }
}