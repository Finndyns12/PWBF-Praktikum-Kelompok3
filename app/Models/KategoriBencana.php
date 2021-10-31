<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_bencana extends Model
{
    protected $guarded = ['id'];

    public function bencana()
    {
        return $this->hasMany(Bencana::class);
    }
}
