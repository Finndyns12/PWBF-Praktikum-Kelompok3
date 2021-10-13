<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bencana extends Model
{
    protected $table = 'bencana';

    public function bencana()
    {
        return $this->hasMany(bencana::class,'id_bencana','id');
    }
}
