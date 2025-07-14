<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormBalitaController
{
    //

    public function index()
    {
        # Menampilkan data balita yang dimiliki oleh orangtua yang sedang login
        $balita = Anak::where('orangtua_id', Auth::id())->get(); //
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

        //Anak::create($request->all());
                // Menyimpan data balita dengan orangtua_id otomatis
        Anak::create([
                    'nama_balita' => $request->nama_balita,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'orangtua_id' => Auth::id(), // Mengambil ID orangtua yang login
                    'updated_at' => now(),
                    'created_at' => now(),
                ]);

        return redirect()->route('data.balita')->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy(string $id)
    {
        //$balita = Anak::findOrFail($id);

        // Cari balita berdasarkan ID dan pastikan itu milik orangtua yang login
        $balita = Anak::where('id', $id)->where('orangtua_id', Auth::id())->firstOrFail();
        $balita->delete();
        return redirect()->back();
    }

    public function edit($id)
{
    //$balita = Anak::findOrFail($id); // Cari data berdasarkan ID

    # Memastikan data ada dan milik orangtua yang sedang login
    $balita = Anak::where('id', $id)->where('orangtua_id', Auth::id())->firstOrFail();
    return view('user.formbalita', compact('balita')); // Pass data ke view
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_balita' => 'required',
        'jenis_kelamin' => 'required|in:L,P',
        'tanggal_lahir' => 'required|date',
    ]);

    //$balita = Anak::findOrFail($id);
    # Memastikan data ada dan milik orangtua yang sedang login
    $balita = Anak::where('id', $id)->where('orangtua_id', Auth::id())->firstOrFail();
    $balita->update($request->all()); // Update data yang ada

    return redirect()->route('data.balita')->with('success', 'Data berhasil diperbarui.');
}



}
