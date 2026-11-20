@extends('layouts.app')

@section('title', 'Tambah Poli')

@section('content')
    <h1>Tambah Data Poli</h1>

    @if ($errors->any())
        <div style="color: red; background: #ffe6e6; padding: 10px; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('poli.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 10px;">
            <label>Kode Poli:</label><br>
            <input type="text" name="poli_code" value="{{ old('poli_code') }}">
            @error('poli_code') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Nama Poli:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label>Deskripsi:</label><br>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <div style="margin-bottom: 10px;">
            <label>
                <input type="checkbox" name="is_active" value="1" checked> Aktif
            </label>
        </div>

        <button type="submit" style="background: blue; color: white; padding: 10px;">Simpan</button>
        <a href="{{ route('poli.index') }}">Batal</a>
    </form>
@endsection