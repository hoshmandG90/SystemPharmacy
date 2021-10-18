<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class sold extends Model
{
    protected $guarded=[];
    protected $table='solds';
    public $timestamps=true;


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function stock(){
        return $this->belongsTo(Stock::class);

    }
 
}
