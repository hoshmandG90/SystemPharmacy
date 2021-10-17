<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
class stocks extends Model
{
    protected $guarded=[];
    protected $table='stocks';
    public $timestamps=true;

    public function supplier(){
   return $this->belongsTo(Supplier::class);
    }

    protected $casts=[
        'expire_date' =>'date',
    ];

}
