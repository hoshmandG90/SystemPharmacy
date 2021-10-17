<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use App\Models\supplier;
use App\Models\Stocks;
class Create extends Component
{



    public $name;
    public $types;
    public $count;
    public $price;
    public $is_debt;
    public $supplier_id;
    public $expire_date;
    public function Store(){
       $Validation_Data= $this->Validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'supplier_id'=>'required',
            'expire_date'=>'required',
            'types' => 'required',
            'is_debt' => 'required'
        ]);

        Stocks::create($Validation_Data);
        notyf()->livewire()->position('y','top')->addSuccess('added stock  successfully');
        $this->clear();
        return back();
      
    }

    private function clear(){
        $this->name = '';
        $this->types ='';
        $this->price ='';
        $this->count ='';
        $this->is_debt ='';
        $this->supplier_id = '';
        $this->expire_date ='';
     


    }

    public function render()

    {
        $supplier=Supplier::all();
        return view('buy.create',compact('supplier'))->extends('layouts.master');
    }
}
