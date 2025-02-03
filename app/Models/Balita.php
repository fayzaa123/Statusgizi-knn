<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    // Nama tabel yang sesuai dengan database
    protected $table = 'dataset';
    protected $primaryKey = 'id_balita';

    protected $fillable = [
        'nama',
        'usia',
        'jenis_kelamin',
        'berat',
        'tinggi',
        'status_gizi'
    ];
}
