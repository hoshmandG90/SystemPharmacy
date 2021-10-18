<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\Stock;
use Livewire\WithPagination;

class NotLeft extends Component
{

    use WithPagination;
    public function render()
    {
        $stocks=Stock::where('count','<=',3)->latest()->paginate(10);
        return view('not-left',compact('stocks'))->extends('layouts.master');
    }
}
