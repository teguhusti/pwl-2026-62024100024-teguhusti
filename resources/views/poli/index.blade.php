@extends('layouts.app')

@section('title', 'Data Poli')

@section('content')
    <h1>Data Poli Klinik</h1>

    <!-- Tombol Tambah Data -->
    <a href="{{ route('poli.create') }}" style="display: inline-block; background-color: blue; color: white; padding: 10px; text-decoration: none; margin-bottom: 15px;">Tambah Poli</a>

    <!-- Pesan Sukses (Flash Message) -->
    @if (session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: left;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>No.</th>
                <th>Kode Poli</th>
                <th>Nama Poli</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($polies as $poli)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $poli->poli_code }}</td>
                    <td>{{ $poli->name }}</td>
                    <td>{{ $poli->description }}</td>
                    <td>
                        @if ($poli->is_active)
                            <span style="color: green;">Aktif</span>
                        @else
                            <span style="color: red;">Tidak Aktif</span>
                        @endif
                    </td>
                    <td>
    <!-- Tombol Edit -->
    <a href="{{ route('poli.edit', $poli->id) }}" style="color: blue;">Edit</a> | 

    <!-- Tombol Hapus (Wajib pakai Form, bukan link biasa) -->
    <form action="{{ route('poli.destroy', $poli->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus data poli ini?');">
        @csrf
        @method('DELETE')
        <button type="submit" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline; padding: 0;">Hapus</button>
    </form>
</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data poli.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection