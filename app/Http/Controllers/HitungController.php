<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController
{
    public function ukur_balita()
    {
        return view('user.formhitung');
    }

    public function hitungKlasifikasi(Request $request)
    {
        // Validating the form inputs
        $validated = $request->validate([
            'tetangga_terdekat' => 'required|integer',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|integer',
            'umur' => 'required|integer',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
        ]);

        $k = intval($validated["tetangga_terdekat"]);

        // Prepare the data for classification
        $dataUntukDihitung = [
            "nama" =>  $validated["nama"],
            "jenis_kelamin" =>  intval($validated["jenis_kelamin"]),
            "umur" =>  intval($validated["umur"]),
            "berat_badan" =>  doubleval($validated["berat_badan"]),
            "tinggi_badan" =>  doubleval($validated["tinggi_badan"]),
        ];

        // Retrieve all the dataset
        $semuaData = Data::all(); // You may have a custom method to retrieve this data

        // Define the schema
        $schema = new Schema();
        $schema
            ->tambahParameter('jenis_kelamin')
            ->tambahParameter('umur')
            ->tambahParameter('berat_badan')
            ->tambahParameter('tinggi_badan')
            ->setParameterKlasifikasi('klasifikasi');

        // Create the dataset
        $dataset = new DataSet($schema, $k);

        foreach ($semuaData as $data) {
            $dataset->tambah(new Data([
                'nama' => $data->nama,
                'jenis_kelamin' => intval($data->jenis_kelamin),
                'umur' => intval($data->umur),
                'berat_badan' => floatval($data->berat_badan),
                'tinggi_badan' => floatval($data->tinggi_badan),
                'klasifikasi' => $data->klasifikasi
            ]));
        }

        // Perform the classification
        $hasil = $dataset->hitung(
            new Data([
                'nama' => $dataUntukDihitung["nama"],
                'jenis_kelamin' => $dataUntukDihitung["jenis_kelamin"],
                'umur' => $dataUntukDihitung["umur"],
                'berat_badan' => $dataUntukDihitung["berat_badan"],
                'tinggi_badan' => $dataUntukDihitung["tinggi_badan"],
            ])
        );

        $hasilHitung = $hasil["hasil_hitung"];
        $tetanggaTerdekat = $hasil["tetangga_terdekat"];
        $dataHasilHitungYangTerurut = $hasil["data_hasil_hitung_yang_terurut"];

        // Save the result into the session
        session([
            'dataUntukDihitung' => $dataUntukDihitung,
            'k' => $k,
            'dataHasilHitungYangTerurut' => $dataHasilHitungYangTerurut,
            'hasilHitung' => $hasilHitung,
        ]);

        // Redirect to the result page
        return redirect()->route('hasilHitung');
    }
}
