<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bencana extends Model
{
    protected $guarded = ['id'];

    public function KategoriBencana()
    {
        return $this->belongsTo(KategoriBencana::class);
    }
    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class);
    }

}
