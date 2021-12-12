<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //protected $fillable = [
       // 'name',
       // 'email',
       // 'password',
       // 'tgl_lahir',
      //  'id_kecamatan'
    //];

<<<<<<< HEAD
        protected $guarded = ['id'];
        protected $fillable= ['name','email','tgl_lahir'];
=======
    protected $guarded = ['id'];
    protected $fillable= ['name','email','tgl_lahir'];

>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501

        public function UserRole()
        {
            return $this->belongsTo(UserRole::class);
        }
        public function pelaporan()
        {
        return $this->hasMany(Pelaporan::class);
        }
   
}
