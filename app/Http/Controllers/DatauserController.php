<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orangtua;

class DatauserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datauser = Orangtua::all(); // Mengambil semua data dari tabel users
        return view('admin.datauser', compact('datauser')); // Menampilkan view Keloladatauser dengan data users
    }


    // Menampilkan form untuk membuat data baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

     // Menyimpan data ke dalam database
     Orangtua::create($validatedData);

     // Redirect ke halaman daftar (misal, halaman index)
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
    public function edit(string $id)
    {
        $datauser = Orangtua::findOrFail($id);
        return view('datauser.edit', compact('datauser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datauser = Orangtua::findOrFail($id);
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',


    // add other validation rules
    ]);
        $datauser->update($validated);

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datauser = Orangtua::findOrFail($id);
        $datauser->delete();
        return redirect()->back();
    }
}
