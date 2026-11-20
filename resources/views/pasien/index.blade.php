@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
    <h1>Data Pasien Klinik</h1>

    <a href="{{ route('pasien.create') }}" style="display: inline-block; background-color: blue; color: white; padding: 10px; text-decoration: none; margin-bottom: 15px;">Tambah Pasien</a>

    @if (session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: left;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>No.</th>
                <th>No. Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>L/P</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patients as $patient)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient->medical_record_number }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>
                        <a href="{{ route('pasien.edit', $patient->id) }}" style="color: blue;">Edit</a> | 
                        <form action="{{ route('pasien.destroy', $patient->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Hapus data pasien ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline; padding: 0;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data pasien.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection