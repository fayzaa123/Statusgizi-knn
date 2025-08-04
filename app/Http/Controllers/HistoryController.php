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

    public function report(){
        // Ambil semua data riwayat gizi
        $history = GiziHistory::with('anak')->get();


        // Jumlah balita unik berdasarkan anak_id
        $jumlah_balita = GiziHistory::select('balita_id')->distinct()->count();

        // Ambil status gizi terbaru untuk setiap balita
        $latestStatus = GiziHistory::select('balita_id', 'status_gizi')
            ->whereIn('id', function($query) {
                $query->selectRaw('MAX(id)')
                    ->from('gizihistory')
                    ->groupBy('balita_id');
            })
            ->get();

        // Hitung jumlah masing-masing status gizi terbaru
        $jumlah_status_terbaru = $latestStatus->groupBy('status_gizi')->map->count();

        // Pie chart jenis kelamin
        $jumlah_laki = Anak::where('jenis_kelamin', 'L')->count();
        $jumlah_perempuan = Anak::where('jenis_kelamin', 'P')->count();

        return view('admin.laporan', compact('history', 'jumlah_balita', 'jumlah_status_terbaru', 'jumlah_laki', 'jumlah_perempuan'));
    }


}
