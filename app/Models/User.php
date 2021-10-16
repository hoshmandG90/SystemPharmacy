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

   
    protected $guarded=[];

 
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps=true;

  
    
    public function getAvatarAttribute(){
        return '/uploads/Photos/'.$this->avatars;
    }
   
    public static function search($search){
        return empty($search) ? static::query() : 
        static::where('name','LIKE','%'.$search.'%')
        ->OrWhere('username','LIKE','%'.$search.'%')
        ->OrWhere('email','LIKE','%'.$search.'%')
        ->OrWhere('created_at','LIKE','%'.$search.'%');
    }
}
