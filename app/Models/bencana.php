<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class);
    }
}
