<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // Data dummy dokter
        $doctors = [
            ['nama' => 'dr. Teguh', 'spesialisasi' => 'Umum', 'status' => 'aktif'],
            ['nama' => 'dr. Siti', 'spesialisasi' => 'Anak', 'status' => 'cuti'],
            ['nama' => 'dr. Cyndy', 'spesialisasi' => 'Kandungan', 'status' => 'aktif'],
            ['nama' => 'dr. Akbar', 'spesialisasi' => 'Mata', 'status' => 'aktif'],
            ['nama' => 'dr. Yusuf', 'spesialisasi' => 'Gigi', 'status' => 'nonaktif'],
        ];

        return view('dokter.index', compact('doctors'));
    }
}