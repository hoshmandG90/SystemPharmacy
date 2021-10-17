<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\WithPagination;
use App\Models\Stocks;
use App\Models\Supplier;
class Index extends Component
{
    public function render()
    {
        $stocks=Stocks::latest()->With('supplier')->paginate(20);
       
        return view('buy.index',compact('stocks','supplier'))->extends('layouts.master');
    }
}
