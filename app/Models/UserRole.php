<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $guarded = ['id'];

    public function User()
    {
        return $this->hasMany(User::class);
    }
    public function Role()
    {
        return $this->belongsTo(Role::class);
    }

}
