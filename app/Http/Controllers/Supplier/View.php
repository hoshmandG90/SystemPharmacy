<?php

namespace App\Http\Controllers\Supplier;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Supplier;
class View extends Component
{
    use WithPagination;


    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($SupplierId){
        $Supplier = Supplier::findorfail($SupplierId);        
        Supplier::where('id',$Supplier->id)->delete();
        Notyf()->livewire()->position('y','top')->addError("the supplier is deleted");
        return back();

    }


    public function render()
    {
        $Suppliers=Supplier::search($this->search)->latest()->Paginate(2);
        $AllSupplier=Supplier::count();
        return view('supplier.view',compact('Suppliers','AllSupplier'))->extends('layouts.master');
    }
}
