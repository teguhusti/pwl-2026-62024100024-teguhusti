<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;
use Illuminate\Validation\Rule;

class PoliController extends Controller
{
    // 1. READ (Menampilkan daftar poli)
    public function index()
    {
        $polies = Poli::all();
        return view('poli.index', compact('polies'));
    }

    // 2. CREATE (Menampilkan form tambah)
    public function create()
    {
        return view('poli.create');
    }

    // 3. STORE (Menyimpan data baru)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'poli_code' => 'required|unique:polies,poli_code|max:10',
            'name' => 'required|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['is_active'] = $request->has('is_active') ? true : false;

        Poli::create($validated);

        return redirect()->route('poli.index')->with('success', 'Data Poli berhasil ditambahkan.');
    }

    // (Method show tidak wajib dipakai untuk saat ini, bisa dibiarkan kosong)
    public function show(string $id)
    {
        // 
    }

    // 4. EDIT (Menampilkan form edit)
    public function edit(Poli $poli)
    {
        return view('poli.edit', compact('poli'));
    }

    // 5. UPDATE (Menyimpan perubahan data)
    public function update(Request $request, Poli $poli)
    {
        $validated = $request->validate([
            'poli_code' => [
                'required', 'max:10',
                Rule::unique('polies', 'poli_code')->ignore($poli->id),
            ],
            'name' => 'required|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['is_active'] = $request->has('is_active') ? true : false;

        $poli->update($validated);

        return redirect()->route('poli.index')->with('success', 'Data Poli berhasil diperbarui.');
    }

    // 6. DESTROY (Menghapus data)
    public function destroy(Poli $poli)
    {
        $poli->delete();
        return redirect()->route('poli.index')->with('success', 'Data Poli berhasil dihapus.');
    }
}