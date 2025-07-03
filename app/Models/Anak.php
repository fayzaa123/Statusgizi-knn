<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    //
    protected $table = 'balita';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_balita',
        'jenis_kelamin',
        'tanggal_lahir',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
