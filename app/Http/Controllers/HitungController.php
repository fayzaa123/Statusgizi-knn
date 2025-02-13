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
        // validasi input
        $request->validate([
            'umur' => 'required|numeric',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'k' => 'required|numeric' // nilai k untuk KNN
        ]);

        // mengambil data latih dari database
        $trainingData = Balita::all();

        // hitung jarak antara data uji dengan data latih
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

        /// urutkan berdasarkan jarak terdekat
        usort($distances, function($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });

        // ambil k tetangga terdekat
        $k = $request->k;
        $neighbors = array_slice($distances, 0, $k);

        // hitung jumlah status gizi dari tetangga terdekat
        $statusCount = [];
        foreach ($neighbors as $neighbor) {
            $status = $neighbor['status_gizi'];
            if (!isset($statusCount[$status])) {
                $statusCount[$status] = 0;
            }
            $statusCount[$status]++;
        }

        // tentukan hasil status gizi
        $predictedStatus = array_search(max($statusCount), $statusCount);

        // tampilkan hasil status gizi
        $rekomendasi = $this->getRekomendasi($predictedStatus);

        return view('user.hasil', [
            'status_gizi' => $predictedStatus,
            'neighbors' => $neighbors,
            'k' => $k,
            'rekomendasi'=> $rekomendasi
        ]);
    }

    // fungsi untuk mendapatkan rekomendasi makanan berdasarkan status gizi
    private function getRekomendasi($status)
    {
        // rekomendasi berdasarkan status gizi
        switch($status) {
            case 'Gizi Baik':
                return [
                    'Tetap berikan makanan seimbang sesuai dengan prinsip Isi Piringku (karbohidrat, protein, lemak sehat, sayur, dan buah). Contoh: Nasi, ikan, ayam, daging, tempe, tahu, sayur bayam, wortel, buah pisang, apel, pepaya. ',
                    'Berikan ASI eksklusif jika usia < 6 bulan',
                    'Berikan ASI eksklusif (jika masih di bawah 6 bulan)',
                    'Makanan Pendamping ASI (MPASI) yang kaya zat besi dan protein (jika di atas 6 bulan)',
                    'Pastikan anak makan 3 kali sehari dengan camilan sehat seperti buah atau susu',
                    'Rutin imunisasi dan pemeriksaan ke posyandu atau dokter anak',
                    'Pastikan anak cukup tidur dan aktif bermain',
                    'Jaga kebersihan diri dan lingkungan agar tidak mudah terkena infeksi',
                ];

            case 'Gizi Buruk':
                return [
                    'Balita mengalami defisit berat badan ekstrem, tubuh tampak kurus, sering lemas, dan berisiko terkena penyakit infeksi.',
                    'Pemberian makanan tinggi energi dan protein secara bertahap.',
                    'Gunakan makanan berbasis protein hewani: daging sapi, hati ayam, ikan, susu tinggi kalori.',
                    'MPASI bergizi tinggi: bubur kacang hijau, bubur ayam dengan telur, alpukat, dan minyak ikan.',
                    'Bisa diberikan formula khusus (seperti F-75 atau F-100 di bawah pengawasan dokter).',
                    'Makan dalam porsi kecil tetapi sering (5-6 kali sehari).',
                    'Jika anak sulit makan, konsultasikan dengan dokter untuk solusi alternatif seperti suplemen gizi.',
                    'Segera periksakan ke dokter atau puskesmas untuk penanganan lebih lanjut.',
                    'Bisa dirujuk ke fasilitas kesehatan jika mengalami komplikasi seperti infeksi atau dehidrasi.',
                    'Pastikan anak mendapatkan imunisasi lengkap dan vitamin A.',
                ];

            case 'Gizi Lebih':
                return [
                    'Balita memiliki berat badan melebihi standar untuk usianya, berisiko mengalami obesitas dan gangguan kesehatan lainnya.',
                    'Kurangi makanan tinggi gula, garam, dan lemak jenuh (permen, gorengan, makanan instan, minuman manis).',
                    'Perbanyak makanan tinggi serat: sayur, buah, dan biji-bijian utuh.',
                    'Gunakan protein sehat: ikan, ayam tanpa kulit, tahu, tempe, kacang-kacangan.',
                    'Gantilah camilan tidak sehat dengan buah potong, yogurt tanpa gula, atau kacang panggang.',
                    'Makan sesuai kebutuhan energi, hindari porsi berlebihan.',
                    'Biasakan makan bersama keluarga agar anak tidak terbiasa makan sambil menonton TV.',
                    'Ajak anak aktif bergerak minimal 1 jam sehari (bermain di luar, bersepeda, atau berenang).',
                    'Kurangi waktu screen time (TV, gadget) agar tidak malas bergerak.',
                    'Rutin kontrol ke tenaga medis jika berat badan terus meningkat drastis.',
                ];

            default:
                return [
                    'Balita memiliki berat badan lebih rendah dari standar usianya, berisiko mengalami kekurangan energi dan nutrisi esensial.',
                    'Makanan tinggi kalori dan protein untuk mempercepat pertumbuhan.',
                    'Contoh: Susu, telur, daging merah, ikan, ayam, tahu, tempe, alpukat, keju, kacang-kacangan.',
                    'MPASI tinggi energi dan nutrisi, seperti bubur dengan tambahan minyak zaitun atau santan.',
                    'Makan lebih sering (4-5 kali sehari) dengan camilan sehat di antaranya.',
                    'Susu tinggi kalori bisa diberikan setelah makan utama.',
                    'Periksa ke tenaga medis untuk mendeteksi adanya infeksi atau masalah pencernaan.',
                    'Berikan suplemen zat besi atau vitamin sesuai anjuran dokter.',
                    'Pastikan anak cukup tidur dan bermain untuk merangsang pertumbuhan.',
                ];
        }
    }
}
