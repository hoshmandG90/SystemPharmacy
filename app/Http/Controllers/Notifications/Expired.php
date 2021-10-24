<?php

namespace App\Http\Controllers\Notifications;

use Livewire\Component;
use App\Models\sold;
use Illuminate\support\Carbon;
use App\Models\Stock;
class Expired extends Component
{

    public $expire_product;
    public function mount(){

        $this->expire_product =Stock::where('expire_date','<=',carbon::today())->count();
    }
    public function render()
    {
        
        return view('notifications.expired')->extends('layouts.master');
    }
}
