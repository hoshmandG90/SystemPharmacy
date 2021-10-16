<?php

namespace App\Http\Controllers\Supplier;

use Livewire\Component;
use App\Models\Supplier;

class Create extends Component
{

    public $company_name;
    public $supplier_name;
    public $address;
    public $phone;

    public function Suppliers(){
       $Validation_data= $this->Validate([
            'company_name' =>'required|String|max:25',
            'supplier_name' =>'required|String|max:50',
            'address' =>'required|String|max:50',
            'phone' =>'required|max:25|unique:suppliers'
        ]);
        Supplier::create($Validation_data);
        notyf()->livewire()->position('y','top')->addSuccess('the Supplier has been created');
        return back();
    }
    public function render()
    {
        return view('supplier.create')->extends('layouts.master');
    }
}
