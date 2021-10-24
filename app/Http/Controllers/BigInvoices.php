<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\Sold;
use App\Models\Stock;
use Illuminate\support\Carbon;
use App\Models\invoices;
use Livewire\WithPagination;

class BigInvoices extends Component
{
    use WithPagination;

    public $solds;
    public $Receipt_number;
    public function mount() {
        $this->Receipt_number =invoices::orderBy('id','DESC')->first();
        $this->solds=sold::where(['user_id'=>auth()->user()->id,'clean'=>false])->get();

    }
    
    public function render()
    {
        return view('big-invoices')->extends('layouts.base');
    }
}
