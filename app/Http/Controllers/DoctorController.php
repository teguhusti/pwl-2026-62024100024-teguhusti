<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor; // <-- PENTING: Import Model Doctor

class DoctorController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel doctors di database
        $doctors = Doctor::all(); 

        return view('dokter.index', compact('doctors'));
    }
}