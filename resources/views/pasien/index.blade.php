@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
    <h1>Data Pasien Klinik</h1>
    
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: left; margin-top: 20px;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>No.</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patients as $patient)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient['nama'] }}</td>
                    <td>{{ $patient['alamat'] }}</td>
                    <td>
                        @if ($patient['status'] == 'Aktif')
                            <span style="color: green; font-weight: bold;">Aktif</span>
                        @else
                            <span style="color: blue; font-weight: bold;">Selesai</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Belum ada data pasien.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection