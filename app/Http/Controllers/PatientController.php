<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = [
            ['id' => 1, 'nama' => 'Budi Santoso', 'alamat' => 'Kudus', 'status' => 'Aktif'],
            ['id' => 2, 'nama' => 'Siti Aminah', 'alamat' => 'Jepara', 'status' => 'Selesai'],
            ['id' => 3, 'nama' => 'Rina Wati', 'alamat' => 'Pati', 'status' => 'Aktif'],
            ['id' => 4, 'nama' => 'Andi Pratama', 'alamat' => 'Semarang', 'status' => 'Selesai'],
        ];

        return view('pasien.index', compact('patients'));
    }
}