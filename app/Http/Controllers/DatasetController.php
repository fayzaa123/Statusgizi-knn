<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balita;

class DatasetController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $balita = Balita::all(); //
        return view('admin.dataset', compact('balita'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari user
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'usia' => 'required|integer',
            'jenis_kelamin' => 'required|max:255',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'status_gizi' => 'required|max:255',
        ]);

        // Menyimpan data balita
        Balita::create($validatedData);

        // Redirect ke halaman daftar balita (misal, halaman index)
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_balita)
    {
        $balita = Balita::findOrFail($id_balita);
        return view('balita.edit', compact('balita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $balita = Balita::findOrFail($id);
        $validated = $request->validate([
        'nama' => 'required',
        'usia' => 'required',
        'jenis_kelamin' => 'required',
        'berat' => 'required',
        'tinggi' => 'required',
        'status_gizi' => 'required',

        // add other validation rules
    ]);
        $balita->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_balita)
    {
        $balita = Balita::findOrFail($id_balita);
        $balita->delete();
        return redirect()->back();
    }
}
