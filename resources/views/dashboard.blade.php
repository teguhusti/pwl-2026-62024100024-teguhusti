@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard Klinik</h1>
    <p>Selamat datang di Sistem Informasi Klinik.</p>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <div style="background-color: #e3f2fd; padding: 20px; border-radius: 8px; width: 200px;">
            <h3>Total Pasien</h3>
            <h1 style="margin: 0;">{{ $jumlahPasien }}</h1>
        </div>

        <div style="background-color: #e8f5e9; padding: 20px; border-radius: 8px; width: 200px;">
            <h3>Total Dokter</h3>
            <h1 style="margin: 0;">{{ $jumlahDokter }}</h1>
        </div>

        <div style="background-color: #fff3e0; padding: 20px; border-radius: 8px; width: 200px;">
            <h3>Total Poli</h3>
            <h1 style="margin: 0;">{{ $jumlahPoli }}</h1>
        </div>
    </div>
@endsection