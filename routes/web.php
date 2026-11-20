<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/klinik', function () {
    return 'Sistem Informasi Klinik';
});

Route::get('/pasien', [PatientController::class, 'index'])->name('pasien.index');
Route::get('/pasien/{id}', [PatientController::class, 'show']);
Route::get('/dokter', [DoctorController::class, 'index'])->name('dokter.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('poli', PoliController::class);

Route::get('/tentang', function () {
    return 'Sistem Informasi Klinik Dikembangkan menggunakan Laravel';
});

// Route untuk halaman utama (pakai Named Route)
Route::get('/jadwal', [ScheduleController::class, 'index'])->name('jadwal.index');

// Route untuk parameter hari (harus di bawah route /jadwal)
Route::get('/jadwal/{hari}', [ScheduleController::class, 'show']);