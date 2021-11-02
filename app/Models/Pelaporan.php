<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsto(User::class);
    }
    public function bencana()
    {
        return $this->hasMany(Bencana::class);
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
    public function DetailKorban()
    {
        return $this->hasMany(DetailKorban::class);
    }
}
