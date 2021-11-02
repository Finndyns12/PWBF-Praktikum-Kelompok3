<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    
    protected $guarded = ['id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
    public function pelaporan()
    {
        return $this->hasMany(Pelaporan::class);
    }
}
