<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Orangtua extends Authenticatable
{
    use HasFactory;
    protected $table = 'orangtua';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'email', 'password'];


    public function getIsAdminAttribute(): bool
    {
        return $this->email === 'admin@gmail.com';
    }

    public function anak(){
        return $this->hasMany(Anak::class);
    }

    public function history(){
        return $this->hasMany(GiziHistory::class);
    }
}
