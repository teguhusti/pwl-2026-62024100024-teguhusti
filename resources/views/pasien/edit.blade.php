@extends('layouts.app')

@section('title', 'Edit Pasien')

@section('content')
    <h1>Edit Data Pasien</h1>

    @if ($errors->any())
        <div style="color: red; background: #ffe6e6; padding: 10px; margin-bottom: 15px; border: 1px solid red; border-radius: 5px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label>No. Rekam Medis (RM):</label><br>
            <input type="text" name="medical_record_number" value="{{ old('medical_record_number', $pasien->medical_record_number) }}">
            @error('medical_record_number') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Nama Lengkap Pasien:</label><br>
            <input type="text" name="name" value="{{ old('name', $pasien->name) }}">
            @error('name') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Jenis Kelamin:</label><br>
            <select name="gender">
                <option value="L" {{ old('gender', $pasien->gender) == 'L' ? 'selected' : '' }}>Laki-laki (L)</option>
                <option value="P" {{ old('gender', $pasien->gender) == 'P' ? 'selected' : '' }}>Perempuan (P)</option>
            </select>
            @error('gender') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Tanggal Lahir:</label><br>
            <input type="date" name="birth_date" value="{{ old('birth_date', $pasien->birth_date) }}">
            @error('birth_date') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Alamat (Opsional):</label><br>
            <textarea name="address" rows="3">{{ old('address', $pasien->address) }}</textarea>
            @error('address') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>No. Telepon (Opsional):</label><br>
            <input type="text" name="phone" value="{{ old('phone', $pasien->phone) }}">
            @error('phone') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <button type="submit" style="background: blue; color: white; padding: 10px 20px; border: none; cursor: pointer;">Update Data</button>
        <a href="{{ route('pasien.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection