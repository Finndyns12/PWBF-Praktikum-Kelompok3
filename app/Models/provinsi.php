<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['id_prov','name'];

    public function kota()
    {
        return $this->hasMany(Kota::class);
    }use HasFactory;
}
