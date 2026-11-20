@extends('layouts.app')

@section('title', 'Edit Poli')

@section('content')
    <h1>Edit Data Poli</h1>

    @if ($errors->any())
        <div style="color: red; background: #ffe6e6; padding: 10px; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Action mengarah ke poli.update dengan ID poli yang diedit -->
    <form action="{{ route('poli.update', $poli->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Wajib ada untuk proses Update di Laravel -->

        <div style="margin-bottom: 10px;">
            <label>Kode Poli:</label><br>
            <input type="text" name="poli_code" value="{{ old('poli_code', $poli->poli_code) }}">
            @error('poli_code') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Nama Poli:</label><br>
            <input type="text" name="name" value="{{ old('name', $poli->name) }}">
            @error('name') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Deskripsi:</label><br>
            <textarea name="description">{{ old('description', $poli->description) }}</textarea>
        </div>

        <div style="margin-bottom: 10px;">
            <label>
                <!-- Logika: Jika is_active 1, maka checkbox otomatis tercentang -->
                <input type="checkbox" name="is_active" value="1" {{ $poli->is_active ? 'checked' : '' }}> Aktif
            </label>
        </div>

        <button type="submit" style="background: blue; color: white; padding: 10px;">Update</button>
        <a href="{{ route('poli.index') }}">Batal</a>
    </form>
@endsection