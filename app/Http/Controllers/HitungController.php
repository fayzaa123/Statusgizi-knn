<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;

class HitungController
{
    public function ukur_balita()
    {
        return view('user.formhitung');
    }

    public function hitungKlasifikasi(Request $request)
    {
        // Validate input
        $request->validate([
            'umur' => 'required|numeric',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'k' => 'required|numeric' // number of neighbors
        ]);

        // Get training data from database
        $trainingData = Balita::all();

        // Calculate distances
        $distances = [];
        foreach ($trainingData as $data) {
            $distance = sqrt(
                pow($data->umur - $request->umur, 2) +
                pow($data->berat - $request->berat, 2) +
                pow($data->tinggi - $request->tinggi, 2)
            );
            $distances[] = [
                'nama' => $data->nama,
                'usia' => $data->usia,
                'jenis_kelamin' => $data->jenis_kelamin,
                'berat' => $data->berat,
                'tinggi' => $data->tinggi,
                'distance' => $distance,
                'status_gizi' => $data->status_gizi
            ];
        }

        // Sort distances
        usort($distances, function($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });

        // Get k nearest neighbors
        $k = $request->k;
        $neighbors = array_slice($distances, 0, $k);

        // Count status frequencies
        $statusCount = [];
        foreach ($neighbors as $neighbor) {
            $status = $neighbor['status_gizi'];
            if (!isset($statusCount[$status])) {
                $statusCount[$status] = 0;
            }
            $statusCount[$status]++;
        }

        // Get most frequent status
        $predictedStatus = array_search(max($statusCount), $statusCount);

        return view('user.hasil', [
            'status_gizi' => $predictedStatus,
            'neighbors' => $neighbors,
            'k' => $k,
        ]);
    }
}
