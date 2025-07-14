<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\GiziHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController
{
    //
    public function index()
    {
        # Menampilkan data balita yang dimiliki oleh orangtua yang sedang login
        //$balita = Anak::where('orangtua_id', Auth::id())->get(); //

        $balita = Anak::whereHas('history') // hanya balita yang punya riwayat
                ->where('orangtua_id', Auth::id()) // hanya balita milik orangtua yang login
                ->with(['history' => function ($query) {
                    $query->latest('tanggal_ukur');
                }])
                ->get();

        return view('user.datahistory', compact('balita'));
    }

    public function edit($id)
    {
        //$balita = Anak::findOrFail($id); // Cari data berdasarkan ID


        //$balita = Anak::with('history')->findOrFail($id);

        $balita = Anak::with(['history' => function($query) {
            $query->orderByDesc('tanggal_ukur'); // Riwayat diurutkan terbaru ke lama
        }])->findOrFail($id);

        // Ambil riwayat terbaru (satu record)
        $terbaru = $balita->history->first();

        return view('user.riwayat', compact('balita', 'terbaru'));

    }


}
