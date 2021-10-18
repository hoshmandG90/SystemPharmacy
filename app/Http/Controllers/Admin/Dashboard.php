<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\sold;
class Dashboard extends Component
{

    use WithPagination;
    public function render()
    {


         $solds=Sold::where('clean',true)->latest()->paginate(10);
         $AllQuantity=sold::sum('quantity');
         $Cashier =sold::all();
         $uniqueCasiher=$Cashier->unique('user_id')->count();
        
      
        return view('admin.dashboard',compact('solds','AllQuantity','uniqueCasiher'))->extends('layouts.master');
    }
}
