<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class FormBalitaController
{
    //

    public function index()
    {
        $balita = Anak::all(); //
        return view('user.databalita', compact('balita'));
    }

    public function form_balita()
    {
        return view('user.formbalita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_balita' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
        ]);

        Anak::create($request->all());

        return redirect()->route('data.balita')->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy(string $id)
    {
        $balita = Anak::findOrFail($id);
        $balita->delete();
        return redirect()->back();
    }

    public function edit($id)
{
    $balita = Anak::findOrFail($id); // Cari data berdasarkan ID
    return view('user.formbalita', compact('balita')); // Pass data ke view
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_balita' => 'required',
        'jenis_kelamin' => 'required|in:L,P',
        'tanggal_lahir' => 'required|date',
    ]);

    $balita = Anak::findOrFail($id);
    $balita->update($request->all()); // Update data yang ada

    return redirect()->route('data.balita')->with('success', 'Data berhasil diperbarui.');
}



}
