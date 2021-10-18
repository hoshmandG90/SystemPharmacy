<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\Stock;
use Livewire\WithPagination;
use Illuminate\support\Carbon;
class ExpireStock extends Component
{
    use WithPagination;
    public function render()
    {


        $stocks=stock::where('expire_date','<=',Carbon::today())->latest()->paginate(10);
        return view('expire-stock',compact('stocks'))->extends('layouts.master');
    }
}
