<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use App\Models\stock;
use App\Models\Supplier;
class Edit extends Component
{

    public $stock;

    //Edit Stocks
    public $Newname;
    public $Newtypes;
    public $Newcount;
    public $Newprice;
    public $Newis_debt;
    public $Newsupplier_id;
    public $Newexpire_date;
    public $Newbarcode;

    public function mount(stock $stock){
        $this->Newbarcode = $stock->id;
        $this->Newstock = $stock;
        $this->Newname = $stock->name;
        $this->Newcount = $stock->count;
        $this->Newprice = $stock->price;
        $this->Newis_debt = $stock->is_debt;
        $this->Newtypes = $stock->types;
        $this->Newsupplier_id = $stock->supplier_id;
        $this->Newexpire_date = $stock->expire_date;
    }

    public function EditStock(stock $stock){
        $Validation_Data= $this->Validate([
            'Newbarcode' =>'required',
            'Newname' => 'required',
            'Newprice' => 'required',
            'Newtypes' => 'required',
            'Newcount' => 'required',
            'Newsupplier_id'=>'required',
            'Newexpire_date'=>'required',
            'Newis_debt' => 'required'
        ]);

        $stock->update([
            'id'=>$this->Newbarcode,
            'name'=>$this->Newname,
            'count'=>$this->Newcount,
            'price'=>$this->Newprice,
            'is_debt' =>$this->Newis_debt,
            'types'=>$this->Newtypes,
            'supplier_id'=>$this->Newsupplier_id,
            'expire_date'=>$this->Newexpire_date,
        ]);
        notyf()->livewire()->position('y','top')->addSuccess('updated stock successfully');
    }
    public function render()
    {

        $supplier=Supplier::all();
        return view('buy.edit',compact('supplier'))->extends('layouts.master');
    }
}
