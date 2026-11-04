<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // 1. Method untuk halaman utama jadwal
    public function index()
    {
        $judul = 'Jadwal Dokter';
        return view('jadwal.index', compact('judul'));
    }

    // 2. Method untuk menangkap parameter hari
    public function show($hari)
    {
        // Mengubah huruf pertama jadi kapital (senin -> Senin)
        $hariKapital = ucfirst($hari);
        return 'Jadwal Dokter Hari: ' . $hariKapital;
    }
}