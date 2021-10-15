<?php

namespace App\Http\Controllers\Cashier;

use Livewire\Component;

class Create extends Component
{


    public function store(){
        dd("here");
    }
    public function render()
    {
        return view('cashier.create')->extends('layouts.master');
    }
}
