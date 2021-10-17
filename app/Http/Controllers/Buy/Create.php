<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use App\Models\supplier;
class Create extends Component
{
    public function render()

    {
        $supplier=Supplier::all();
        return view('buy.create',compact('supplier'))->extends('layouts.master');
    }
}
