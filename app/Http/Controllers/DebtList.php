<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\stock;
use Livewire\WithPagination;

class DebtList extends Component
{
    use WithPagination;
    public function render()
    {

        $stocks=stock::where('is_debt',1)->latest()->paginate(10);
        return view('debt-list',compact('stocks'))->extends('layouts.master');
    }
}
