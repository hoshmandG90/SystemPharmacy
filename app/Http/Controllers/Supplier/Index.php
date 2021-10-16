<?php

namespace App\Http\Controllers\Supplier;

use Livewire\Component;
use App\Models\Supplier;
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
        $Suppliers=Supplier::latest()->paginate($this->limit);
        return view('supplier.index',compact('Suppliers'))->extends('layouts.master');
    }
}
