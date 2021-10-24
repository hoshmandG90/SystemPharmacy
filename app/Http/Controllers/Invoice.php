<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\Sold;
use App\Models\Stock;
use Illuminate\support\Carbon;
use App\Models\invoices;
class Invoice extends Component
{


    public $result;
    public $Total_quantity;
    public function mount() {
        $this->Receipt_number =invoices::orderBy('id','DESC')->first();
        $this->result=sold::where(['user_id'=>auth()->user()->id,'clean'=>false])->get();


       


    }
    public function render()
    {
        return view('invoice')->extends('layouts.base');
    }
}
