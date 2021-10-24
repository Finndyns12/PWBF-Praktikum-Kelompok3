<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
<<<<<<< HEAD
    protected $table='kota';
=======
    use HasFactory;

    protected $guarded = ['id'];

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class);
    }

>>>>>>> 96c294b1d62dd033bd0b477699a109ed9cb2eae6
}
