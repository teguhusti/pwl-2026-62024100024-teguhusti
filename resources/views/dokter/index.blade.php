@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')
    <h1>Data Dokter Klinik</h1>
    
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: left; margin-top: 20px;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>No.</th>
                <th>Kode Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialisasi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($doctors as $doctor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $doctor->doctor_code }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>
                        <!-- Cek status aktif pakai is_active (boolean true/false) -->
                        @if ($doctor->is_active)
                            <span style="color: green; font-weight: bold;">Aktif</span>
                        @else
                            <span style="color: red; font-weight: bold;">Tidak Aktif</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada data dokter.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection