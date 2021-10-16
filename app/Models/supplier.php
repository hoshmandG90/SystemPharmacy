<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $guarded=[];
    protected $table='suppliers';
    public $timestamps=true;


    public static function search($search){
        return empty($search) ? static::query() : 
        static::where('company_name','LIKE','%'.$search.'%')
        ->OrWhere('phone','LIKE','%'.$search.'%')
        ->OrWhere('address','LIKE','%'.$search.'%')
        ->OrWhere('supplier_name','LIKE','%'.$search.'%');
    }
}
