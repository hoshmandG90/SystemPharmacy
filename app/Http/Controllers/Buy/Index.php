<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\WithPagination;
use App\Models\Stock;
use App\Models\Supplier;

class Index extends Component
{

    use WithPagination;
    public $status;
    public $searchForDate;
    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }





    public function FilterCategory($value =null){

        $this->status =$value;
        
    }

    public function delete($stockId){
        Stock::FindOrfail($stockId)->delete();
        notyf()->livewire()->position('y','top')->addError('the record has been deleted');
        return back();
    }
    public function render()
    {
        $stocks=Stock::where('name','LIKE','%'.$this->search.'%')->where('expire_date','LIKE','%'.$this->searchForDate.'%')->where('types','LIKE','%'.$this->status.'%')->latest()->With('supplier')->paginate(20);
       
        return view('buy.index',compact('stocks'))->extends('layouts.master');
    }
}

