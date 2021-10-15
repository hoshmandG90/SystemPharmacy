<?php

namespace App\Http\Controllers\Cashier;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;



    public $limit=4;


    public function LoadMore(){
        $this->limit +=4;
    }
    public function render()
    {
        $Cashiers=User::latest()->paginate($this->limit);
        return view('cashier.index',compact('Cashiers'))->extends('layouts.master');
    }
}
