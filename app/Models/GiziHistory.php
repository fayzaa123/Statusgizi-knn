<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiziHistory extends Model
{
    //
    protected $table = 'gizihistory';
    protected $primaryKey = 'id';

    protected $fillable = [
        'balita_id',
        'berat',
        'tinggi',
        'status_gizi',
        'orangtua_id',
        'tanggal_ukur',
    ];

    protected $casts = [
        'tanggal_ukur' => 'date',
    ];

    public function orangtua(){
        return $this->belongsTo(Orangtua::class);
    }

    public function anak(){
        return $this->belongsTo(Anak::class, 'balita_id');
    }
}
